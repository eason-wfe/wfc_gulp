var gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

gulp.task('rename',function(){
	gulp.src('./source/**/*.php')
	.pipe($.rename(function(path){
		path.extname = '.pug'
	}))
	.pipe(gulp.dest('./public/'))
});

gulp.task('clean',function(){
	return gulp.src(['./public/*.php','./public/'])
		.pipe($.clean())
});

gulp.task('pug',function(){
	gulp.src('./source/**/*.pug')
	.pipe($.pug({
		pretty: true
	}))
	.pipe($.rename(function(path){
		path.extname = '.php'
	}))
	.pipe(gulp.dest('./public/'))
})