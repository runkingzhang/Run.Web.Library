require('co-mocha');
var should = require('should');
var data = require('../user-data.js');
var fs = require('co-fs');
var api = require('../user-web.js');
var request = require('co-supertest').agent(api.listen());
 
//

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

describe('user web', function() {
    it('should have +1 user count after saving', function* () {
        var users = (yield request.get('/user').expect(200).end()).body;

        yield data.users.save({ name: 'John' });
        
        var newUsers = (yield request.get('/user').expect(200).end()).body;
        
        newUsers.length.should.equal(users.length + 1);
    });
});