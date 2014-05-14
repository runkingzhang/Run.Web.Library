var events = require('events');
var util   = require('util');

// var logInterval = function() {
//    util.log('interval');
// }
// setInterval(logInterval, 2 * 1000);

function Pulser() {
    events.EventEmitter.call(this);
}
util.inherits(Pulser, events.EventEmitter);

Pulser.prototype.start = function() {
    var self = this;
    setInterval(function() {
        util.log('>>>> pulse');
        self.emit('pulse');
        util.log('<<<< pulse');
    }, 1000);
}

var pulser = new Pulser();
pulser.on('pulse', function() {
    util.log('pulse received');
});
pulser.start();

