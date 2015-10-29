
module.exports = function (grunt) {
  grunt.initConfig({
    cssmin: {
      compress: {
        files: {
          'dest/car.min.css': [
          "src/car.css",
          "src/car01.css"
        ]
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default', ['cssmin']);
}


