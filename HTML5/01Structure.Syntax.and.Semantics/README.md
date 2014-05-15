#Structure.Syntax.and.Semantics

##01 Introducing HTML5
相关资料内容:
HTML5官网：
http://www.w3.org/html/logo/
HTML5和HTML4的区别文档：
http://www.w3.org/TR/html5-diff/

http://www.w3.org/TR/html5/Overview.html
http://www.w3.org/TR/html-markup/

HTML5 有什么特殊内容
http://dev.w3.org/html5/spec/spec.html

http://www.whatwg.org/

##HTML5 基础
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
```js  
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
```

这边用到了header ,nav ,article,aside,footer,替换对应内容。
HTML5是HTML4的进化版，所有东西的修改是为了更加方便。所以在HTMl5中集成了在HTML4时代里面
大部分工程师约定俗成的东西，在HTML4时期，我们没有nav，但是我用了div去实现这个nav的功能，而且这个功能在
世界上的大部分网页中都这样书写，那么我们为什么不把这些常用的标签写到HTML5方便大家使用它那。
这样开发的时候就比较简单了的。新增的标签都是为了更好的网页开发内容。还有一些新的标签的确比较适合
内容的开发。

```HTML5
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
```

##写出页面结构
![页面原图](Chapter_04\04_02\mockup.jpg "cool")
根据上面原图用HTML5来写出语义化的HTML5语言。
只是对应大大好相关页面结构化内容
```
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Explore California Trail Guide</title>
</head>
<body>
<header id="mainHeader">
 <hgroup>
 <h1><span>Explore California</span> Trail Guide</h1>
 <h2>your complete biking trail source</h2>
 </hgroup>
  <nav>
  <h2>Main page navigation</h2>
    <ul>
      <li><a href="http://www.explorecalifornia.org" title="Visit Explore California">explore california</a></li>
      <li><a href="trails.htm" title="Trail reviews" class="current">trail reviews</a></li>
      <li><a href="news.htm" title="Trail news">trail news</a></li>
      <li><a href="resources" title="Trail resources">resources</a></li>
      <li><a href="http://www.explorecalifornia.org/tours.htm" title="Biking Tours">biking tours</a></li>
    </ul>
  </nav>
</header>
<section id="trailReviews">
  <header>
  <h2>Trail Reviews</h2>
  <p>All Trails > Ojai</p>
  <h3>Ojai Trails</h3>
  </header>
  <article>
  <h2>Northridge Loop</h2>
  <h3>Skill level</h3>
  <h3>Surface</h3>
  <h3>Notable features</h3>
  <h3>Final thoughts</h3>
  <footer class="articleFooter">
      <p>About the author:</p>
      <p>
      Jeff Layton lives in Ventura, California with his wife, small dog, and various house plants and writes about mountain biking, Explore California, and the outdoors. Contact him at <a href="mailto:jeffl@explorecalifornia.org" title="email jeff!">jeffl@explorecalifornia.org</a>
      </p>
    </footer>
 <section> 
 <h2>Comments</h2>
  <article>
  <h2>Max Smith wrote this on April 25th, 2011 at 12:52</h2>
  </article>
  </section>
  </article>
</section>
<article id="riderReviews">
	<h2>Rider Reviews</h2>
	<article>
    <header>
    <hgroup>
    <h2>Los Robles Trail</h2>
    <h3>by Justin Vyn</h3>
    </hgroup>
    <p>submitted on 02/23/10</p>
    </header>
    </article>
    <article>
    <header>
    <hgroup>
    <h2>Copper Canyon Loop</h2>
    <h3>by Shea Hansen</h3> 
    </hgroup>
    <p>submitted on 03/11/11</p>
    </header>
    </article>
</article>
<aside id="adCopy">
	<h2>Want to take a tour?</h2>
</aside>
<footer id="pageFooter">
<p class="topLink"><a href="#mainHeader">return to top</a></p>
<p><a href="tel://866-555-4310" title="give us a call">T: 866.555.4310</a></p>
<p><a href="mailto:info@explorecalifornia.org" title="drop us a line">info@explorecalifornia.org</a></p>
<p>all content &copy;copyright 2011 Explore California.org  | please read our <a href="#">terms of use</a></p>
<p>Explore California</p>
<p>5605 Nota Street<br> 
Ventura, CA 93003</p>
<p>866.555.4310<br>
866.555.4315 (24 hour support)</p>
</footer>
</body>
</html>
```
##在Chapter_05
完善网站的内容。


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




