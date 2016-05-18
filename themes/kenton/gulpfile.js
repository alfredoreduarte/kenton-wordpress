var gulp = require('gulp');
var sass = require('gulp-sass');
var bulkSass = require('gulp-sass-bulk-import');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(){
	return gulp.src('src/sass/style.sass')
	.pipe(sourcemaps.init())
	.pipe(bulkSass())
	.pipe(sass({
		includePaths: [
			 './src/sass',
			'./node_modules',
			'./bower_components',
 		],
		//outputStyle: 'compressed',
		outputStyle: 'compact',
		// outputStyle: 'nested',
		// outputStyle: 'expanded',
	}).on('error', sass.logError))
	.pipe(sourcemaps.write('./'))
	.pipe(gulp.dest('./'))
});

gulp.task('default', ['sass'], function(){
	gulp.watch('src/sass/**/*.{sass,scss,css}', ['sass']);
});

gulp.task('build', ['sass'], function(){
	console.log('Build Done!');
	return true;
});