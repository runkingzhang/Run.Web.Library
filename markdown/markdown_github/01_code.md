##### markdown code 

### 分割线 
```markdown
---
```

---

### 标题 
```markdown
# Header1  
## Header2
### Header3
#### Header4
##### Header5
##### Header6
```

# Header1  
## Header2
### Header3
#### Header4
##### Header5
##### Header6

---

### 引用 Blockquote
```markdown

> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
> consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.


> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.


> `var hi = 'hi';  
console.log(hi);`

```


> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
> consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.


> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.


> `var hi = 'hi';  
console.log(hi);`

---
### 代码 Code
```markdown

```js  
var hi = 'hi';  
console.log(hi);

 ```

```
## Code

    js ocde

## Code highlight

support in [gfm](https://github.com/mojombo/github-flavored-markdown)

```js  
var hi = 'hi';  
console.log(hi);
```

---
### 列表 List 
#### ul
```markdown  
- item0
- item1
- item2
```


- item0
- item1
- item2

#### ol
```markdown  
  1. [Types](#types)
  1. [Objects](#objects)
  1. [Arrays](#arrays)
  1. [Strings](#strings)
  1. [Functions](#functions)
  1. [Properties](#properties)
  1. [Variables](#variables)
  1. [Hoisting](#hoisting)
  1. [Conditional Expressions & Equality](#conditional-expressions--equality)
  1. [Blocks](#blocks)
  1. [Comments](#comments)
  1. [Whitespace](#whitespace)
  1. [Commas](#commas)

```

  1. [Types](#types)
  1. [Objects](#objects)
  1. [Arrays](#arrays)
  1. [Strings](#strings)
  1. [Functions](#functions)
  1. [Properties](#properties)
  1. [Variables](#variables)
  1. [Hoisting](#hoisting)
  1. [Conditional Expressions & Equality](#conditional-expressions--equality)
  1. [Blocks](#blocks)
  1. [Comments](#comments)
  1. [Whitespace](#whitespace)
  1. [Commas](#commas)


---




### 连接 Link 
```markdown  

[text link](http://abc)

![abc](http://www.baidu.com/img/baidu_sylogo1.gif "cool")
```


[text link](http://abc)

![abc](http://www.baidu.com/img/baidu_sylogo1.gif "cool")

#### 本页连接

```markdown  
*A mostly reasonable approach to JavaScript*
```
 1. [Types](#列表 List)


### 文本样式 

#### 文本背景加黑

```markdown  
`###### Header6`
```

`###### Header6`

#### 斜体

```markdown  
*A mostly reasonable approach to JavaScript*
```

*A mostly reasonable approach to JavaScript*

#### 加粗

```markdown  
**Primitives**:

- **Primitives**: When you access a primitive type you work directly on its value

```
**Primitives**:

- **Primitives**: When you access a primitive type you work directly on its value

#### 空心圆

```markdown  
	+ `string`
    + `number`
    + `boolean`
    + `null`
    + `undefined`

```

    + `string`
    + `number`
    + `boolean`
    + `null`
    + `undefined`

#### 跳转到页面的节点上面

```markdown  
	**[⬆ back to top](#table-of-contents)**

```
 **[⬆ back to top](#table-of-contents)**



