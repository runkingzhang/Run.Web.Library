#markdwon

markdown学习笔记和和代码演示
自己很久以前就学了markdown，但是一直不用，每次用起来的都要去问度娘。
而markdown现在用的越来越多，所以自己对markdown做一下简单的笔记。

##步骤
###step.1 : npm install markdown

###step.2 :  新建markdown文件

###step.3 : 修改exc.js中的markdown文件名称和生成HTML的名称内容。
exc.js code:

    // Code is just text indented a bit
    var md2html = require('./markdown').md2html;

	md2html({
	  //第一个是markdown文件
	  //第二个转化后生成的是html文件
	  //srcPath:__dirname + '/hello.md',
	  //destPath:__dirname + '/hello.html',

	  srcPath:__dirname + '/cheat-sheat.md',
	  destPath:__dirname + '/cheat-sheat.html',
	//  lib:'markdown',
	  callback:function (html) {
	    console.log(html.length, html.substr(0, 100));
	  }
	});

~~~

###step.4 : node exc.js








