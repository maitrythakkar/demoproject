var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var cors=require('cors');

var index = require('./routes/index');
var users = require('./routes/users');
var language=require('./routes/language_tbl_routes');
var movie=require('./routes/movie_tbl_routes');
var show=require('./routes/show_tbl_routes');
var theater=require('./routes/theater_tbl_routes');
var customer=require('./routes/customer_tbl_routes');
 var feedback=require('./routes/feedback_tbl_routes');
 var commingsoon=require('./routes/commingsoon_routes');
 var nowshowing=require('./routes/nowshowing_routes');
 var movieAndLanguage=require('./routes/movieAndLanguage');
 var book=require('./routes/book_tbl_routes');
 var time=require('./routes/showtime_routes');
 var login=require('./routes/userLogin_routes');
 var summary=require('./routes/ticket_summary');
 var forgetpassword=require('./routes/forgetpass_routes');
 var changePassword=require('./routes/changepassword_routes');
 var checkSeat=require('./routes/checkAvaibilitySeat_routes');
 var capacity=require('./routes/capacity_routes');
 var review=require('./routes/review_tbl_routes');
 var starcount=require('./routes/starCountOfReview');
 var avgRating=require('./routes/avgRating');
 var countRating=require('./routes/countRating');
 var countReview=require('./routes/countReview');
 var ReviwByMid=require('./routes/getReviewByMovieID');
 var theaterByID=require('./routes/theaterByID');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(cors());
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', index);
app.use('/users', users);
app.use('/customer',customer);
app.use('/movie',movie);
app.use('/show',show);
app.use('/theater',theater);
app.use('/feedback',feedback);
app.use('/language',language);
app.use('/commingsoon',commingsoon);
app.use('/nowshowing',nowshowing);
app.use('/movieAndLanguage',movieAndLanguage);
app.use('/book',book);
app.use('/time',time);
app.use('/login',login);
app.use('/forgetpassword',forgetpassword);
app.use('/changepassword',changePassword);
app.use('/summary',summary);
app.use('/checkseat',checkSeat);
app.use('/capacity',capacity);
app.use('/review',review);
app.use('/starcount',starcount);
app.use('/avgrating',avgRating);
app.use('/countrating',countRating);
app.use('/countreview',countReview);
app.use('/getreviewbymid',ReviwByMid);
app.use('/theaterbyid',theaterByID);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
