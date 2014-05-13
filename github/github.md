# Github学习笔记
---
##前言
很伤心，当自己一段时间不使用github后，自己竟然忘记了自己以前系统学习过的命令行。
这边花点时间重新来学习github的内容，并作对应的笔记内容。

这种情况对自己来说还是一个比较常见的情况，所以自己也决定要好好用github来构建自己的学习体系。
让自己保持一个高效率的学习和工作效率。





##资料
[git - 简明指南](http://git-scm.com/book/zh)

[github 学习指南](http://www.worldhello.net/gotgithub/index.html)

强烈建议先看git - 简明指南然后看github 学习指南.
要不然会有坑。


##Git
###配置
####用户信息

```
$ git config --global user.name "runkingzhang"
$ git config --global user.email runkingzhang@163.com
```

####查看配置信息
```
//参看配置项的内容，设置可以查考用户信息的方式
 git config --list 
```

####查看配置信息
```
$ git help <verb>
$ git <verb> --help
$ man git-<verb>
//比如，要学习 config 命令可以怎么用，运行：
$ git help config
```
###Git 基础
启动dos界面进入到对应的文件夹

####初始化
```
git init
```
####初始化
```
$ git add *.c
$ git add README
$ git commit -m 'initial project version'
```
git add *.c 这不是在在版本中加入对应的文件,这边表示加入所有的c语言文件
git add  .  加入所有的文件
git add  fileName 增加对应的文件夹和文件
git commit -m 'initial project version' 对应的备注信息内容

####从现有仓库克隆
 git clone [url]
 url在github上面新建rep后会生成对应url
 
```
$ git clone git://github.com/runkingzhang/helloworld.git
//这边是生成不同的项目名称
$ git clone git://github.com/runkingzhang/helloworld.git mygrit
```

####检查当前文件状态
 查看状态
```
git status
```

```追逐对应的文件
$ git add README
git status
//移除文件
$ git rm grit.gemspec
```
查看你是提交文件
```
git log
//我们常用 -p 选项展开显示每次提交的内容差异，用 -2 则仅显示最近的两次更新：
git log -p -2
```
修改最后一次提交
```
 git commit --amend
 //如下
 $ git commit -m 'initial commit'
$ git add forgotten_file
$ git commit --amend
```

取消已经暂存的文件
```
$ git reset HEAD benchmarks.rb
```
###远程仓库的使用
```查看远程仓库列表
git remote 
//复制到本地
git clone git://github.com/runkingzhang/runkingzhang.git
git remote add [shortname] [url]：
git remote add helloworld git://github.com/runkingzhang/runkingzhang.git
```
###远程仓库的使用

```推送到远程仓库
git remote 
//复制到本地
git clone git://github.com/runkingzhang/runkingzhang.git
git remote add [shortname] [url]：
git remote add helloworld git://github.com/runkingzhang/runkingzhang.git
git remote show Run.Web.Library
```

```远程仓库的删除和重命名
//复制到本地
远程仓库的删除和重命名
$ git push origin master
$ git remote rename Run.Web.Library run
$ git remote
```


这边是查看对应的文件内容信息。




##Github
这边的ssh是要提前设置的，见质料2.
```使用密钥登陆github dos
ssh -T git@github.com
Hi runkingzhang! You've successfully authenticated, but GitHub does not provide
shell access.
```



新建一个项目
在github上面创建一个rep，如helloworld


本地建立一个Git版本库。这个版本库可以建立在任意文件夹。
```新建项目
$ mkdir helloworld
$ cd helloworld
$ git init  
$ git add README.md
$ git commit -m "README for this project."
//此处是坑 为版本库添加名为origin的远程版本库。
//此处的origin并不是命令行，而是github的remote（远程仓库）
//不同的项目应该设置不同的名称，如果远程中已经存在origin会出现权限问题，更换名称即可。
//网路上面的解决方法是不不正确的。建议好好学习git。
$git remote add origin https://github.com/runkingzhang/helloworld
$ git push -u origin master
```

