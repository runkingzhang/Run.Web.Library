
module.exports = function (grunt) {
  grunt.initConfig({
    concat: {
      dist: {
        src: ['src/test01.js', 'src/test02.js'],
        dest: 'dist/output.js'
      }
    },
    jshint: {
      options: {
        '-W033': true 
      },
      pre: ['src/test01.js', 'src/test02.js'],
      after: ['dist/output.js']
    }
  });
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');

  grunt.registerTask('default', ['jshint','concat']);
}

