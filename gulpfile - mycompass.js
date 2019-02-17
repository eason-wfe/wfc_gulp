var gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	chokidar = require('chokidar');

// =======================
// ---- PUG
// =======================
gulp.task('pug', ()=>
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
	.pipe(gulp.dest('./public'))
)

gulp.task('partials', ()=>
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
	.pipe(gulp.dest('./public/html_model'))
);

// =======================
// ---- CSS
// =======================
gulp.task('sass', function () {
	chokidar.watch('./source/scss', {
		persistent: true,
		ignored: /(^|[\/\\])\../,
		cwd: '.',
		depth: 99
	}).on('all', (event, path) => {
		console.log(event, path);
		return gulp.src('./source/scss/**/*.scss')
			.pipe($.sass().on('error', $.sass.logError))
			.pipe(gulp.dest('./.tmp/scss/'))
	});
});
// gulp.task('sass', function () {
// 	return gulp.src('./source/scss/**/*.scss')
// 		chokidar.watch('./source/scss', {
// 			persistent: true,
// 			ignored: /(^|[\/\\])\../,
// 			cwd: '.',
// 			depth: 99
// 		}).on('all', (event, path) => {
// 			console.log(event, path);
// 			.pipe($.sass().on('error', $.sass.logError))
// 		});
// 		.pipe(gulp.dest('./.tmp/scss/'))
// });




gulp.task('compass', ['sass'],function(){
	return gulp.src('./.tmp/scss/**/*.scss')
	.pipe($.compass({
		config_file: './source/scss/config.rb',
		sourcemap: true,
		time: true,
		css: './public/css',
		sass: './source/scss',
		style: 'compressed',
		image: './public/img'
	}))
	.pipe(gulp.dest('./public/css'))
});


// =======================
// ---- IMAGES
// =======================
gulp.task('image', ()=>
	gulp.src('./source/img/**/*')
	.pipe(gulp.dest('./public/img'))
);

gulp.task('imageMin', () =>
	gulp.src('./source/img/**/*')
		.pipe($.imagemin({
			optimizationLevel: 5, //類型：Number 預設：3 取值範圍：0-7（優化等級）
			progressive: true, //類型：Boolean 預設：false 無損壓縮jpg圖片
			interlaced: true, //類型：Boolean 預設：false 隔行掃描gif進行渲染
			multipass: true //類型：Boolean 預設：false 多次優化svg直到完全優化
		}))
		.pipe(gulp.dest('./public/img'))
);

// =======================
// ---- SYSTEM
// =======================
gulp.task('watch',function(){
	gulp.watch('./source/*.pug', ['pug']);
	gulp.watch('./source/partials/**/*.pug', ['partials'])
	gulp.watch('./source/scss/**/*.scss', ['sass'])
})

gulp.task('default',['pug','partials','sass','watch']);


// =======================
// ---- CLEAN
// =======================
gulp.task('clean', function(){
	gulp.src('./public/.git/**/*')
	.pipe(gulp.dest('./.tmp/git/.git'))
	gulp.src('./public/.gitIgnore')
	.pipe(gulp.dest('./.tmp/git'))
	setTimeout(function(){
		return gulp.src('./public', {read: false})
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
		.pipe(gulp.dest('./public/assets'))
	gulp.src('./source/js/**/*.js')
		.pipe(gulp.dest('./public/js'))
	gulp.src('./.tmp/git/.git/**/*')
		.pipe(gulp.dest('./public/.git'))
	gulp.src('./.tmp/git/.gitIgnore')
		.pipe(gulp.dest('./public'))
	setTimeout(function () {
		return gulp.src('./.tmp/git', {read: false})
			.pipe($.clean())
	}, 5000);
});

gulp.task('build', ['env','pug','partials','sass','image']);