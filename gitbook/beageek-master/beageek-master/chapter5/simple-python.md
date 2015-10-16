#Python#
作为一门计算机语言来说，Python会有下面的特点。

 - 语言学习起来容易
 - 解决生活中的实际问题
 - 支持多学科
 
我们可以和其他不是脚本语言的语言进行一个简单的对比，如C，你需要去编译去运行，有时候还需要解决跨平台问题，本来你是在你的Windows上运行得好好的，但是有一天你换了一个Mac电脑的时候，问题变得很棘手，你甚至不知道怎么去解决问题。我没有用过MFC，听说很方便，但是在其他平台下就没有一个好的解决方案。这里可能跑得有点远，但是不同的用户可能在不同的平台上，这也就是脚本语言的优势所在了。



##代码与散文##
你可能听过，也可能了解过，不过在这里我们可能不会去讲述那些基础的语法的东西，我们想说的是代码格式的重要性，在html中你可以这样去写你的代码

	<html><head><title>This is a Title
	</title></head><body><div class="content">
	<p>flakjfaklfjalfa</p></div>
	</body></html>
	
又或者是js的minify，它可能会使你的代码看起来像是这样的:

	function NolTracker(b,a){this.pvar=b;this.mergeFeatures(a)}
	
可能的是如果是python的话，你可能会遇到下面的问题。。

    File "steps.py", line 10
       try:
       ^
    IndentationError: expected an indented block
    
如果你对JSLint、Lint这类的工具有点印象的话，你也可以认为python集成了这类工具。整洁的代码至少应该看上去要有整洁的衣服，就好像是我们看到的一个人一样，而后我们才会有一个好的印象。更主要的一点是代码是写给人看的，而衣服更多的时候对于像我这样的人来说，他首先应该是要保暖的，其次对于一个懒的人来说。。。

<blockquote>程序应该是具有可读性的短文，它将在计算机上执行，从而解决某些问题</blockquote>

我们需要去读懂别人的代码，别人也需要去读懂我们的代码。计算机可以无条件地执行你那未经编排过的程序，但是人就不是如此了。

	var calc={add: function(a,b){return a+b;},sub: function(a,b){return a-b;},dif: function(a,b){if(a>b){return a;}else{return b;}}}
	
上面的代码相对于下面的代码可读性没有那么多，但是计算机可以无条件地执行上面的代码。上面的代码对于网络传输来说是好的，但是对于人来说并不是如此，我们需要一些工具来辅助我们去读懂上面的代码。如果代码上写得没有一点可读性，诸如函数命名没有多少实际意义，如果我们把前面的函数就成这样：

	var c={
		a: function(a,b){
			return a+b;
		},
		s: function(a,b){
			return a-b;
		},
		d: function(a,b){
			if(a>b){
				return a;
			}else{
				return b;
			}
		}
	}

那么只有在我们理解了这个函数是干什么之后才能理解函数是干什么，而不是光看函数名就可以了。

在Javascript解决一个函数的办法有很多，在其他一些语言如Ruby或者Perl中也是如此，解决问题的办法有很多，对于写代码的人来说是一个享受的过程，但是对于维护的人来说并非如此。而这个和Python的思想不是很一致的是，Python设计的理念是

<blockquote>对于特定的问题，只要有一种最好的方法来解决就够了</blockquote>

可读性的代码在今天显得比以前重要的多，以前写程序的时候我们需要去考虑使用汇编或者其他工具来提高程序的效率。

                .global _start

                .text
        _start:
                # write(1, message, 13)
                mov     $1, %rax                # system call 1 is write
                mov     $1, %rdi                # file handle 1 is stdout
                mov     $message, %rsi          # address of string to output
                mov     $13, %rdx               # number of bytes
                syscall                         # invoke operating system to do the write

                # exit(0)
                mov     $60, %rax               # system call 60 is exit
                xor     %rdi, %rdi              # we want return code 0
                syscall                         # invoke operating system to exit
        message:
                .ascii  "Hello, world\n"

所以上面的代码的可读性在今天新生一代的程序员来说可能没有那么容易理解。芯片运行的速度越来越快，在程序上我们也需要一个越来越快的解决方案，而所谓的越来越快的解决方案指的不是运行速度上，而是开发速度上。如果你没有办法在同样时间内开发出更好的程序，那么你就可能输给你的竞争对手。

##开始之前##
我们终于又从一种语言跳到了另外一种语言，我们可能习惯了一种模式，而不敢于去尝试新的东西，这些或许是我们的一些习惯又或者是因为害怕等等。

作为另外一个跨平台能力很强的语言，这里说的是与Javascript、HTML比较，或许你会觉得C算是最好的，但是我们这里讨论更多的是脚本语言，也就是直接可以运行的。在现在主流的大多数移动平台上，python也有良好的支持，如Android,IOS，只是这些算是类Unix系统内核，python还支持之前Nokia的Symbian。

开始之前我们需要确认我们的平台上已经有了python环境，也就是可以运行下面的Hello,World，你可以在网上很多地方看到，最简单的地方还是到官网，又或者是所用移动平台的store下载。

##Python的Hello,World##
Python的Hello,World有两种形式，作为一种脚本语言来说，Javascript也是一种脚本语言，只是两者之间有太多的不同之处，每个人都会有不同的选择对于一种语言用来作为其的习惯。于是这就是我们的

    print "Hello,World"
    
当我们把我们的脚本在shell环境下运行时
<pre><code class="bash">
>>>  print "Hello,world"
  File "<stdin>", line 1
    print "Hello,world"
    ^
IndentationError: unexpected indent
>>> print "Hello,world"
Hello,world
>>>
</code></pre>

如果你没有预料到缩进带来的问题的时候，这就是一个问题了。

和我们在Javascript或者是CSS里面一样，我们也可以用一个文件的方式来写入我们的代码，文件后缀名是py，所以创建一个helloworld.py，输入上面的代码，然后执行

    python helloworld.py

一个理想的结果，或许你试过C语言的helloworld，如果了解过GCC的话应该是可以这样的:


    ./a.out
    
也就是执行编译完后的程序，需要注意的是helloworld.py没有编译，不过也会输出

    Hello,world

##我们想要的Hello,World##

我们想展示的是如何结合前面学习的内容做一个更有意思的Hello,World。

	import cherrypy
	class HelloWorld(object):
    	def index(self):
        	return "Hello World!"
    	index.exposed = True

	cherrypy.quickstart(HelloWorld())
	
##算法##

我们需要去了解算法(algorithm)，引经据典的话就是这样子:

<blockquote>a process or set of rules to be followed in calculations or other problem-solving operations, especially by a computer</blockquote>

也就是计算或其他解决问题的操作需要遵循的一个过程或者一套规则，书上还提到的说法是——解决问题的诀窍，让我想起了hack一词。我们总会去想某些东西是否有一个更快的计算方法，有时候在处理某些问题上也显示了一个好的算法的重要性。

##实用主义哲学##
