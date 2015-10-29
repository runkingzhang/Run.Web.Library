module.exports = function (grunt) {
  grunt.loadNpmTasks('grunt-contrib-requirejs');
  //为了介绍自定义任务搞了一个这个
  grunt.registerTask('build', 'require demo', function () {
    //任务列表
    var tasks = ['requirejs'];
    //源码文件
    var srcDir = 'src';
    //目标文件
    var destDir = 'dest';
    //设置参数
    grunt.config.set('config', {
      srcDir: srcDir,
      destDir: destDir
    });
    //设置requireJs的信息
    var taskCfg = grunt.file.readJSON('gruntCfg.json');
    var options = taskCfg.requirejs.main.options,
        platformCfg = options.web,
        includes = platformCfg.include,
        paths = options.paths;
    var pos = -1;
    var requireTask = taskCfg.requirejs;
    options.path = paths;
    options.out = platformCfg.out;
    options.include = includes;
    //运行任务
    grunt.task.run(tasks);
    grunt.config.set("requirejs", requireTask);
  });
}