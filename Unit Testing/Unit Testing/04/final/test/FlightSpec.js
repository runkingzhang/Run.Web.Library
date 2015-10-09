var app = require('./helpers/app');

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

/**
 * 在安装对应的测试包后 在命令刚中使用macha的命令行
 mocha要是安装在全局目录下面
 这边需要看一下should.js 做了什么事情	
 */
 