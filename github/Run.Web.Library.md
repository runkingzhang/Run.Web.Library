# Github Run.Web.Library
---
在Run.Web.Library新增内容

启动github shell

```
//使用密钥登陆github dos
ssh -T git@github.com
//到自己电脑本地文件夹
F:
cd F:\github\Run.Web.Library
//新加文件或者文件夹
 git add Node
//上传文件夹的备注内容
git commit -m "add node "
//推送到github上面
git push -u Run.web  master
```

##遇到问题
问题1：
error: failed to push some refs to 'git@github.com:runkingzhang/Run.Web.Libra
git'
hint: Updates were rejected because the remote contains work that you do
原因：
发现是由于远程仓库中代码版本与本地不一致冲突导致的。
自己在github上面修改了对应了文件内容。

解决1：

git pull
再自动merge或手动merge冲突
再次git push

