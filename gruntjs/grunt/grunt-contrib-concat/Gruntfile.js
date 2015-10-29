module.exports = function (grunt) {
  grunt.initConfig({
    concat: {
      basic_and_extras: {
        files: {
          'dist/basic.js': ['src/test.js', 'src/zepto.js'],
          'dist/with_extras.js': ['src/underscore.js', 'src/backbone.js']
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-concat');
  // 默认任务
  grunt.registerTask('default', ['concat']);
}

