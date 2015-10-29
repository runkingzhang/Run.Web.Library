/* global module,require */

module.exports = function (grunt) {
  'use strict';

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.initConfig({
    watch: {
      sass: {
        files: ['assets/css/scss/**/*.scss'],
        tasks: ['styles']
      },
      js: {
        files: ['assets/js/**/*.js', '!assets/js/app.min.js'],
        tasks: ['scripts']
      }
    },

    sass: {
      dist: {
        options: {
          style: 'compressed',
          precision: 10
        },
        files: {
          'assets/css/main.css': 'assets/css/scss/main.scss'
        },
      }
    },

    autoprefixer: {
      dist: {
        options: {
          browsers: ['last 2 versions', 'ie 9'],
        },
        src: 'assets/css/main.css',
        dest: 'assets/css/main.css'
      }
    },

    jshint: {
      options: {
        jshintrc: '.jshintrc.json',
        force: true,
        reporter: require('jshint-stylish'),
        ignores: ['assets/js/app.min.js']
      },
      all: [
        'Gruntfile.js',
        'assets/js/**/*.js'
      ]
    },

    uglify: {
      options: {
        mangle: false
      },
      dist: {
        files: {
          'assets/js/app.min.js': ['assets/js/app.js']
        }
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'assets/img/',
          src: ['**/*.{png,jpg,jpeg,gif}'],
          dest: 'assets/img/'
        }]
      }
    }
  });

  grunt.registerTask('styles', ['sass', 'autoprefixer']);
  grunt.registerTask('scripts', ['jshint', 'uglify']);
  grunt.registerTask('default', ['styles', 'scripts', 'imagemin']);
};