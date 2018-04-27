 var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 var multer = require('multer');
var path = require('path');


 
/*router.post('/',function(req,res,next){
 
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
 });*/
 var storage = multer.diskStorage({
    destination: (req, file, cb) => {
        cb(null, 'public/images')
    },
    filename: (req, file, cb) => {
        x = file.fieldname + '-' + Date.now() + path.extname(file.originalname);
        cb(null, file.fieldname + '-' + Date.now() + path.extname(file.originalname))
    }
});

var upload = multer({ storage: storage });

router.post('/', upload.single('image'), function(req, res, next) {
    boxoffice.signUp(req.body, req.file.filename, function(err, count) {
        if (err) {
            res.json(err);
        } else {
            res.json(req.body);
        }
    });
});
 var storage = multer.diskStorage({
    destination: (req, file, cb) => {
        cb(null, 'public/images')
    },
    filename: (req, file, cb) => {
        x = file.fieldname + '-' + Date.now() + path.extname(file.originalname);
        cb(null, file.fieldname + '-' + Date.now() + path.extname(file.originalname))
    }
});

var upload = multer({ storage: storage });
router.put('/:id', upload.single('image'), function(req, res, next) {
    console.log(req.body)
    boxoffice.updateUsers(req.params.id, req.body, req.file.filename, function(err, rows) {

        if (err) {
            res.json(err);
        } else {
            res.json(rows);
        }
    });
});
module.exports = router;
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