#XML

##简介
XML 被设计用来传输和存储数据。
HTML 被设计用来显示数据。
但是这两者都是标记语言。

###什么是 XML?
XML 指可扩展标记语言（EXtensible Markup Language）
 - XML 是一种标记语言，很类似 HTML
 - XML 的设计宗旨是传输数据，而非显示数据
 - XML 标签没有被预定义。您需要自行定义标签。
 - XML 被设计为具有自我描述性。
 - XML 是 W3C 的推荐标准
###没有任何行为的 XML
XML 只用来用来传输和存储数据，他没有行为内容。
我们需要编写软件或者程序，才能传送、接收和显示出这个文档。
###XML 仅仅是纯文本
XML 没什么特别的。它仅仅是纯文本而已。有能力处理纯文本的软件都可以处理 XML。
不过，能够读懂 XML 的应用程序可以有针对性地处理 XML 的标签。标签的功能性意义依赖于应用程序的特性。
在这点上面我可以吧HTML理解为在浏览器上面特定执行的HTML

###通过 XML 您可以发明自己的标签
上例中的标签没有在任何 XML 标准中定义过（比如 <to> 和 <from>）。这些标签是由文档的创作者发明的。
这是因为 XML 没有预定义的标签。
在 HTML 中使用的标签（以及 HTML 的结构）是预定义的。HTML 文档只使用在 HTML 标准中定义过的标签（比如 <p> 、<h1> 等等）。

##XML 树结构

XML 使用简单的具有自我描述性的语法：
```XML
<?xml version="1.0" encoding="ISO-8859-1"?>
<note>
<to>George</to>
<from>John</from>
<heading>Reminder</heading>
<body>Don't forget the meeting!</body>
</note>
```
第一行是 XML 声明。它定义 XML 的版本 (1.0) 和所使用的编码 (ISO-8859-1 = Latin-1/西欧字符集)。
下一行描述文档的根元素（像在说："本文档是一个便签"）：
在XML中标签是可以自己定义的，一般定义的时候都是有具体意义的，便于自己和其他人理解。
<note>
接下来 4 行描述根的 4 个子元素（to, from, heading 以及 body）：
<to>George</to>
<from>John</from>
<heading>Reminder</heading>
<body>Don't forget the meeting!</body>
最后一行定义根元素的结尾：
</note>
从本例可以设想，该 XML 文档包含了 John 给 George 的一张便签。

XML 文档形成一种树结构
XML 文档必须包含根元素。该元素是所有其他元素的父元素。
XML 文档中的元素形成了一棵文档树。这棵树从根部开始，并扩展到树的最底端。
```XML
<bookstore>
<book category="COOKING">
  <title lang="en">Everyday Italian</title> 
  <author>Giada De Laurentiis</author> 
  <year>2005</year> 
  <price>30.00</price> 
</book>
<book category="CHILDREN">
  <title lang="en">Harry Potter</title> 
  <author>J K. Rowling</author> 
  <year>2005</year> 
  <price>29.99</price> 
</book>
<book category="WEB">
  <title lang="en">Learning XML</title> 
  <author>Erik T. Ray</author> 
  <year>2003</year> 
  <price>39.95</price> 
</book>
</bookstore>
```
上面的XML对应的树结构图片如下
![ct_nodetree1](img/ct_nodetree1.gif "cool")

##XML 语法规则
 - 所有 XML 元素都须有关闭标签
 - XML 标签对大小写敏感
 - XML 必须正确地嵌套
 - XML 文档必须有根元素
 - XML 的属性值须加引号
```XML
 <note date="08/08/2008">
<to>George</to>
<from>John</from>
</note> 
```
node 中的date属性是要有引号的
 - 实体引用要转义
&lt;	<	小于
&gt;	>	大于
&amp;	&	和号
&apos;	'	单引号
&quot;	"	引号
- XML 中的注释
```
<!-- This is a comment --> 
```
- 在 XML 中，空格会被保留

##XML 元素
什么是 XML 元素？
XML 元素指的是从（且包括）开始标签直到（且包括）结束标签的部分。
元素可包含其他元素、文本或者两者的混合物。元素也可以拥有属性。
###XML 命名规则
XML 元素必须遵循以下命名规则：
名称可以含字母、数字以及其他的字符
名称不能以数字或者标点符号开始
名称不能以字符 "xml"（或者 XML、Xml）开始
名称不能包含空格
可使用任何名称，没有保留的字词。

##XML 属性
XML 元素可以在开始标签中包含属性，类似 HTML。
属性 (Attribute) 提供关于元素的额外（附加）信息。

XML 属性必须加引号
属性也可以用XML元素展现
```
<person sex="female">
  <firstname>Anna</firstname>
  <lastname>Smith</lastname>
</person> 
<person>
  <sex>female</sex>
  <firstname>Anna</firstname>
  <lastname>Smith</lastname>
</person> 
```
在第一个例子中，sex 是一个属性。在第二个例子中，sex 则是一个子元素。两个例子均可提供相同的信息。
##XML 验证
拥有正确语法的 XML 被称为"形式良好"的 XML。
通过 DTD 验证的 XML 是"合法"的 XML。
```
<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE note SYSTEM "Note.dtd">
<note>
<to>George</to>
<from>John</from>
<heading>Reminder</heading>
<body>Don't forget the meeting!</body>
</note>  
```
##XML 查看
一般的主流浏览器都支持XML，可以用XML查看。

##XML javascript
###XMLHttpRequest 对象
XMLHttpRequest 对象用于在后台与服务器交换数据。
什么是 XMLHttpRequest 对象？
XMLHttpRequest 对象用于在后台与服务器交换数据。
XMLHttpRequest 对象是开发者的梦想，因为您能够：
在不重新加载页面的情况下更新网页
在页面已加载后从服务器请求数据
在页面已加载后从服务器接收数据
在后台向服务器发送数据
所有现代的浏览器都支持 XMLHttpRequest 对象。
```HTML
<html>
<head>
<script type="text/javascript">
var xmlhttp;
function loadXMLDoc(url)
{
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Opera, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=state_Change;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }
}

function state_Change()
{
if (xmlhttp.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp.status==200)
    {// 200 = "OK"
    document.getElementById('A1').innerHTML=xmlhttp.status;
    document.getElementById('A2').innerHTML=xmlhttp.statusText;
    document.getElementById('A3').innerHTML=xmlhttp.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp.statusText);
    }
  }
}
</script>
</head>

<body>
<h2>Using the HttpRequest Object</h2>

<p><b>Status:</b>
<span id="A1"></span>
</p>

<p><b>Status text:</b>
<span id="A2"></span>
</p>

<p><b>Response:</b>
<br /><span id="A3"></span>
</p>

<button onclick="loadXMLDoc('/example/xdom/note.xml')">Get XML</button>

</body>
</html>
```

##XML 解析器
###解析 XML
所有现代浏览器都有读取和操作 XML 的内建 XML 解析器。
解析器把 XML 载入内存，然后把它转换为可通过 JavaScript 访问的 XML DOM 对象。
您将在本教程的下一节中学习更多有关 XML DOM 的知识。
微软的 XML 解析器与其他浏览器中的解析器之间，存在一些差异。微软的解析器支持 XML 文件和 XML 字符串（文本）的加载，而其他浏览器使用单独的解析器。不过，所有的解析器都包含遍历 XML 树、访问插入及删除节点（元素）及其属性的函数。
在本教程中，我们将为您展示如何创建可同时工作于 Internet Explorer 和其他浏览器中的脚本。
```
<html>
<body>
<h1>W3School.com.cn Internal Note</h1>
<p>
<b>To:</b> <span id="to"></span><br />
<b>From:</b> <span id="from"></span><br />
<b>Message:</b> <span id="message"></span>
</p>

<script type="text/javascript">
//下面的代码片段把 XML 文档解析到 XML DOM 对象中：
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","/example/xmle/note.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;
//从 XML DOM 对象中取出对应的数据内容：
document.getElementById("to").innerHTML=
xmlDoc.getElementsByTagName("to")[0].childNodes[0].nodeValue;
document.getElementById("from").innerHTML=
xmlDoc.getElementsByTagName("from")[0].childNodes[0].nodeValue;
document.getElementById("message").innerHTML=
xmlDoc.getElementsByTagName("body")[0].childNodes[0].nodeValue;
</script>

</body>
</html>
```
###解析 XML 字符串
```
<html>
<body>
<h1>W3School.com.cn Internal Note</h1>
<p>
<b>To:</b> <span id="to"></span><br />
<b>From:</b> <span id="from"></span><br />
<b>Message:</b> <span id="message"></span>
</p>

<script>
//下面的 JavaScript 代码片段把 XML 字符串解析到 XML DOM 对象中（把字符串 txt 载入解析器）：
//loadXML() 方法用于加载字符串（文本），load() 用于加载文件。
txt="<note>";
txt=txt+"<to>George</to>";
txt=txt+"<from>John</from>";
txt=txt+"<heading>Reminder</heading>";
txt=txt+"<body>Don't forget the meeting!</body>";
txt=txt+"</note>";

if (window.DOMParser)
  {
  parser=new DOMParser();
  xmlDoc=parser.parseFromString(txt,"text/xml");
  }
else // Internet Explorer
  {
  xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
  xmlDoc.async="false";
  xmlDoc.loadXML(txt);
  }

document.getElementById("to").innerHTML=xmlDoc.getElementsByTagName("to")[0].childNodes[0].nodeValue;
document.getElementById("from").innerHTML=xmlDoc.getElementsByTagName("from")[0].childNodes[0].nodeValue;
document.getElementById("message").innerHTML=xmlDoc.getElementsByTagName("body")[0].childNodes[0].nodeValue;
</script>

</body>
</html>
```

###XML DOM
XML DOM (XML Document Object Model) 定义了访问和操作 XML 文档的标准方法。
DOM 把 XML 文档作为树结构来查看。能够通过 DOM 树来访问所有元素。可以修改或删除它们的内容，并创建新的元素。元素，它们的文本，以及它们的属性，都被认为是节点。
在下面的例子中，我们使用 DOM 引用从 <to> 元素中获取文本：
xmlDoc -由解析器创建的 XML 文档
getElementsByTagName("to")[0] - 第一个 <to> 元素
childNodes[0] - <to> 元素的第一个子元素（文本节点）
nodeValue - 节点的值（文本本身）
对XML结点的理解和HTML DOM的理解内容相似。











