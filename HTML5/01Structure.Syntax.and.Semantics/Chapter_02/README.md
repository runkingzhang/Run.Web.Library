#Structure.Syntax.and.Semantics


##HTML学习
HTML5文档定义，相比HTML4而言简化了很多。
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Explore California</title>
</head>
<body>
</body>
</html>

把下面的页面HTML4代码转化为HTML5

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Explore California</title>
<link rel="stylesheet" href="_css/main.css" media="screen, projection">
<script src="_scripts/jquery-1.5.1.min.js"></script>
</head>
<body>
<div id="header">
  <h1>Explore California</h1>
  <h2>Where do you want to go today?</h2>
</div>
<div id="navigation">
  <ul>
    <li><a href="tours.htm" title="Our tours">Tours</a></li>
    <li><a href="mission.htm" title="What we believe">Mission</a></li>
    <li><a href="resources.htm" title="planning resources">Resources</a></li>
    <li><a href="explorers.htm" title="Our community">Explorers</a></li>
    <li><a href="contact.htm" title="contact us" class="last">Contact</a></li>
  </ul>
</div>
<div id="mainContent">
  <h2>Come explore our world your way</h2>
  <p>Explore California is the best way to explore our wonderful state! Come find out why our tours are so good!</p>
</div>
<div id="sidebar" hidden>
  <h2>Monthly Specials</h2>
  <h3 class="special">California Calm</h3>
  <p>Day Spa Package <br>
    <a href="tours/tour_detail_calm.htm">$250</a></p>
  <h3 class="special">From Desert to Sea</h3>
  <p>2 Day Salton Sea <br>
    <a href="tours/tour_detail_salton.htm">$250</a></p>
</div>
<div id="footer">
  <p>All content &copy; Explore California</p>
</div>
</body>
</html>
这边用到了header ,nav ,article,aside,footer,替换对应内容。
HTML5是HTML4的进化版，所有东西的修改是为了更加方便。所以在HTMl5中集成了在HTML4时代里面
大部分工程师约定俗成的东西，在HTML4时期，我们没有nav，但是我用了div去实现这个nav的功能，而且这个功能在
世界上的大部分网页中都这样书写，那么我们为什么不把这些常用的标签写到HTML5方便大家使用它那。
这样来激励就比较简单了的。

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Explore California</title>
<link rel="stylesheet" href="_css/main.css" media="screen, projection">
<script src="_scripts/jquery-1.5.1.min.js"></script>
</head>
<body>
<header>
  <h1>Explore California</h1>
  <h2>Where do you want to go today?</h2>
</header>
<nav>
<h1>Main site navigation</h1>
  <ul>
    <li><a href="tours.htm" title="Our tours">Tours</a></li>
    <li><a href="mission.htm" title="What we believe">Mission</a></li>
    <li><a href="resources.htm" title="planning resources">Resources</a></li>
    <li><a href="explorers.htm" title="Our community">Explorers</a></li>
    <li><a href="contact.htm" title="contact us" class="last">Contact</a></li>
  </ul>
</nav>
<article>
  <h2>Come explore our world your way</h2>
  <p>Explore California is the best way to explore our wonderful state! Come find out why our tours are so good!</p>
</article>
<aside>
  <h2>Monthly Specials</h2>
  <h3 class="special">California Calm</h3>
  <p>Day Spa Package <br>
    <a href="tours/tour_detail_calm.htm">$250</a></p>
  <h3 class="special">From Desert to Sea</h3>
  <p>2 Day Salton Sea <br>
    <a href="tours/tour_detail_salton.htm">$250</a></p>
</aside>
<footer>
  <p>All content &copy; Explore California</p>
</footer>
</body>
</html>


spec-author-view

## Structure
根目录说明:
* `Structure.Syntax.and.Semantics` [Code, Article] Structure.Syntax.and.Semantics，HTML5结构-语法和语义视频教程，是对HTML5最基础的学习
和练习
* `Canvas` [Code, Article]Canvas，简单的理解就是把页面理解为PS中的图层，在上面用function来画画
* `Drag.and.Drop` [Code, Article] Drag.and.Drop，HTML5在页面中的拉伸和拖放，这个功能在一些js类库中也可以实现，如EasyUI，
HTML5把这个内置了信息
* `Video.and.Audio` [Code, Article] Video.and.Audio，学习视频和音频应用视频教程,
* `Local.Storage.And.Offline.Applications` [Code, Article] Local.Storage.And.Offline.Applications，深入学习本地存储与离线应用
* `Geolocation` [Code, Article] Geolocation地理定位视频




