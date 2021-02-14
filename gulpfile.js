'use strict';

var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    sassGlob     = require('gulp-sass-glob'),
    autoprefixer = require('autoprefixer'),
    cssnano      = require('cssnano'),
    postcss      = require('gulp-postcss'),
    uglify       = require('gulp-uglify'),
    rename       = require('gulp-rename'),
    watch        = require('gulp-watch'),
    browserSync  = require('browser-sync').create(),
    sourcemaps   = require('gulp-sourcemaps');

sass.compiler = require('node-sass');

// compile sass
gulp.task('sass', function () {
  var plugins = [
    autoprefixer(),
    cssnano()
  ]

	return gulp
		.src('./ui/style.scss')
		.pipe(sassGlob())
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
});

// compile php
gulp.task('php', function() {
  return gulp.src('./ui/**/*.php')
    .pipe(browserSync.stream());
})

gulp.task('js', function() {
  return gulp.src('./ui/**/*.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./js'))
    .pipe(browserSync.stream());
})

// browser-sync task for starting the server
gulp.task('browser-sync', function() {

  browserSync.init({
    proxy: "bedrock.lndo.site",
    notify: true
  })

  gulp.watch('./ui/**/*.scss', gulp.series('sass'));
  gulp.watch('./ui/**/*.js', gulp.series('js'));
  gulp.watch('./ui/**/*.php', gulp.series('php'));
});

// watch sass
gulp.task('default', gulp.series('browser-sync'));
