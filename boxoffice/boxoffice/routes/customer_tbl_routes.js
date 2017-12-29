  var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.post('/',function(req,res,next){
 
boxoffice.signUp(req.body,function(err,count){
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
 
boxoffice.deleteAccount(req.params.id,function(err,count){

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
/* router.put('/:id',function(req,res,next){
 
boxoffice.updateAccount(req.params.id,req.body,function(err,rows){
 
if(err)
  {
  res.json(err);
  }
  else
  {
  res.json(rows);
  }
  });
 });*/
 module.exports=router;