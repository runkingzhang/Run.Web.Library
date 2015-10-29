module.exports = function(grunt) {
  grunt.initConfig({
    //把几个js连接成为一个js文件
    
    concat : {
      options: {
        separator: '\n\n//------------------------------------------\n',
        banner: '\n\n//------------------------------------------\n'
      },
      dist : {
        src: ['components/scripts/*.js'],
        dest: 'builds/development/js/script.js'
      }
    }, //concat
    //sass转变一个css文件
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files : [{
          src: 'components/sass/style.scss',
          dest: 'builds/development/css/style.css'
        }]
      }
    }, //sass
    // inject Bower packages 默认插入依赖的文件
    wiredep: {
      task: {
        src: 'builds/development/**/*.html'
      }
    },

     //建立对应的服务器，页面可以在浏览器中输出，并且有监听
    connect: {
      sever: {
        options: {
          hostname: 'localhost',
          port: 3000,
          base: 'builds/development/',
          livereload: true
        }
      }
    },
   // 监听项目
    watch: {
      options: {
        spawn: false,
        livereload: true
      },
      scripts: {
        files: ['builds/development/**/*.html',
        'components/scripts/**/*.js',
        'components/sass/**/*.scss'],
        tasks: ['concat', 'sass']
      }
    }


  }); //initConfig

  //加载进来相关的grunt插件来完成相对应的工作

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-wiredep');

  grunt.registerTask('default', ['wiredep', 'concat', 'sass', 'connect', 'watch']);

}; //wrapper function