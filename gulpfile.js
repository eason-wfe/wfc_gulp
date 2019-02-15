var gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	plumber = require('gulp-plumber'),
	compass = require('gulp-compass');

// PUG TO PHP / HTML
gulp.task('pug',function(){
	gulp.src('./source/*.pug')
	.pipe($.plumber())
	.pipe($.data(function(){
		var header = require('./source/data/header.json'),
			nav = require('./source/data/nav.json'),
			nav2 = require('./source/data/nav2.json'),
			navFull = require('./source/data/navFull.json'),
			wf = require('./source/data/wf.json'),
			source = {
				'header': header,
				'nav': nav,
				'nav': nav2,
				'navFull': navFull,
				'wf': wf
			}
		return source;
	}))
	.pipe($.pug({
		pretty: true
	}))
	.pipe($.rename(function(path){
		path.extname = '.php'
	}))
	.pipe(gulp.dest('./public/'))
})

gulp.task('partials',function(){
	gulp.src('./source/partials/**/*.pug')
	.pipe($.plumber())
	.pipe($.data(function(){
		var header = require('./source/data/header.json'),
			nav = require('./source/data/nav.json'),
			source = {
				'header': header,
				'nav': nav
			}
		return source;
	}))
	.pipe($.pug({
		pretty: true
	}))
	.pipe(gulp.dest('./public/html_model/'))
});

// STYLESHEET
gulp.task('compass',function(){
	return gulp.src('./source/scss/**/*.scss')
	.pipe(plumber())
	.pipe(compass({
		config_file: './source/scss/config.rb',
		sourcemap: true,
		time: true,
		css: './public/css/',
		sass: './source/scss/',
		style: 'compressed',
		image: './public/img'
	}))
	.pipe(plumber.stop())
	.pipe(gulp.dest('./public/css/'))
});

// IMAGES
gulp.task('image',function(){
	gulp.src('./source/img/**/*')
	.pipe(gulp.dest('./public/img/'))
});

// JS
gulp.task('js',function(){
	gulp.src('./source/js/**/*.js')
	.pipe(gulp.dest('./public/js/'))
});

// SYSTEM
gulp.task('assets',function(){
	gulp.src('./source/assets/**/*')
	.pipe(gulp.dest('./public/assets/'))
});

gulp.task('watch',function(){
	gulp.watch('./source/*.pug', ['pug']);
	gulp.watch('./source/partials/**/*.pug', ['partials'])
	gulp.watch('./source/scss/**/*.scss', ['compass'])
})

gulp.task('default',['pug','partials','compass','watch']);

gulp.task('clean',function(){
	// return gulp.src(['./public/*.php','./node_modules'])
	// return gulp.src('./node_modules', {read: false})
	return gulp.src('./public/', {read: false})
		.pipe($.clean())
});

gulp.task('clean-node',function(){
	return gulp.src('./node_modules', {read: false})
	.pipe($.clean())
});

gulp.task('build-dev', ['clean','pug','partials','compass','image','js','assets']);