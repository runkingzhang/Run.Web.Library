var util    = require('util');
var url     = require('url');
var express = require('express');
// var nmDbEngine = 'sqlite3';
var nmDbEngine = 'mongoose';
var notesdb = require('./notesdb-'+nmDbEngine);

var app = express.createServer();
app.use(express.logger());
//app.use(express.cookieParser());
app.use(express.bodyParser());

app.register('.html', require('ejs'));
app.set('views', __dirname + '/views-'+nmDbEngine);
app.set('view engine', 'ejs');

var parseUrlParams = function(req, res, next) {
    req.urlP = url.parse(req.url, true);
    next();
}

//var checkAccess = function(req, res, next) {
//    if (!req.cookies 
//     || !req.cookies.notesaccess 
//     || req.cookies.notesaccess !== "AOK") {
//        res.redirect('/login');
//    } else {
//        next();
//    }
//}

// app.error(function(err, req, res) {
//    res.render('500.html', { 
//        title: "Notes ("+nmDbEngine+") ERROR", error: err
//    });
// });
notesdb.connect(function(error) {
    if (error) throw error;
});
app.on('close', function(errno) {
    notesdb.disconnect(function(err) { });
});

app.get('/', /*checkAccess,*/ function(req, res) { res.redirect('/view'); });
app.get('/view', /*checkAccess,*/ function(req, res) {
    notesdb.allNotes(function(err, notes) {
        if (err) {
            util.log('ERROR ' + err);
            throw err;
        } else
            res.render('viewnotes.html', {
                title: "Notes ("+nmDbEngine+")", notes: notes
            });
    });
});
app.get('/add', /*checkAccess,*/ function(req, res) {
    res.render('addedit.html', {
        title: "Notes ("+nmDbEngine+")",
        postpath: '/add',
        note: notesdb.emptyNote  // use a dummy Note so the template works
    });
});
app.post('/add', /*checkAccess,*/ function(req, res) {
    notesdb.add(req.body.author, req.body.note, 
        function(error) {
            if (error) throw error;
            res.redirect('/view');
        });
});
app.get('/del', /*checkAccess,*/ parseUrlParams, function(req, res) {
      //  var notAllowed = null;
      //  notAllowed.delete();
    notesdb.delete(req.urlP.query.id, 
        function(error) {
            if (error) throw error;
            res.redirect('/view');
        });
});
app.get('/edit', /*checkAccess,*/ parseUrlParams, function(req, res) {
    notesdb.findNoteById(req.urlP.query.id, function(error, note) {
        if (error) throw error;
        res.render('addedit.html', {
            title: "Notes ("+nmDbEngine+")",
            postpath: '/edit',
            note: note
        });
    });
});
app.post('/edit', /*checkAccess,*/ function(req, res) {
    notesdb.edit(req.body.id, req.body.author, req.body.note,
        function(error) {
            if (error) throw error;
            res.redirect('/view');
        });
});

// app.get('/login', function(req, res) {
//    res.render('login.html', {
//        title: "Notes LOGIN ("+nmDbEngine+")",
//    });
// });
// app.post('/login', function(req, res) {
//    // TBD check credentials entered in form
//    res.cookie('notesaccess', 'AOK');
//    res.redirect('/view');
// });

// app.use(express.errorHandler({ dumpExceptions: true }));
// app.use(express.errorHandler({ showStack: true, dumpExceptions: true }));
app.listen(3000);
