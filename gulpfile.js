var gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

// CLEAN
gulp.task('clean',function(){
	// return gulp.src(['./public/*.php','./node_modules'])
	return gulp.src('./node_modules', {read: false})
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

// SYSTEM
gulp.task('watch',function(){
	gulp.watch('./source/*.pug', ['pug']);
	gulp.watch('./source/partials/**/*.pug', ['partials'])
})

gulp.task('default',['pug','partials','watch']);