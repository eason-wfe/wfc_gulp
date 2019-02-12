var gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	autoprefixer = require('autoprefixer'),
	mainBowerFiles = require('main-bower-files'),
	browserSync = require('browser-sync').create(),
	// cleanCSS = require('gulp-clean-css'),
	minimist = require('minimist'),
	gulpSequence = require('gulp-sequence'),
	imagemin = require('gulp-imagemin');

// 	ENVIRONMENT
var envOptions = {
	string: 'env',
	default: {env: 'develop'}
}
var options = minimist(process.argv.slice(2), envOptions);
console.log(options);

// HTML
gulp.task('pug',function(){
	gulp.src('./source/**/*.pug')
	.pipe($.plumber())
	.pipe($.data(function(){
		var menu = require('./source/data/menu.json'),
			news = require('./source/data/news.json'),
			source = {
				'news': news,
				'menu': menu
			}
			return source;
	}))
	.pipe($.pug( $.if( options.env === 'develop',{
		pretty: true
	})))
	.pipe(gulp.dest('./public/'))
	.pipe(browserSync.stream());
});

// STYLE-SHEET
gulp.task('sass',function(){
	var plugins = [
		autoprefixer({browsers:['last 3 version','> 5%','ie 6']})
	];
	gulp.src('./source/scss/**/*.scss')
	.pipe($.sourcemaps.init())
	.pipe($.plumber())
	.pipe($.sass($.if( options.env === 'production',{
		outputStyle: 'compressed'
	})).on('error', $.sass.logError))
	.pipe($.postcss(plugins))
	.pipe($.rename(function(path){
		
		path.basename += '.min'
	}))
	// .pipe( $.if( options.env === 'produdction', cleanCSS() ) )
	.pipe($.sourcemaps.write('.'))
	.pipe(gulp.dest('./public/css/'))
	.pipe(browserSync.stream());
});

// JAVASCRIPT
gulp.task('babel', () =>
	gulp.src('source/js/**/*.js')
		.pipe($.sourcemaps.init())
		.pipe($.babel({
			presets: ['@babel/env']
		}))
		.pipe($.concat('idx.js'))
		.pipe($.if(options.env === 'production',$.uglify({
			compress: {
				drop_console: true
			}
		})))
		.pipe($.rename(function (path) {
			path.basename += '.min'
		}))
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest('./public/js/'))
		.pipe(browserSync.stream())
);

// IMAGES
gulp.task('imageMin', () =>
		gulp.src('./source/images/**/*')
			.pipe($.imagemin($.if( options.env === 'production',[
				imagemin.gifsicle({ interlaced: true }),
				imagemin.jpegtran({ progressive: true }),
				imagemin.optipng({ optimizationLevel: 5 })
			])))
			.pipe(gulp.dest('./public/images/'))
);

// BOWER
gulp.task('bower', function () {
	return gulp.src(mainBowerFiles({
		"overrides": {
			"vue": {
				"main": "dist/vue.js"
			},
			"bootstrap": {
				"main": "dist/js/bootstrap.js"
			}
		}
	}))
		.pipe(gulp.dest('./.tmp/vendors/'));
	cb(err);
});

// gulp.task('bower', function () {
// 	return gulp.src(mainBowerFiles())
// 		.pipe(gulp.dest('./.tmp/ventors'))
// });

gulp.task('vendors', ['bower'],function(){
	return gulp.src('./.tmp/vendors/**/*.js')
		.pipe($.order([
			'jquery.js',
			'bootstran.js'
		]))
		.pipe($.concat('vendars.js'))
		.pipe($.uglify())
		.pipe(gulp.dest('./public/js'))
});

// SERVER
gulp.task('browser-sync', function () {
	browserSync.init({
		server: {
			baseDir: "./public/"
		}
		// ,reloadDebounce : 2000
	});
});

// SYSTEM
gulp.task('clean',function(){
	return gulp.src(['./.tmp','./public/'], {read: false})
	// return gulp.src('./public/images/', { read: false })
		.pipe($.clean());
});

gulp.task('watch',function(){
	gulp.watch('./source/**/*.pug', ['pug']);
	gulp.watch('./source/scss/**/*.scss', ['sass']);
	gulp.watch('./source/js/**/*.js', ['babel']);
});

gulp.task('default',['pug','sass','babel','vendors','imageMin','browser-sync','watch']);

gulp.task('build', gulpSequence('clean','pug','sass','babel','vendors','imageMin'));
// gulp.task('build2', ['clean', 'pug',  'sass', 'babel', 'vendors']);