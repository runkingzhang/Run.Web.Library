## Test-Driven Development with Node.js

用Node.js 构建测试。在项目中主要用到的几个模块是mocha.js should.js 还有supertest.js. 

### 为自己的代码负责

现在比较常见的测试风格有TDD（Test-Driven Development  测试驱动开发，）和BDD（Behavior-Driven Development )两者在关注点和表达方式上有所不同。 

mocha是现在node中比较常见和灵活的测试矿建，设计比较灵活，既可以采用元神assert原生模块，也可以采用拓展的断言库，常见的有should.js ，expect， chai等。

### 构建单元测试

Unit Testing\02\start 一个项目的目录文件对应的独立出来。这样就可以在多个地方调用app.js,启动测试和目录 

在Unit Testing\03\start 中建立test文件夹，文件夹中加入data和helpers文件夹，构建项目的测试目录。在里面加入对应的测试数据和测试案例。

修改FlightSpec.js。

ar app = require('./helpers/app');
var should = require('should'),
	supertest = require('supertest');
//这边是单元测试的内容

//单元测试描述内容
describe('flights', function () {
	it('should pass', function (done) {
		done();
	});

	it('should not pass', function (done) {
		 //throw "don't pass";
		done();
	});

});

在全局环境下安装mocha 和should supertest
在test下面输入mocha执行命令行。
在mocha中测试案例用 describe和it来组织。 describe可以死多层嵌套，it是用于比较具体的测试案例。 


构建具体的测试用例
var app = require('./helpers/app');
var should = require('should'),
	supertest = require('supertest');

describe('flights', function () {
	// 测试访问成功后的案例
	it('should return valid flight data for flight 18', 
	function (done) {
		supertest(app)
		// 发起一个get请求
		.get('/flight/18') 
		// 200表示的http网络访问的状态
		.expect(200)
		.end(function (err, res) {
			res.status.should.equal(200);
			done();
		});

	});

	// 测试访问失败的案例
	it('should return an error for an invalid flight', 
	function (done) {
		supertest(app)
		.get('/flight/99999999')
		//404 表示这个页面不存在，也就是在data中没有99999999这个航班
		.expect(404)
		.end(function (err, res) {
			
			res.status.should.equal(404);
			done();
		});

	});
	
	//模拟发送请求并且相应 
	it('should mark a flight as arrived',
	function (done) {
		//模拟put的内容，put后也是对应的返回get的相关信息
		supertest(app)
		.put('/flight/18/arrived')
		.expect(200)
		
		.end(function  (err, res) {
			res.status.should.equal(200);
			res.body.status.should.equal('done');
			//表示put的内容是成功了的
			supertest(app)
			.get('/flight/18')
			.expect(200)
			.end(function (err, res) {
				res.status.should.equal(200);
				res.body.actualArrive
				.should.not.equal(undefined);
				done();
			})
		});
	});

	/**

	*/
});


在Unit Testing\05\final 中执行mocha，我们可以看到对应的执行的结果内容，pass表示测试通过，表示自己书写的测试案例通过。
相当于模仿在网络访问环境下可以走通。


### 构建单元测试



测试增加用户后，用户数目加1.

require('co-mocha');

describe('user data', function() {
    it('should have +1 user count after saving', function* () {
        var users = yield data.users.get();
        
        yield data.users.save({ name: 'John' });
        
        var newUsers = yield data.users.get();
        
        newUsers.length.should.equal(users.length + 1);
    });
});



// 引入对应的断言库和对文件的操作
require('co-mocha');
var should = require('should');
var data = require('../user-data.js');
var fs = require('co-fs');

// 钩子 表明在测试前执行
before(function *(){
    yield fs.writeFile('./users.json', '[]');
});

describe('user data', function() {
    it('should have +1 user count after saving', function* () {
        var users = yield data.users.get();
        
        yield data.users.save({ name: 'John' });
        
        var newUsers = yield data.users.get();
        
        newUsers.length.should.equal(users.length + 1);
    });
});


// user-data.js'

var fs = require('co-fs');

var userFile = './users.json';

module.exports = {
    users : {
    	// 用户对数据的读
        get: function *() {
            var data = yield fs.readFile(userFile, 'utf-8');
            return JSON.parse(data);
        },
        // 用户在数据中的保存
        save: function *(user) {
            var users = yield this.get();
            
            users.push(user);
            
            yield fs.writeFile(userFile, JSON.stringify(users));
        }
    }
}


mocha提供before.after,beforeEach,aterEach四个钩子方法，用于写作describe中测试用例的准备，安装和卸载。 

### 跟进一步

mocha 

















#### 参考资料
lynda 《Test-Driven Development with Node.js》
Node.js深入浅出》第十章  测试








