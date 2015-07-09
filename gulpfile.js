// Setup variables for project paths
var themePath = 'public/wp-content/themes/Ribs/';

// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var browserSync = require('browser-sync').create();
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var pngquant = require('imagemin-pngquant');
var minifyCss = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var reload = browserSync.reload;

// Lint Task
gulp.task('lint', function() {
    return gulp.src('assets/js/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter(stylish))
  });

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('assets/scss/*.scss')
		.pipe(sourcemaps.init())
	        .pipe(sass({outputStyle: 'compressed '}))
			.pipe(autoprefixer())
			.pipe(concat('main.css'))
 		.pipe(sourcemaps.write())
        .pipe(gulp.dest(themePath + 'assets/css'))
        .pipe(reload({stream: true}));
});

// Process and Compress images
gulp.task('images', function() {
	return gulp.src('assets/images/**/*')
    	.pipe(cache(imagemin({ 
	    	optimizationLevel: 5, progressive: true, interlaced: true 
	    })))
        .pipe(gulp.dest(themePath + 'assets/images'))
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(themePath + 'assets/js'))
});

// Watch Files For Changes
gulp.task('watch', function() {
   browserSync.init({
        proxy: "dev.basewp.10.1.10.13.xip.io:8888",
        host: "localhost",
        port: 8888
    });
    gulp.watch('assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('assets/images/**/*', ['images']);
    gulp.watch('assets/scss/*.scss', ['sass']);
    gulp.watch("public/**/*.php").on('change', reload);

});

// Default Task
gulp.task('default', ['lint', 'sass', 'images', 'scripts', 'watch']);