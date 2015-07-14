# Github Error
---
##
```
fatal: remote error:
  You can't push to git://github.com/runkingzhang/Run.Web.Library.git
  Use https://github.com/runkingzhang/Run.Web.Library.git
```

```
G:\github\Run.Web.Library [master +0 ~0 -3]> git remote set-url Run.web git@gith
ub.com:runkingzhang/Run.Web.Library.git
```
If you want to change the URL of origin, you can just do:

git remote set-url origin git@github.com:my_user_name/my_repo.git
More information is available here: http://git-scm.com/book/en/Git-Internals-Transfer-Protocols

