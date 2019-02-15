var gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	plumber = require('gulp-plumber'),
	compass = require('gulp-compass');

// =======================
// ---- PUG
// =======================
gulp.task('pug',function(){
	gulp.src('./source/*.pug')
	.pipe($.plumber())
	.pipe($.data(function(){
		var header = require('./source/data/header.json'),
			wf = require('./source/data/wf.json'),
			source = {
				'header': header,
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
			source = {
				'header': header,
			}
		return source;
	}))
	.pipe($.pug({
		pretty: true
	}))
	.pipe(gulp.dest('./public/html_model/'))
});

// =======================
// ---- CSS
// =======================
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


// =======================
// ---- IMAGES
// =======================
gulp.task('image',function(){
	gulp.src('./source/img/**/*')
	.pipe(gulp.dest('./public/img/'))
});


// =======================
// ---- SYSTEM
// =======================
gulp.task('watch',function(){
	gulp.watch('./source/*.pug', ['pug']);
	gulp.watch('./source/partials/**/*.pug', ['partials'])
	gulp.watch('./source/scss/**/*.scss', ['compass'])
})

gulp.task('default',['pug','partials','compass','watch']);


// =======================
// ---- CLEAN
// =======================
gulp.task('clean', function(){
	gulp.src('./public/.git/**/*')
	.pipe(gulp.dest('./.tmp/git/.git/'))
	gulp.src('./public/.gitIgnore')
	.pipe(gulp.dest('./.tmp/git/'))
	setTimeout(function(){
		return gulp.src('./public/', {read: false})
			.pipe($.clean())		
	},1000);
});

gulp.task('cleanNode',function(){
	return gulp.src('./node_modules', {read: false})
	.pipe($.clean())
});


// =======================
// ---- BUILD
// =======================
gulp.task('env', function () {
	gulp.src('./source/assets/**/*')
		.pipe(gulp.dest('./public/assets/'))
	gulp.src('./source/js/**/*.js')
		.pipe(gulp.dest('./public/js/'))
	gulp.src('./.tmp/git/.git/**/*')
		.pipe(gulp.dest('./public/.git/'))
	gulp.src('./.tmp/git/.gitIgnore')
		.pipe(gulp.dest('./public/'))
	setTimeout(function () {
		return gulp.src('./.tmp/git/', {read: false})
			.pipe($.clean())
	}, 5000);
});

gulp.task('build', ['env','pug','partials','compass','image']);