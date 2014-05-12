# Header 1 #
## Header 2 ##
### Header 3 ###             (Hashes on right are optional)
#### Header 4 ####
##### Header 5 #####

## Markdown plus h2 with a custom ID ##         {#id-goes-here}
[Link back to H2](#id-goes-here)

This is a paragraph, which is text surrounded by whitespace. Paragraphs can be on one 
line (or many), and can drone on for hours.  

Here is a Markdown link to [Warped](http://warpedvisions.org), and a literal . 
Now some SimpleLinks, like one to [google] (automagically links to are-you-
feeling-lucky), a [wiki: test] link to a Wikipedia page, and a link to 
[foldoc: CPU]s at foldoc.  

Now some inline markup like _italics_,  **bold**, and `code()`. Note that underscores in 
words are ignored in Markdown Extra.

![picture alt](images/photo.jpeg "Title is optional")     

> Blockquotes are like quoted text in email replies
>> And, they can be nested

* Bullet lists are easy too
- Another one
+ Another one

1. A numbered list
2. Which is numbered
3. With periods and a space

And now some code:
	
	```js
	var markdown = require( "markdown" ).markdown;
	console.log( markdown.toHTML( "Hello *World*!" ) );
	```

```html
<!DOCTYPE html>
<html>
  <body>
    <textarea id="text-input" oninput="this.editor.update()"
              rows="6" cols="60">Type **Markdown** here.</textarea>
    <div id="preview"> </div>
    <script src="lib/markdown.js"></script>
    <script>
      function Editor(input, preview) {
        this.update = function () {
          preview.innerHTML = markdown.toHTML(input.value);
        };
        input.editor = this;
        this.update();
      }
      var $ = function (id) { return document.getElementById(id); };
      new Editor($("text-input"), $("preview"));
    </script>
  </body>
</html>
```


    // Code is just text indented a bit
    which(is_easy) to_remember();
    var md2html = require('./markdown').md2html;


	md2html({
    srcPath:__dirname + '/hello.md',
	destPath:__dirname + '/hello.html',
	//lib:'markdown',
	callback:function (html) {
    console.log(html.length, html.substr(0, 100));
  	}
	});

~~~

// Markdown extra adds un-indented code blocks too

if (this_is_more_code == true && !indented) {
    // tild wrapped code blocks, also not indented
}

~~~

Text with  
two trailing spaces  
(on the right)  
can be used  
for things like poems  

### Horizontal rules

* * * *
****
--------------------------


<div class="custom-class" markdown="1">
This is a div wrapping some Markdown plus.  Without the DIV attribute, it ignores the 
block. 
</div>

## Markdown plus tables ##

| Header | Header | Right  |
| ------ | ------ | -----: |
|  Cell  |  Cell  |   $10  |
|  Cell  |  Cell  |   $20  |

* Outer pipes on tables are optional
* Colon used for alignment (right versus left)

## Markdown plus definition lists ##

Bottled water
: $ 1.25
: $ 1.55 (Large)

Milk
Pop
: $ 1.75

* Multiple definitions and terms are possible
* Definitions can include multiple paragraphs too

*[ABBR]: Markdown plus abbreviations (produces an <abbr> tag)

```bash
# read from a file
md2html /path/to/doc.md > /path/to/doc.html

# or from stdin
echo 'Hello *World*!' | md2html
```
##html
```html
<!DOCTYPE html>
<html>
  <body>
    <textarea id="text-input" oninput="this.editor.update()"
              rows="6" cols="60">Type **Markdown** here.</textarea>
    <div id="preview"> </div>
    <script src="lib/markdown.js"></script>
    <script>
      function Editor(input, preview) {
        this.update = function () {
          preview.innerHTML = markdown.toHTML(input.value);
        };
        input.editor = this;
        this.update();
      }
      var $ = function (id) { return document.getElementById(id); };
      new Editor($("text-input"), $("preview"));
    </script>
  </body>
</html>
```
##
    // Code is just text indented a bit
    <!DOCTYPE html>
	<html>
	  <body>
	    <textarea id="text-input" oninput="this.editor.update()"
	              rows="6" cols="60">Type **Markdown** here.</textarea>
	    <div id="preview"> </div>
	    <script src="lib/markdown.js"></script>
	    <script>
	      function Editor(input, preview) {
	        this.update = function () {
	          preview.innerHTML = markdown.toHTML(input.value);
	        };
	        input.editor = this;
	        this.update();
	      }
	      var $ = function (id) { return document.getElementById(id); };
	      new Editor($("text-input"), $("preview"));
	    </script>
	  </body>
	</html>

~~~