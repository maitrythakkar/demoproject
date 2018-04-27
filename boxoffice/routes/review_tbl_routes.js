var express = require('express');
var router = express.Router();
var rating = require('../models/review_model');

router.get('/:id?', function (req, res, next) {

    if (req.params.id) {

        rating.getReviewById(req.params.id, function (err, rows) {

            if (err) {
                res.json(err);
            }
            else {
                res.json(rows);
            }
        });
    }
    else {
        rating.getAllReview(function (err, rows) {

            if (err) {
                res.json(err);
            }
            else {
                res.json(rows);
            }
        });


    }

});

router.post('/', function (req, res, next) {

    rating.addReview(req.body, function (err, rows) {

        if (err) {
            res.json(err);
        }
        else {
            res.json(rows);
        }
    });

});

router.delete('/:id', function (req, res, next) {

    rating.deleteReview(req.params.id, function (err, rows) {

        if (err) {
            res.json(err);
        }
        else {
            res.json(rows);
        }
    });


});

router.put('/:id', function (req, res, next) {

    rating.updateReview(req.params.id, req.body, function (err, rows) {

        if (err) {
            res.json(err);
        }
        else {
            res.json(rows);
        }
    });

});

module.exports = router;