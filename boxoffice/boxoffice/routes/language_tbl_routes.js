var express = require('express');
 var router = express.Router();
 var boxofficee=require('../models/boxoffice_model.js');
 
router.get('/:id?',function(req,res,next){
 
if(req.params.id){
boxofficee.getLanguageById(req.params.id,function(err,rows)
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
 
boxofficee.getAllLanguage(function(err,rows){
 
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
 module.exports=router;