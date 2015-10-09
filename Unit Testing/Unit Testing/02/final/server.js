//
/**
 * 把app当做一个模块，在sever中使用app的接口
 */
var http = require('http'),
	flights = require('./data'),
	app = require('./app')(flights);

//监听网络
http.createServer(app).listen(app.get('port'), function(){
  console.log('Express server listening on port ' + app.get('port'));
});

