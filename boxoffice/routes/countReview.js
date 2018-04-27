var express = require('express');
var router = express.Router();
var rating = require('../models/review_model');
router.get('/:mid',function(req,res,next){

  rating.getCountReview(req.params.mid,function(err,rows)
{
  //alert(this.id);
 // console.log(this.id);

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