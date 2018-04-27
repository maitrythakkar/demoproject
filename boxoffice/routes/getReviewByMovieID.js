var express = require('express');
var router = express.Router();
var rating = require('../models/review_model');
router.get('/:mid',function(req,res,next){

  rating.getReviewByMid(req.params.mid,function(err,rows)
{


if(err)
  {
  res.json(err);
  }
  else{
  res.json(rows);
  }
  });
 
});
module.exports = router;