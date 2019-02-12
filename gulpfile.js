var gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

// DIRECTORY
gulp.task('rename',function(){
	gulp.src('./source/**/*.php')
	.pipe($.rename(function(path){
		path.extname = '.pug'
	}))
	.pipe(gulp.dest('./public/'))
});

// CLEAN
gulp.task('clean',function(){
	// return gulp.src(['./public/*.php','./node_modules'])
	return gulp.src('./node_modules')
		.pipe($.clean())
});

// PUG TO PHP
gulp.task('pug',function(){
	gulp.src('./source/**/*.pug')
	.pipe($.plumber())
	.pipe($.pug({
		pretty: true
	}))
	.pipe($.rename(function(path){
		path.extname = '.php'
	}))
	.pipe(gulp.dest('./public/'))
})

// SYSTEM
gulp.task('watch',function(){
	gulp.watch('./source/**/*.pug', ['pug']);
})

gulp.task('default',['pug','watch']);