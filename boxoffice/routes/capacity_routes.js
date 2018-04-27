 var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/',function(req,res,next){
 

 
boxoffice.capacity(function(err,rows){
 
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