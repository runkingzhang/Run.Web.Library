# Github学习笔记
---
##前言
很伤心，当自己一段时间不使用github后，自己竟然忘记了自己以前系统学习过的命令行。
这边花点时间重新来学习github的内容，并作对应的笔记内容。

##附录

touch README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/runkingzhang/hello-world.git
git push -u origin master


$ git remote add origin git@github.com:runkingzhang/Hello-World.git

1.创建一个新的repository：
先在github上创建并写好相关名字，描述。
$cd ~/hello-world        //到hello-world目录
$git init                     //初始化
$git add .                   //把所有文件加入到索引（不想把所有文件加入，可以用gitignore或add 具体文件)
$git commit               //提交到本地仓库，然后会填写更新日志( -m “更新日志”也可)
$git remote add origin git@github.com:WadeLeng/hello-world.git        //增加到remote
$git push origin master    //push到github上
2.更新项目（新加了文件）：
$cd ~/hello-world
$git add .                  //这样可以自动判断新加了哪些文件，或者手动加入文件名字
$git commit              //提交到本地仓库
$git push origin master    //不是新创建的，不用再add 到remote上了
3.更新项目（没新加文件，只有删除或者修改文件）：
$cd ~/hello-world
$git commit -a          //记录删除或修改了哪些文件
$git push origin master  //提交到github
4.忽略一些文件，比如*.o等:
$cd ~/hello-world
$vim .gitignore     //把文件类型加入到.gitignore中，保存
然后就可以git add . 能自动过滤这种文件
5.clone代码到本地：
$git clone git@github.com:WadeLeng/hello-world.git
假如本地已经存在了代码，而仓库里有更新，把更改的合并到本地的项目：
$git fetch origin    //获取远程更新
$git merge origin/master //把更新的内容合并到本地分支
6.撤销
$git reset
7.删除
$git rm  * // 不是用rm
//------------------------------常见错误-----------------------------------
1.$ git remote add origin git@github.com:WadeLeng/hello-world.git
 错误提示：fatal: remote origin already exists.
 解决办法：$ git remote rm origin
 然后在执行：$ git remote add origin git@github.com:WadeLeng/hello-world.git 就不会报错误了
 2. $ git push origin master
 错误提示：error:failed to push som refs to
 解决办法：$ git pull origin master //先把远程服务器github上面的文件拉先来，再push 上去。
//------------------------------------------------------------------------------


这边是上传对应的远程仓库上面：
git push [remote-name] [branch-name]

git commit -m "new library"

git push -u Run.Web master


git remote add Run.web  git@github.com:runkingzhang/Run.Web.Library.git






## Header

`# Header1`
# Header1

`## Header2`
## Header2

`###### Header6`
###### Header6

---

## Blockquote

> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
> consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.


> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.


> `var hi = 'hi';  
console.log(hi);`

---

## Code

    js ocde

## Code highlight

support in [gfm](https://github.com/mojombo/github-flavored-markdown)

```js  
var hi = 'hi';  
console.log(hi);
```

---

## List

- item0
- item1
- item2

---

## Link

[text link](http://abc)

![abc](http://www.baidu.com/img/baidu_sylogo1.gif "cool")