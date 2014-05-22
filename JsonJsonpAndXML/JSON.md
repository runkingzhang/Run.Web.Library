#JSON

##简介
JSON：JavaScript 对象表示法（JavaScript Object Notation）。
JSON 是存储和交换文本信息的语法。类似 XML。
JSON 比 XML 更小、更快，更易解析。
JSON 使用 JavaScript 语法来描述数据对象，但是 JSON 仍然独立于语言和平台。
JSON 解析器和 JSON 库支持许多不同的编程语言。
##学习笔记
###在 JavaScript 中创建 JSON 对象

```html

<h2>在 JavaScript 中创建 JSON 对象</h2>
<p>
Name: <span id="jname"></span><br />
Age: <span id="jage"></span><br />
Address: <span id="jstreet"></span><br />
Phone: <span id="jphone"></span><br />
</p>

<script type="text/javascript">
var JSONObject= {
"name":"Bill Gates",
"street":"Fifth Avenue New York 666",
"age":56,
"phone":"555 1234567"};
document.getElementById("jname").innerHTML=JSONObject.name
document.getElementById("jage").innerHTML=JSONObject.age
document.getElementById("jstreet").innerHTML=JSONObject.street
document.getElementById("jphone").innerHTML=JSONObject.phone
</script>

```

用javascript. + 键值来转化json对象。

###JSON语法
JSON 语法是 JavaScript 语法的子集。
####JSON 语法规则
JSON 语法是 JavaScript 对象表示法语法的子集。
 - 数据在名称/值对中
 - 数据由逗号分隔
 - 花括号保存对象
 - 方括号保存数组
 - 名称和值对使用""

####JSON 名称/值对
JSON 数据的书写格式是：名称/值对。
名称/值对包括字段名称（在双引号中），后面写一个冒号，然后是值：
```JSON
"firstName" : "John"
```
这很容易理解，等价于这条 JavaScript 语句：
```Javascript
firstName = "John"
```
####JSON 值
JSON 值可以是：
 - 数字（整数或浮点数）
 - 字符串（在双引号中）
 - 逻辑值（true 或 false）
 - 数组（在方括号中）
 - 对象（在花括号中）
 - null
 
####JSON 对象
JSON 对象在花括号中书写：
对象可以包含多个名称/值对：
```JSON
{ "firstName":"John" , "lastName":"Doe" }
```
这一点也容易理解，与这条 JavaScript 语句等价：
```Javascript
firstName = "John"
lastName = "Doe"
```

####JSON 数组
JSON 数组在方括号中书写：
数组可包含多个对象：
```JSON
{
"employees": [
{ "firstName":"John" , "lastName":"Doe" },
{ "firstName":"Anna" , "lastName":"Smith" },
{ "firstName":"Peter" , "lastName":"Jones" }
]
}
```
在上面的例子中，对象 "employees" 是包含三个对象的数组。每个对象代表一条关于某人（有姓和名）的记录。
可以简单的理解为一个JSON中包含其他的JSON对象内容。
####铁路图
对象是一个无序的"'名称/值'对"集合。一个对象以"{"（左括号）开始，"}"（右括号）结束。每个"名称"后跟一个":"（冒号）；"'名称/值' 对"之间使用","（逗号）分隔。
![object](img/object.gif "cool")

数组是值（value）的有序集合。一个数组以"["（左中括号）开始，"]"（右中括号）结束。值之间使用","（逗号）分隔。
![value](img/value.gif "cool")
值（value）可以是双引号括起来的字符串（string）、数值(number)、true、false、 null、对象（object）或者数组（array）。这些结构可以嵌套。



字符串（string）是由双引号包围的任意数量Unicode字符的集合，使用反斜线转义。一个字符（character）即一个单独的字符串（character string）。
![string](img/string.gif "cool")
字符串（string）与C或者Java的字符串非常相似。



数值（number）也与C或者Java的数值非常相似。除去未曾使用的八进制与十六进制格式。除去一些编码细节。
![number](img/number.gif "cool")
空白可以加入到任何符号之间。 以下描述了完整的语言。


####JSON 使用 JavaScript 语法
因为 JSON 使用 JavaScript 语法，所以无需额外的软件就能处理 JavaScript 中的 JSON。
通过 JavaScript，您可以创建一个对象数组，并像这样进行赋值：
例子
```
var employees = [
{ "firstName":"Bill" , "lastName":"Gates" },
{ "firstName":"George" , "lastName":"Bush" },
{ "firstName":"Thomas" , "lastName": "Carter" }
];
```
可以像这样访问 JavaScript 对象数组中的第一项：
```
employees[0].lastName;
```
返回的内容是：
```
Gates
```
可以像这样修改数据：
```
employees[0].lastName = "Jobs";
```

###JSON 使用
```HTML
<html>
<body>
<h2>通过 JSON 字符串来创建对象</h3>
<p>
First Name: <span id="fname"></span><br /> 
Last Name: <span id="lname"></span><br /> 
</p> 
<script type="text/javascript">
//创建包含 JSON 语法的 JavaScript 字符串：
var txt = '{"employees":[' +
'{"firstName":"Bill","lastName":"Gates" },' +
'{"firstName":"George","lastName":"Bush" },' +
'{"firstName":"Thomas","lastName":"Carter" }]}';
//由于 JSON 语法是 JavaScript 语法的子集，JavaScript 函数 eval() 可用于将 JSON 文本转换为 JavaScript 对象。
//eval() 函数使用的是 JavaScript 编译器，可解析 JSON 文本，然后生成 JavaScript 对象。必须把文本包围在括号中，这样才能避免语法错误：
var obj = eval ("(" + txt + ")");
//在网页中使用 JavaScript 对象
document.getElementById("fname").innerHTML=obj.employees[1].firstName 
document.getElementById("lname").innerHTML=obj.employees[1].lastName 
</script>
</body>
</html>
```



##资源
[JSON 在线视图](http://www.kjson.com/jsonparser/)
[JSON在想编辑器](http://www.kjson.com/jsoneditor/)
[W3C](http://www.w3school.com.cn/json/index.asp)


