# Less 回顾

---
##简介
LESSCSS是一种动态样式语言，属于CSS预处理语言的一种，它使用类似CSS的语法，为CSS的赋予了动态语言的特性，如变量、继承、运算、函数等，更方便CSS的编写和维护。
LESSCSS可以在多种语言、环境中使用，包括浏览器端、桌面客户端、服务端。
其实LESSCSS就是用JS把特定的css经过转移变成css。目的是为了方便css的变成，是的开发更加快捷高效。
###github地址
- [LessCSS英文：](https://github.com/cloudhead/less.js)
- [LessCSS中文](https://github.com/feichang/lesscss.net)
##编译
###使用koala编译
http://www.lesscss.net/article/usage.html
###使用node来编译
windows在npm install less
后不能使用less命令行.但是在node 中less模块加载可以正常使用。
###在浏览器中直接使用less
<link rel="stylesheet/less" type="text/css" href="styles.css" />
<script src="https://raw.githubusercontent.com/less/less.js/master/dist/less-1.4.2.min.js" type="text/javascript"></script>
由于less.js会通过ajax拉取.less文件，故必须在http(s)协议下使用，即直接双击打开是无法生效的
由于less.js会通过ajax拉取.less文件，故.less文件不可以跨域使用，否则会无法生效（当然，可以通过在服务端设置CORS来解决）
如果less要编译后才可以在浏览器中正常显示的会调试起来会比较麻烦。

##编译

### LessCSS基础：

变量允许我们单独定义一系列通用的样式，然后在需要的时候去调用。所以在做全局样式调整的时候我们可能只需要修改几行代码就可以了。

LESS源码：

	@color: #4D926F;

	#header {
		color: @color;
	}
	h2 {
		color: @color;
	}


编译后的CSS：

	#header {
		color: #4D926F;
	}
	h2 {
		color: #4D926F;
	}

这边可以把网页中可能需要修改的变量提取出来，这样就会比较快速的对页面css做对应的调整
### 混合（Mixins）

混合可以将一个定义好的class A轻松的引入到另一个class B中，从而简单实现class B继承class A中的所有属性。我们还可以带参数地调用，就像使用函数一样。

LESS源码：

	.rounded-corners (@radius: 5px) {
		-webkit-border-radius: @radius;
		-moz-border-radius: @radius;
		-ms-border-radius: @radius;
		-o-border-radius: @radius;
		border-radius: @radius;
	}
	
	#header {
		.rounded-corners;
	}
	#footer {
		.rounded-corners(10px);
	}

编译后的CSS：

	#header {
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
		-o-border-radius: 5px;
		border-radius: 5px;
	}
	#footer {
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		-ms-border-radius: 10px;
		-o-border-radius: 10px;
		border-radius: 10px;
	}

混合和做css中的模块化组装。
### 嵌套

我们可以在一个选择器中嵌套另一个选择器来实现继承，这样很大程度减少了代码量，并且代码看起来更加的清晰。

LESS源码：

	#header {
		h1 {
			font-size: 26px;
			font-weight: bold;
		}
		p {
			font-size: 12px;
			a {
				text-decoration: none;
				&:hover {
					border-width: 1px
				}
			}
		}
	}

编译后的CSS：

	#header h1 {
		font-size: 26px;
		font-weight: bold;
	}
	#header p {
		font-size: 12px;
	}
	#header p a {
		text-decoration: none;
	}
	#header p a:hover {
		border-width: 1px;
	}
嵌套让样式继承变的更加清晰明了
### 函数和运算

运算提供了加，减，乘，除操作；我们可以做属性值和颜色的运算，这样就可以实现属性值之间的复杂关系。LESS中的函数一一映射了JavaScript代码，如果你愿意的话可以操作属性值。

LESS源码：

	@the-border: 1px;
	@base-color: #111;
	@red:        #842210;

	#header {
		color: (@base-color * 3);
		border-left: @the-border;
		border-right: (@the-border * 2);
	}
	#footer {
		color: (@base-color + #003300);
		border-color: desaturate(@red, 10%);
	}

编译后的CSS：

	#header {
		color: #333;
		border-left: 1px;
		border-right: 2px;
	}
	#footer {
		color: #114411;
		border-color: #7d2717;
	}

##函数手册见



##遇到问题

##相关网站
- [LessCSS中文官网：](http://www.lesscss.net/)
- [LessCSS漫谈](http://www.html-js.com/article/column/127)

## 相关文章

- [webstorm 用firewatcher编译less](http://www.cnblogs.com/enix/archive/2013/06/07/3123899.html)
- [koala(英文)](http://www.webresourcesdepot.com/desktop-compiler-for-less-sass-compass-and-coffeescript-koala/)
- [不要盲目在项目中使用LESSCSS](http://www.cnblogs.com/hooray/archive/2011/12/02/2272212.html)（这篇评论很值得一看，^O^）
- [为什么应该在web开发中使用LESSCSS](http://blog.ryanye.me/2012/10/06/why-you-should-use-lesscss/)
- [让VS2012支持LESSCSS](http://oklai.name/2012/08/%E8%AE%A9vs2012%E6%94%AF%E6%8C%81less-css/)（sublime等编辑器也可以使用类似的方式）
- [Using Less.js to Simplify Your CSS3](http://designshack.net/articles/css/using-less-js-to-simplify-your-css3)
- [我的LESS编译方案](http://www.cnblogs.com/gewei/p/3242558.html)
- [Sublime Text 2的Less2Css插件介绍与安装](http://fdream.net/blog/article/783.aspx)
- [有关less 处理@arguments的一些高级技巧](http://www.cnblogs.com/rubylouvre/p/3207573.html)
- [Twitter Bootstrap：前端框架利器](http://www.programmer.com.cn/13861/)
