var db = require('../dbconnection');

var boxofficee = {
    //Service for Language
    getAllLanguage: function (callback) {

        return db.query("Select * from language_tbl", callback);

    },
    getLanguageById: function (id, callback) {

        return db.query("select * from language_tbl where pk_Language_id=?", [id], callback);
    },
    //Service for Movie
    getAllMovie: function (callback) {

        return db.query("Select * from movie_tbl", callback);

    },
    getMovieById: function (id, callback) {

        return db.query("select * from movie_tbl where pk_Movie_id=?", [id], callback);
    },
    //Service for Show
    getAllShow: function (callback) {

        return db.query("Select * from show_tbl", callback);

    },
    getShowById: function (id, callback) {

        return db.query("select * from show_tbl where pk_Show_id=?", [id], callback);
    },
    //Service for Theater
    getAllTheater: function (callback) {

        return db.query("Select * from theater_tbl", callback);
    },
    getTheaterById: function (id, callback) {

        return db.query("select * from theater_tbl where pk_theater_id=?", [id], callback);
    },
    //Service for Feedback
    getAllFeedback: function (callback) {

        return db.query("Select * from feedback_tbl", callback);
    },
    getFeedbackById: function (id, callback) {
        return db.query("select * from feedback_tbl where pk-Feedback_is=?", [id], callback);
    },
    addFeedback: function (boxofficee, callback) {
        return db.query("Insert into feedback_tbl values(?,?,?)", [boxoffice.pk - Feedback_is, boxoffice.fk_email_id, boxoffice.Feedback], callback);
    },
    deleteFeedback: function (id, callback) {
        return db.query("delete from feedback_tbl where pk-Feedback_is=?", [id], callback);
    },
    updateFeedback: function (id, boxofficee, callback) {
        return db.query("update feedback_tbl set fk_email_id=?,Feedback=? where pk-Feedback_is=?", [boxoffice.fk_email_id, boxoffice.Feedback, id], callback);
    },
    //Service for Customer
    signUp: function (boxofficee, callback) {
        return db.query("insert into customer_tbl values(?,?,?,?,?,?,?,?,?,?)", [boxofficee.pk_email_id, boxofficee.User_name, boxofficee.Password, boxofficee.Fname, boxofficee.Lname, boxofficee.Gender, boxofficee.Address, boxofficee.Pincode, boxofficee.Mobile_no, boxofficee.Bdate], callback);
    },
    deleteAccount: function (id, callback) {
        return db.query("delete from customer_tbl where pk_email_id=?", [id], callback);
    },
    signIn: function (boxofficee, callback) {
        return db.query("select * from customer_tbl where pk_email_id=? and Password=?", [boxofficee.pk_email_id, boxofficee.Password], callback);
    },
    getAllCustomer(callback)
    {
        return db.query("select * from customer_tbl",callback);
    }
    /*updateAccount:function(id,Task,callback){
    }
   */
};
module.exports = boxofficee;
