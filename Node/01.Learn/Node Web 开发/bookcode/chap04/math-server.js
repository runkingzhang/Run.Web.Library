var htutil  = require('./htutil');
var math  = require('./math');
var express = require('express');
var util = require('util');
var app = express.createServer(
    //express.logger()
);
app.configure(function(){
    app.use(app.router);
    app.use(express.errorHandler({ dumpExceptions: true, showStack: true }));
});

app.get('/fibonacci/:n', function(req, res, next) {
    try {
        math.fibonacciAsync(Math.floor(req.params.n), function(val) {
            res.send({
                n: req.params.n,
                result: val
            });
        });
    } catch(e) {
        next('FIBO ERROR ' + e);
    }
});
app.get('/factorial/:n', function(req, res, next) {
    try {
        res.send({ 
            n: req.params.n, 
            result: math.factorial(Math.floor(req.params.n))
        });
    } catch(e) { next('FACTORIAL ERROR ' + e); }
});
app.get('/mult/:a/:b', function(req, res, next) {
    try {
        res.send({ 
            a: req.params.a, 
            b: req.params.b, 
            result: req.params.a * req.params.b
        });
    } catch(e) { next('MULT ERROR ' + e); }
});
app.get('/square/:a', function(req, res, next) {
    try {
        res.send({ 
            a: req.params.a, 
            result: req.params.a * req.params.a
        });
    } catch(e) { next('SQUARE ERROR ' + e); }
});
app.listen(3002);
