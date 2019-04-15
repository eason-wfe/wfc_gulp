var gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

// =======================
// ---- PUG
// =======================
gulp.task('pug', ()=>
	gulp.src('./source/*.pug')
	.pipe($.plumber())
	.pipe($.data(function(){
		var header = require('./source/data/header.json'),
			page = require('./source/data/page.json'),
			source = {
				'header': header,
				'page': page
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
			page = require('./source/data/page.json')
			source = {
				'header': header,
				'page': page
			}
		return source;
	}))
	.pipe($.pug({
		pretty: true
	}))
	.pipe(gulp.dest('./public/html_model'))
);

// =======================
// ---- SASS
// =======================
gulp.task('sassClone', function () {
	gulp.src('./public/sass/**/*')
	.pipe(gulp.dest('./source/sass'))
});


// =======================
// ---- IMAGES
// =======================
gulp.task('imageClone', ()=>
	gulp.src('./public/img/**/*')
	.pipe(gulp.dest('./source/img'))
);

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
		.pipe(gulp.dest('./.tmp/img-min'))
);


// =======================
// ---- JAVA SCRIPT
// =======================
gulp.task('jsClone',function(){
	gulp.src('./public/js/**/*.js')
		.pipe(gulp.dest('./source/js'))
})


// =======================
// ---- SYSTEM
// =======================
gulp.task('watch',function(){
	gulp.watch('./source/*.pug', ['pug']);
	gulp.watch('./source/partials/**/*.pug', ['partials'])
})

gulp.task('default', ['pug','partials','watch']);


// =======================
// ---- UPDATE	
// =======================
gulp.task('update', ['sassClone','imageClone','jsClone']);


// =======================
// ---- CLEAN
// =======================
gulp.task('clean', ['update'],function(){
	gulp.src('./public/.git/**/*')
		.pipe(gulp.dest('./.tmp/git/.git'))
	gulp.src('./public/.gitIgnore')
		.pipe(gulp.dest('./.tmp/git'))
	setTimeout(function(){
		return gulp.src('./public', {read: false})
			.pipe($.clean())		
	},20000);
});

gulp.task('cleanNode',function(){
	return gulp.src('./node_modules', {read: false})
	.pipe($.clean())
});

gulp.task('cleanPublic',function(){
	return gulp.src('./public', { read: false })
	.pipe($.clean())
})


// =======================
// ---- BUILD
// =======================
gulp.task('env', function () {
	// TO ASSETS
	gulp.src('./source/assets/**/*')
		.pipe(gulp.dest('./public/assets'))
	// TO IMAGE
	gulp.src('./source/image/**/*')
		.pipe(gulp.dest('./public/image'))
	// TO JS
	gulp.src('./source/js/**/*.js')
		.pipe(gulp.dest('./public/js'))
	// TO SCSS
	// gulp.src('./source/scss/**/*.scss')
	// 	.pipe(gulp.dest('./public/scss'))
	// TO SASS
	gulp.src('./source/sass/**/*.sass')
		.pipe(gulp.dest('./public/sass'))
	// TO .GIT
	gulp.src('./.tmp/git/.git/**/*')
		.pipe(gulp.dest('./public/.git'))
	// TO PUBLIC ( git & compass )
	gulp.src(['./.tmp/git/.gitignore',
					'./.tmp/compass/*'
				])
		.pipe(gulp.dest('./public'))
	setTimeout(function () {
		return gulp.src('./.tmp/git', {read: false})
			.pipe($.clean())
	}, 20000);
});

gulp.task('build', ['env','pug','partials','image']);

gulp.task('cssDef',function(){
	gulp.src('./.tmp/css_def/*')
	.pipe(gulp.dest('./public/css'))
})