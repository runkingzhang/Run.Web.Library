require('co-mocha');
var should = require('should');
var data = require('../user-data.js');
var fs = require('co-fs');

//这边每次都清零，把原来的数据给清除掉了的。
before(function *(){
    yield fs.writeFile('./users.json', '[]');
});

//单元测试一个描述，是不是和你的预期相符合
describe('user data', function() {
    it('should have +1 user count after saving', function* () {
        var users = yield data.users.get();
        yield data.users.save({ name: 'John' });
        var newUsers = yield data.users.get();
        newUsers.length.should.equal(users.length + 1);
    });
});






