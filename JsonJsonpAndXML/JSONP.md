#JSONP
##讲解
JSONP（JSON with Padding）是资料格式 JSON 的一种"使用模式"，可以让网页从别的网域要资料。
由于同源策略，一般来说位于 server1.example.com 的网页无法与不是 server1.example.com 的服务器沟通，
而 HTML 的 <script> 元素是一个例外。利用 <script> 元素的这个开放策略，
网页可以得到从其他来源动态产生的 JSON 资料，而这种使用模式就是所谓的 JSONP。
用 JSONP 抓到的资料并不是 JSON，而是任意的 JavaScript，用 JavaScript 直译器执行而不是用 JSON 解析器解析。
JSONP常常被用在跨域的数据交换上面。
 

##原理
为了理解这种模式的原理，先想像有一个回传 JSON 文件的 URL，
而 JavaScript 程式可以用 XMLHttpRequest 跟这个 URL 要资料。
假设我们的 URL 是 http://server2.example.com/RetrieveUser?UserId=xxx 。
假设小明的 UserId 是 1823，且当浏览器透过 URL 传小明的 UserId，
也就是抓取 http://server2.example.com/RetrieveUser?UserId=1823 ，得到：
```JSON
   {"Name": "小明", "Id" : 1823, "Rank": 7}
```
这个 JSON 资料可能是依据传过去 URL 的查询参数动态产生的。
这个时候，把 <script> 元素的 src 属性设成一个回传 JSON 的 URL 是可以想像的，
这也代表从 HTML 页面透过 script 元素抓取 JSON 是可能的。
然而，一份 JSON 文件并不是一个 JavaScript 程式。为了让浏览器可以在 <script> 元素执行，
从 src 里 URL 回传的必须是可执行的 JavaScript。在 JSONP 的使用模式里，
该 URL 回传的是由函数呼叫包起来的动态生成 JSON，这就是JSONP 的"填充（padding）"或是"前辍（prefix）"的由来。
惯例上浏览器提供回调函数的名称当作送至服务器的请求中命名查询参数的一部份，例如：
```Javascript
 <script type="text/javascript"
         src="http://server2.example.com/RetrieveUser?UserId=1823&jsonp=parseResponse">
 </script>
```
服务器会在传给浏览器前将 JSON 回应用这个前辍（或称作填充）包起来。
浏览器得到的回应已不是单纯的资料叙述而是一个脚本。在本例中，浏览器得到的是：
```JSON
   parseResponse({"Name": "Cheeso", "Id" : 1823, "Rank": 7})
```
##Script 元素"注入"
为了要启动一个 JSONP 回调（或者说，使用这个模式），你需要一个 script 元素。
因此，浏览器必须为每一个 JSONP 要求加（或是重用）一个新的、有所需 src 值的 <script> 元素到 HTML DOM 里—或者说是"注入"这个元素。
浏览器执行该元素，抓取 src 里的 URL，并执行回传的 JSON。
也因为这样，JSON 被称作是一种"让使用者利用 script 元素注入的方式绕开同源策略"的方法。


##安全问题
使用远端网站的 script 标签会让远端网站得以注入任何的内容至网站里。如果远端的网站有 JavaScript 注入漏洞，原来的网站也会受到影响。

现在有一个正在进行计划在定义所谓的 JSON-P 严格安全子集，使浏览器可以对 MIME 类别是"application/json-p"请求做强制处理。
如果回应不能被解析为严格的 JSON-P，浏览器可以丢出一个错误或忽略整个回应。


##跨网站的伪造要求
粗略的 JSONP 部署很容易受到跨网站的伪造要求（CSRF/XSRF）的攻击
因为 HTML <script> 标签在浏览器里不遵守同源策略，恶意网页可以要求并取得属于其他网站的 JSON 资料。
当使用者正登入那个其他网站时，上述状况使得该恶意网站得以在恶意网站的环境下操作该 JSON 资料，可能泄漏使用者的密码或是其他敏感资料。
只有在该 JSON 资料含有不该泄漏给第三方的隐密资料，且服务器仅靠浏览器的同源策略阻挡不正常要求的时候这才会是问题。
若服务器自己决定要求的专有性，并只在要求正常的情况下输出资料则没有问题。
只靠 Cookie 并不够决定要求是合法的，这很容易受到跨网站的伪造要求攻击。

 

##jQuery 中的应用
自 1.2 版本起，jQuery 加入了对 JSONP 的支持。可以用 $.getJSON() 方法（或其它基于 $.ajax() 的方法），实现 JSON 数据跨域。
下面是一个例子：

```HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Demo</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
// 使用JQuery来调用JSONP的内容
function do_jsonp() {
	//在其他的域名中获取json
    $.getJSON("http://example.com/demo/jsonp.php?type=json&callback=callback_function_name",
	// 在HTML DOM中注入数据内容
    function(data) {
        $('#result').val('data.Image.IDs: ' + data.Image.IDs);
    });
}
</script>
</head>
<body>
<a href="javascript:do_jsonp();">Click me</a><br />
<textarea id="result" cols="50" rows="5"></textarea>
</body>
</html>
```
注意：http://example.com/demo/jsonp.php?type=json&callback=callback_function_name，
上例中的callback_function_name会被 jQuery 自动替换为回调函数的函数名（如果是一个匿名函数，jQuery 会自动生成一个带时间戳的函数名）。


