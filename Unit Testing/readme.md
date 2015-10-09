## 单元测试

现在比较常见的测试风格有TDD（Test-Driven Development  测试驱动开发，）和BDD（ Behavior-Driven Development 行为驱动开发 )两者在关注点和表达方式上有所不同。 

### 单元测试用例
检测用户保存后用户数目增加1.


代码所在文件夹 ttd_node
代码片段文件夹ttd_node >> excercise files 
代码片段是



在全局环境下面应用的包，在当前目录下面执行
```js
mocha --harmony 
```

可以看到对应的执行结果。 


### 项目测试
代码在Unit Testing中，一次构建一个相对完整的测试项目
在Unit Testing的final中可以直接运行查看结果。在代码中又相关的注释。



mocha提供before.after,beforeEach,aterEach四个钩子方法，用于写作describe中测试用例的准备，安装和卸载。 

### 参考资料
1. lynda.com  《Test-Driven Development with Node.js》

2. 《Node.js深入浅出》第十章  测试

3. lynda.com 《node.js》







