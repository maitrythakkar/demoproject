var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
 
router.get('/:id/:id1/:id2',function(req,res,next){

  boxoffice.getTicketSummarybyGet(req.params.id,req.params.id1,req.params.id2,function(err,rows)
{
  //alert(this.id);
 // console.log(this.id);

if(err)
  {
  res.json(err);
  }
  else{
  res.json(rows);
  }
  });
 
});
router.post('/', function (req, res, next) {

    boxoffice.getTicketSummarybyPost(req.body, function (err, count) {
        if (err) {
            res.json(err);
        }
        else {
            res.json(count);
        }
    });
});

 module.exports=router;