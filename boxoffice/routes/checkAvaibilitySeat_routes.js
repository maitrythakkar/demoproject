 var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:sid/:mid/:tid',function(req,res,next){
 

 
boxoffice.checkSeatAvaibility(req.params.sid,req.params.mid,req.params.tid,function(err,rows){
 
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
 module.exports=router;