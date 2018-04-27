var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:id?',function(req,res,next){
 
if(req.params.id){
boxoffice.getMovieById(req.params.id,function(err,rows)
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
 
boxoffice.getAllMovie(function(err,rows){
 
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