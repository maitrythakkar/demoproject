 var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/',function(req,res,next){

 
boxoffice.getAllBook(function(err,rows){
 
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
router.post('/',function(req,res,next){
 
boxoffice.addBookingInfo(req.body,function(err,count){
  if(err)
  {
  res.json(err);
  }
  else{
  res.json(req.body);
  }
  });
 });
 module.exports=router;