var express = require('express');
var router = express.Router();
var boxoffice = require('../models/boxoffice_model');
router.get('/:id?',function(req,res,next){
boxoffice.getAllCustomer(function(err,rows){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(rows);
  }
 
 });
 
});


router.post('/', function (req, res, next) {

    boxoffice.signIn(req.body, function (err, count) {
        if (err) {
            res.json(err);
        }
        else {
            res.json(count);
        }
    });
});

module.exports = router; 