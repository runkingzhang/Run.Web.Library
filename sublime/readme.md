#sublime 学习

##前言
对sublime学习，了解其快捷键和快速开发的方式。安装比较常见的安装包。
对工具的了解可以很大的提高自己的开发速度和对应的开发效率。


## 快捷键 
这边一般的情况下使用command+shift+p 输入相关的内容信息，可以比较快速的调出快键方式，这边可以减少对快简介内容的记忆。
sublime中常见的快简介可以查看

[sublime常用的快捷键](http://jingyan.baidu.com/article/59a015e3a4340bf7948865d2.html)


## 插件 
sublime 有很多非常好用的插件，合理的使用插件可以比较快速的提升自己对应的开发效率。
在快捷键是用中自己可以到sublime的package的官方网站查看对应的使用方式。
可以选择本地安装和网络安装两种方式。

- snippets 代码片段书写

snippets 代码片段，方便自己快速开发。
功能：代码提示

简介：在sublime输入对应的简写后就生成相关的文件。
JavaScript & NodeJS Snippets 自己安装的是这个snippets，这边还是需要对应的写相关的内容，
可以更具需要来安装不同的snippets。
使用：https://packagecontrol.io/packages/JavaScript%20%26%20NodeJS%20Snippets
上面有相关的简写方式。


-  Emmet
功能：编码快捷键，前端必备,可以看做是前端开发的snippets

简介：Emmet作为zen coding的升级版，对于前端来说，可是必备插件，如果你对它还不太熟悉，可以在其官网（http://docs.emmet.io/）上看下具体的演示视频。

使用：[Emmet的简写方式和是用教程](http://docs.emmet.io/cheat-sheet/)


- advanceNewfile

功能：直接新建文件和文件夹，并在sublime中打开

简介：快速在sublime里面对文件进行新建。

使用：command+alt +n 新建文件，路径+文件夹名字
command+alt +n  index.html 
command+alt +n  css/index.css  新建css文件夹和index.css文件


- nettus fetch  

功能：直接从对应设置的路径中获取对应的文件和package

简介：对file 和package的管理

使用：这边可以用阿里pci定义对应的基础项目和文件
command + shift +p 输入 fetch manage。
在里面设置对应自己常用的类库和包，这样就不用每次都去更新相关的
这边是file ，manage是对应的管理选项
package file是对应的文件内容，可以用来做对应的新建内容选项。这个是对应的文件包的下载内容。
可以利用这个插件来构建自己常用的代码文件，自己可以吧代码片段自动编辑为snippets，把基础的项目文件放到github上面，然后通过配置来生成对应的fetch，这样自己就可以来快速构建相关的环境了的。
[Introducing Nettuts+ Fetch](http://code.tutsplus.com/articles/introducing-nettuts-fetch--net-23490)


- Doc​Blockr

功能：生成优美注释

简介：标准的注释，包括函数名、参数、返回值等，并以多行显示，手动写比较麻烦

使用：输入/*、/**然后回车，还有很多用法，请参照
[DocBlockr的介绍](https://sublime.wbond.net/packages/DocBlockr)
unction的注释，在写好了function在上面写/**回车后就可以对应的生成相关的注释，


- JSFormat

功能：Javascript的代码格式化插件

简介：很多网站的JS代码都进行了压缩，一行式的甚至混淆压缩，这让我们看起来很吃力。而这个插件能帮我们把原始代码进行格式的整理，包括换行和缩进等等，是代码一目了然，更快读懂~

使用：在已压缩的JS文件中，右键选择jsFormat或者使用默认快捷键（Ctrl+Alt+F）。


-  Clipboard History

功能：粘贴板历史记录

简介：方便使用复制/剪切的内容。这样就可以比较快速的是用对应的粘贴板中的内容。

使用：Ctrl+alt+v：显示历史记录
Ctrl+alt+d：清空历史记录
Ctrl+shift+v：粘贴上一条记录（最旧）
Ctrl+shift+alt+v：粘贴下一条记录（最新）


-  markdown 插件

功能：在书写了markdown后可以直接查看对应的效果，并且直接在浏览器里面打开。

简介：直接在浏览器中查看markdown文件生成的对应的效果，或者生成对应的html文件。

使用：按Ctrl + Shift + P
输入mp 后回车(Markdown Preview: current file in browser)
此时就可以在浏览器里看到刚才编辑的文档了
这边还可以保存为html




- 其他是其他比较受欢迎的插件，可以在官网上查看，然后惊醒对应的安装。 

1. SublimeLinter = 错误语法
1. JsMinifier =自动压缩js文件
1. Sublime CodeIntel =代码自动提示
1. Bracket Highlighter =代码匹配
1. CSScomb CSS =属性排序
1. SublimeTmpl =快速生成文件模板
1. SideBarEnhancements =设置sublime text2/3支持浏览器预览
1. ColorPicker =调色盘
1. Tag = Html格式化
1. Clipboard History = 剪贴板历史记录
1. SideBarEnhancements = 侧栏右键功能增强
1. GBK to UTF8 =GBK转黄成UTF8
1. SFTP =ftp插件
1. WordPress = WordPress函数
1. PHPTidy =排版PHP代码
1. YUI Compressor =压缩JS和CSS文件
1. Alignment =代码对齐
1. Emmet =大名鼎鼎呀
1. Prefixr =css自动添加 -webkit 等私有词缀

mp


# Summarypci
* [Sublime Text 全程指引](http://www.cnblogs.com/figure9/p/sublime-text-complete-guide.html)
* [markdown语法](http://www.zhihu.com/question/24896283)
* [Sublime Text 3 绝对神器](http://www.cnblogs.com/bananaplan/p/Sublime-Text-3-Powerful.html)
* [Sublime优秀插件的集合](http://www.xuanfengge.com/practical-collection-of-sublime-plug-in.html)
* [Sublime优秀插件的集合](http://www.zhihu.com/question/24896283)
* [Sublime优秀插件的集合](http://www.zhihu.com/question/19976788)
* [Sublime Text 2 入门及技巧](http://lucifr.com/2011/08/31/sublime-text-2-tricks-and-tips/)





