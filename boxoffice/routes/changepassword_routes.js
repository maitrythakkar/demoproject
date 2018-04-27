 var express = require('express');
 var router = express.Router();
 var boxoffice=require('../models/boxoffice_model');
router.put('/:id', function(req, res, next) {

    boxoffice.changePassword(req.params.id, req.body, function(err, rows) {

        if (err) {
            res.json(err);
        } else {
            res.json(rows);
        }
    });
});
module.exports = router; 