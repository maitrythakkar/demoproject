/*var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:id?',function(req,res,next){
 
if(req.params.id){
boxoffice.getTimeByDate(req.params.id,function(err,rows)
{
 
if(err)
  {
  res.json(err);
  }
  else{
  res.json(rows);
  }
  });
 }
});
 module.exports=router;*/
 
 var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:dt/:tid',function(req,res,next){
 

boxoffice.getTimeByDateAndTID(req.params.dt,req.params.tid,function(err,rows)
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
 module.exports=router;
 