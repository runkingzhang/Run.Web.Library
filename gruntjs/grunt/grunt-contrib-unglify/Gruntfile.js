
module.exports = function (grunt) {
  grunt.initConfig({
    uglify: {
      options: {
      banner: '/*! runkingzhang@myhexin.com */'
      },
      my_target: {
        files: [{
          expand: true,
          cwd: 'src',
          src: '**/*.js',
          dest: 'dest'
        }]
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-uglify');
   // 默认任务
  grunt.registerTask('default', ['uglify']);
}


