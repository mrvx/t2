var mySrc = 'style.css';


var gulp = require('gulp');
var postcss = require('gulp-postcss');

var sass = require('gulp-sass');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var tinypng = require('gulp-tinypng-compress');
var uncss = require('gulp-uncss');
var runSequence = require('run-sequence');
var cssbeautify = require('gulp-cssbeautify');
var stripCssComments = require('gulp-strip-css-comments');
var autoprefixer = require('gulp-autoprefixer');
 


gulp.task('fonts', function() {
	return gulp.src('app/fonts/**/*')
	.pipe(gulp.dest('dist/fonts'))
})


gulp.task('sass', function(){
	return gulp.src('scss/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('css'))
});


gulp.task('images', function(){
	return gulp.src('images/**/*.+(png|jpg|jpeg|gif|svg)')
	.pipe(cache(imagemin({
		interlaced: true,
		progressive: true,
		optimizationLevel: 1
	//svgoPlugins: [{removeViewBox: true}]
})))
	.pipe(gulp.dest('dist/images'))
});

gulp.task('clean:dist', function() {
	return del.sync('dist');
})



gulp.task('tinypng', function () {
	gulp.src('images/**/*.{png,jpg,jpeg}')
	.pipe(tinypng({
		key: 'Mp8MoXfb6b8iDl2Oq-asvZh42rK0QvKA',
		sigFile: 'images/.tinypng-sigs',
		log: true
	}))
	.pipe(gulp.dest('imgcomp'));
});



gulp.task('purify', function () {
	return gulp.src('css/style.css')
	.pipe(uncss({
           html: ['http://test.greaton.ee/t2/megamyyk/ru.php', 'http://test.greaton.ee/t2/megamyyk'],
           ignore: ['#juku', '#juku2',  /\bsuccess+/, /\bfailed+/] 
       }))
	.pipe(gulp.dest('purified/'))
});




gulp.task('remcomments', function () {
    return gulp.src('beautified/*.css')
        .pipe(stripCssComments())
        .pipe(gulp.dest('nocomments/'));
});


gulp.task('beautify', function() {
	return gulp.src('css/*.css')
	.pipe(cssbeautify())
	.pipe(gulp.dest('beautified/'));;
});



//gulp.task('default', [ 'sass' ]);

gulp.task('watch', function(){
	gulp.watch('scss/**/*.scss', ['sass']);
});


/*gulp.task('default', function (callback) {
	runSequence(['sass', 'purify', 'watch'],
		callback
		)
});*/

gulp.task('build', function (callback) {
	runSequence('clean:dist', 
		['sass', 'tinypng', 'purify', 'beautify'],
		callback
		)
});

gulp.task('css-old', function (callback) {
	runSequence('purify', 'remcomments', 'beautify',
		callback
		)
});


gulp.task('css', function () {
    var plugins = [
       // autoprefixer()
       //cssbeautify()
    ];
    return gulp.src('purified/*.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('main/'));
});


gulp.task('autoprefixer', function () {
    gulp.src('nocomments/*.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('autoprefixed'))
});
