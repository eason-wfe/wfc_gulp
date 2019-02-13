var gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

// DIRECTORY
gulp.task('rename',function(){
	gulp.src('./source/partials/**/*.html')
	.pipe($.rename(function(path){
		path.extname = '.pug'
	}))
	// .pipe(gulp.dest('./public/html_model/'))
});

// CLEAN
gulp.task('clean',function(){
	// return gulp.src(['./public/*.php','./node_modules'])
	return gulp.src('./node_modules')
		.pipe($.clean())
});

// PUG TO PHP / HTML
gulp.task('pug',function(){
	gulp.src('./source/*.pug')
	.pipe($.plumber())
	.pipe($.data(function(){
		var header = require('./source/data/header.json'),
			nav = require('./source/data/nav.json'),
			nav2 = require('./source/data/nav2.json'),
			navFull = require('./source/data/navFull.json'),
			source = {
				'header': header,
				'nav': nav,
				'nav': nav2,
				'navFull': navFull
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

gulp.task('h2p',function(){
	gulp.src('./org/html_model/**/*.html')
	.pipe($.html2pug())
	.pipe(gulp.dest('./source/partials/'))
});

// STYLESHEET
gulp.task('sass',function(){
	gulp.src('./source/scss/**/*.scss')
	.pipe($.plumber())
	.pipe($.sass({
		outpurStyle: 'compressed'
	}).on('error', $.sass.logError))
	.pipe(gulp.dest('./public/css/'))
});

// SYSTEM
gulp.task('watch',function(){
	gulp.watch('./source/*.pug', ['pug']);
	gulp.watch('./source/partials/**/*.pug', ['partials'])
})

gulp.task('default',['pug','partials','watch']);