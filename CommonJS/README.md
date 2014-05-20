#CommonJS规范

##概述
CommonJS是服务器端模块的规范，Node.js采用了这个规范。

根据CommonJS规范，一个单独的文件就是一个模块。加载模块使用require方法，
该方法读取一个文件并执行，最后返回文件内部的exports对象。下面就是一个简单的模块文件example.js。
```example.js
console.log("evaluating example.js");

var invisible = function () {
  console.log("invisible");
}

exports.message = "hi";

exports.say = function () {
  console.log(message);
}
```
使用require方法，加载example.js。
```
var example = require('./example.js');
```
这时，变量example就对应模块中的exports对象，于是就可以通过这个变量，使用模块提供的各个方法。
```
{
  message: "hi",
  say: [Function]
}
```
require方法默认读取js文件，所以可以省略js后缀名。
```
var example = require('./example');
```
js文件名前面需要加上路径，可以是相对路径（相对于使用require方法的文件），也可以是绝对路径。
如果省略路径，node.js会认为，你要加载一个核心模块，或者已经安装在本地 node_modules 目录中的模块。
如果加载的是一个目录，node.js会首先寻找该目录中的 package.json 文件，加载该文件 main 属性提到的模块，
否则就寻找该目录下的 index.js 文件。

下面的例子是使用一行语句，定义一个最简单的模块。

// addition.js
```addition.js
exports.do = function(a, b){ return a + b };
```
上面的语句定义了一个加法模块，做法就是在exports对象上定义一个do方法，
那就是供外部调用的方法。使用的时候，只要用require函数调用即可。
```
var add = require('./addition');

add.do(1,2)
// 3
```
再看一个复杂一点的例子。
```
// foobar.js
function foobar(){
        this.foo = function(){
                console.log('Hello foo');
        }

        this.bar = function(){
                console.log('Hello bar');
        }
}
 
exports.foobar = foobar;
```
调用该模块的方法如下：
```
var foobar = require('./foobar').foobar,
    test   = new foobar();
 
test.bar(); // 'Hello bar'
```
有时，不需要exports返回一个对象，只需要它返回一个函数。
这时，就要写成module.exports。
```
module.exports = function () {
  console.log("hello world")
}
```
##AMD规范与CommonJS规范的兼容性
CommonJS规范加载模块是同步的，也就是说，只有加载完成，才能执行后面的操作。
AMD规范则是非同步加载模块，允许指定回调函数。由于Node.js主要用于服务器编程，
模块文件一般都已经存在于本地硬盘，所以加载起来比较快，不用考虑非同步加载的方式，
所以CommonJS规范比较适用。但是，如果是浏览器环境，要从服务器端加载模块，
这时就必须采用非同步模式，因此浏览器端一般采用AMD规范。

AMD规范使用define方法定义模块，下面就是一个例子：
```
define(['package/lib'], function(lib){
 
    function foo(){
        lib.log('hello world!');
    } 
 
    return {
        foo: foo
    };
});
```
AMD规范允许输出的模块兼容CommonJS规范，这时define方法需要写成下面这样：
```
　// math.js
　　define(function (){
　　　　var add = function (x,y){
　　　　　　return x+y;
　　　　};
　　　　return {
　　　　　　add: add
　　　　};
　　});
```
加载方法如下：
```
　　// main.js
　　require(['math'], function (math){
　　　　alert(math.add(1,1));
　　});
```

如果这个模块还依赖其他模块，那么define()函数的第一个参数，必须是一个数组，指明该模块的依赖性。

把js的代码书写变得模块化便于自己对Javascript的管理和分类使用。








