var gulp            = require('gulp');
var plumber         = require('gulp-plumber');
var sass            = require('gulp-sass');
var rename          = require('gulp-rename');
var autoprefixer    = require('gulp-autoprefixer');
var minifyCSS       = require('gulp-minify-css');
var browsersync     = require('browser-sync');
var sourcemaps      = require('gulp-sourcemaps');
var postCSS         = require('gulp-postcss');
var objectFitImages = require('postcss-object-fit-images');

gulp.task('styles', function() {
    gulp.src('styleguide.scss')
    .pipe(sourcemaps.init())
    .pipe(plumber(function (error) {
            console.log(error);
            this.emit('end');
        }))
    .pipe(sass())
    .pipe(postCSS([objectFitImages]))
    .pipe(autoprefixer({browsers: ['defaults', 'iOS >= 8']}))
    .pipe(minifyCSS())
    .pipe(rename('styleguide.min.css'))
    .pipe(sourcemaps.write('/'))
    .pipe(gulp.dest(''))
    .pipe(browsersync.stream({match: '**/*.css'}));
});

gulp.task('browser-sync', function() {
	browsersync({
		proxy: {
			target: 'https://shinya.local'
		},
		snippetOptions: {
			whitelist: ['/wp-admin/admin-ajax.php'],
			blacklist: ['/wp-admin/**']
		}
	});
});

gulp.task('default', ['watch']);

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('sass/**/*.scss',['styles']);
    gulp.watch('../**/*.php', function() {
        browsersync.reload();
    });
});
