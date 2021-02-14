'use strict';

var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    sassGlob    = require('gulp-sass-glob'),
    watch       = require('gulp-watch'),
    browserSync = require('browser-sync').create(),
    reload      = browserSync.reload,
    sourcemaps  = require('gulp-sourcemaps');

sass.compiler = require('node-sass');

// compile sass
gulp.task('sass', function () {
	return gulp
		.src('./ui/style.scss')
		.pipe(sassGlob())
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./css'))
    .pipe(reload({stream:true}));
});

// browser-sync task for starting the server
gulp.task('browser-sync', function() {
  var files = [
    './ui/*.scss'
  ]

  return browserSync.init(files, {
    proxy: "https://bedrock.lndo.site",
    notify: true
  })
});

// watch sass
gulp.task('default', gulp.series('sass', 'browser-sync', function() {
	gulp.watch('./ui/**/*.scss', gulp.series('sass'));
}));
