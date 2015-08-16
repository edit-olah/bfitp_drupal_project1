// gulp plugin variables

var gulp = require('gulp'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    compass = require('gulp-compass'),
    gulpif = require('gulp-if');
    
var env,
    jsSources,
    sassSources,
    outputDir,
    sassStyle;
    
env = process.env.NODE_ENV || 'development';
    
if (env==='development') {
    outputDir = 'builds/development/';
    sassStyle = 'expanded';
}
     
    
    
// source variables
  
jsSources = [  // order of the files are important
    'components/scripts/jquery.mixitup.js',
    'components/scripts/base.js'
  
];    
sassSources = ['components/sass/style.scss'];


// gulp tasks
gulp.task('js', function(){
    gulp.src(jsSources)
      .pipe(concat('script.js'))
      .pipe(gulp.dest(outputDir + 'js'));
});


gulp.task('compass', function(){
    gulp.src(sassSources)
      .pipe(compass({
          comments: true,
          sass: 'components/sass',
          image: outputDir + 'images',
          style: sassStyle
      }))
      .on('error', gutil.log)
      .pipe(gulp.dest(outputDir + 'css'));
});

gulp.task('watch', function () {
    gulp.watch(jsSources, ['js']);
    gulp.watch('components/sass/*.scss', ['compass']);
});

gulp.task('default', ['js', 'compass', 'watch']);