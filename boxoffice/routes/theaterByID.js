var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:id?',function(req,res,next){
 

boxoffice.getTheaterById(req.params.id,function(err,rows)
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
 /*var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:id/:id1',function(req,res,next){
 


 

boxoffice.getTheaterById(req.params.id,req.params.id1,function(err,rows)

{
 
if(err)
  {
  res.json(err);
  }
  else{
  res.json(rows);
  }
  });
 
/* else{
 
boxoffice.getAllTheater(function(err,rows){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(rows);
  }
 
 });
 }
});
 module.exports=router;*/