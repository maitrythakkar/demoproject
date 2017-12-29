var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:id?',function(req,res,next){
 
if(req.params.id){
boxoffice.getFeedbackById(req.params.id,function(err,rows)
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
 else{
 
boxoffice.getAllFeedback(function(err,rows){
 
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

router.post('/',function(req,res,next){
 
boxoffice.addFeedback(req.body,function(err,count){
  if(err)
  {
  res.json(err);
  }
  else{
  res.json(req.body);
  }
  });
 });
 router.delete('/:id',function(req,res,next){
 
boxoffice.deleteFeedback(req.params.id,function(err,count){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(count);
  }
  
 
});
 });
 router.put('/:id',function(req,res,next){
 
boxoffice.updateFeedback(req.params.id,req.body,function(err,rows){
 
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