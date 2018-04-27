var db=require('../dbconnection'); 
 
var boxofficee={
     //Service for Language
    getAllLanguage:function(callback){
 
        return db.query("Select * from language_tbl",callback);
 
    },
     getLanguageById:function(id,callback){
 
        return db.query("select * from language_tbl where pk_Language_id=?",[id],callback);
     },
     //Service for Movie
    getAllMovie:function(callback){
 
        return db.query("Select * from movie_tbl",callback);
 
    },
    getMovieById:function(id,callback){
 
        return db.query("select * from movie_tbl where pk_Movie_id=?",[id],callback);
    },
    //Service for Show
    getAllShow:function(callback){
 
        return db.query("SELECT show_tbl .*, movie_tbl.*, theater_tbl.*, screen_tbl.*  FROM (((show_tbl JOIN movie_tbl ON show_tbl.fk_Movie_id=movie_tbl.pk_Movie_id) JOIN	theater_tbl ON show_tbl.fk_theater_id=theater_tbl.pk_theater_id) JOIN screen_tbl ON show_tbl.fk_Screen_id=screen_tbl.pk_Screen_id)",callback);
//return db.query("select show_tbl.*,movie_tbl.pk_Movie_id from show_tbl,movie_tbl WHERE show_tbl.fk_Movie_id=?",[id],callback);
    },
     getShowById:function(id,callback){
// return db.query("select * from show_tbl WHERE show_tbl.fk_Movie_id=?",[id],callback);
    return db.query("select * FROM show_tbl WHERE show_tbl.fk_Movie_id=? GROUP BY show_tbl.Date",[id],callback)
               //return db.query("select show_tbl.*,movie_tbl.pk_Movie_id from show_tbl,movie_tbl WHERE movie_tbl.pk_Movie_id=?",[id],callback);

    },
        
     //Service for Theater
    getAllTheater:function(callback){
 
        return db.query("Select * from theater_tbl",callback);
    },

      getTheaterById:function(id,callback){
            return db.query("SELECT * FROM theater_tbl WHERE pk_theater_id=?",[id],callback);
    },
    
        getTheaterByMId:function(id,callback){
// return db.query("SELECT show_tbl.*,theater_tbl.* from show_tbl,theater_tbl WHERE theater_tbl.pk_theater_id=? AND show_tbl.fk_Movie_id=?",[id,id1],callback);
 return db.query("select theater_tbl.* FROM show_tbl,theater_tbl WHERE show_tbl.fk_Movie_id=? GROUP BY theater_tbl.theater_name",[id],callback);

               //return db.query("select show_tbl.*,movie_tbl.pk_Movie_id from show_tbl,movie_tbl WHERE movie_tbl.pk_Movie_id=?",[id],callback);

    },
     //Service for Feedback
     getAllFeedback:function(callback){
 
        return db.query("Select * from feedback_tbl",callback);
    },
    getFeedbackById:function(id,callback){
        return db.query("select * from feedback_tbl where pk-Feedback_is=?",[id],callback);
    },
    addFeedback:function(boxoffice,callback){
        return db.query("insert into feedback_tbl values(?,?,?,?)",[boxoffice.pk-Feedback_is,boxoffice.fk_email_id,boxoffice.fk_Movie_id,boxoffice.Feedback],callback);
    },
    deleteFeedback:function(id,callback){
        return db.query("delete from feedback_tbl where pk-Feedback_is=?",[id],callback);
    },
    updateFeedback:function(id,Task,callback){
        return db.query("update feedback_tbl set fk_email_id=?,Feedback=? where pk-Feedback_is=?",[boxoffice.fk_email_id,boxoffice.Feedback,id],callback);
    },
    getAllCustomer:function(callback)
    {
        return db.query("select * from customer_tbl",callback);
    },
         getCustomerById:function(id,callback){
               return db.query("select * from customer_tbl where pk_email_id=?",[id],callback);
    },
      //Service for Customer
    signUp:function(boxoffice,filename,callback){
        return db.query("insert into customer_tbl values(?,?,?,?,?,?,?,?,?,?,?,?)",[boxoffice.pk_email_id,boxoffice.User_name,boxoffice.Password,boxoffice.Fname,boxoffice.Lname,boxoffice.Gender,boxoffice.Address,boxoffice.Pincode,boxoffice.Mobile_no,boxoffice.Bdate,filename,boxoffice.type],callback);
    },
    signIn: function (boxofficee, callback) {
        return db.query("select * from customer_tbl where pk_email_id=? and Password=?", [boxofficee.pk_email_id, boxofficee.Password],callback);
    },
      changePassword: function(id, boxoffice, callback) {
        return db.query("update customer_tbl set Password=? where pk_email_id=?", [boxoffice.Password, id], callback);
    },
        updateUsers: function(id, boxoffice, filename, callback) {
        if (boxoffice.User_img != '') {
            console.log(boxoffice);
            var path = './public/images/' + boxoffice.user_img;
            fs.unlink(path, function(err) {
                if (err) {
                    console.log(err);
                }
                console.log('Deleted successfuly');
            })
        }
        return db.query("UPDATE customer_tbl set customer_tbl.User_name=?,customer_tbl.Fname=?,customer_tbl.Lname=?,customer_tbl.Gender=?,customer_tbl.Address=?,customer_tbl.Pincode=?,customer_tbl.Mobile_no=?,customer_tbl.Bdate=?,customer_tbl.User_img=?,customer_tbl.type=? where customer_tbl.pk_email_id=?", [boxoffice.User_name,boxoffice.Fname,boxoffice.Lname,boxoffice.Gender,boxoffice.Address,boxoffice.Pincode,boxoffice.Mobile_no,boxoffice.Bdate,filename,boxoffice.type, id], callback);
     },
     
        deleteAccount:function(id,callback){
        return db.query("delete from customer_tbl where pk_email_id=?",[id],callback);
    },
        
    getComingsoon:function(callback){
 
         return db.query("select  l.*, m.* from language_tbl l,movie_tbl m where m.fk_Language_id=l.pk_Language_id and m.Type=0 ",callback);
 
    },
    getNowShowing:function(callback){
         return db.query("select  l.*, m.* from language_tbl l,movie_tbl m where m.fk_Language_id=l.pk_Language_id and m.Type=1 ",callback);
    },
     getAllBook:function(callback){
        // return db.query("select book_tbl.*,movie_tbl.*,show_tbl.*,theater_tbl.* from book_tbl,movie_tbl,show_tbl,theater_tbl where book_tbl.fk_movie_id=movie_tbl.pk_Movie_id AND book_tbl.fk_show_id=show_tbl.pk_Show_id AND book_tbl.fk_theater_id=theater_tbl.pk_theater_id",callback);
        return db.query("SELECT * FROM book_tbl",callback);
},
     getBookById:function(callback){
         return db.query("select book_tbl.*,movie_tbl.*,show_tbl.*,theater_tbl.* from book_tbl,movie_tbl,show_tbl,theater_tbl where book_tbl.fk_movie_id=movie_tbl.pk_Movie_id AND book_tbl.fk_show_id=show_tbl.pk_Show_id AND book_tbl.fk_theater_id=theater_tbl.pk_theater_id",callback);
    },
    addBookingInfo:function(boxoffice,callback){
        return db.query("insert into book_tbl values (?,?,?,?,?,?)",[boxoffice.pk_book_id,boxoffice.No_of_seats,boxoffice.fk_show_id,boxoffice.fk_movie_id,boxoffice.fk_theater_id,boxoffice.fk_email_id],callback);
    },
    /*
    getPastTicketSummary(id,callback)
    {
        return db.query("SELECT show_tbl.*,customer_tbl.*,movie_tbl.* from show_tbl,customer_tbl,movie_tbl WHERE show_tbl.pk_Show_id=? and customer_tbl.pk_email_id=? and movie_tbl.pk_Movie_id=? and show_tbl.Date=?"[id],callback);
    },*/
    /* getTicketSummarybyGet(id,id1,id2,id3,callback)
    {
        console.log("demo id1"+this.id);
        return db.query("SELECT show_tbl.*,customer_tbl.*,movie_tbl.* from show_tbl,customer_tbl,movie_tbl WHERE show_tbl.pk_Show_id=? and customer_tbl.pk_email_id=? and movie_tbl.pk_Movie_id=? and show_tbl.Start_time=?",[id,id1,id2,id3],callback);
    },*/
      getTicketSummarybyGet(id,id1,id2,callback)
    {
        console.log("demo id1"+this.id);
        return db.query("SELECT show_tbl.*,customer_tbl.*,movie_tbl.* from show_tbl,customer_tbl,movie_tbl WHERE show_tbl.pk_Show_id=? and customer_tbl.pk_email_id=? and movie_tbl.pk_Movie_id=? ",[id,id1,id2],callback);
    },
       getTicketSummarybyPost(boxoffice,callback)
    {
        console.log("demo id1"+this.boxoffice);
        return db.query("SELECT show_tbl.*,customer_tbl.*,movie_tbl.* from show_tbl,customer_tbl,movie_tbl WHERE show_tbl.pk_Show_id=? and customer_tbl.pk_email_id=? and movie_tbl.pk_Movie_id=? and show_tbl.Start_time=?",[boxoffice.pk_Show_id,boxoffice.pk_email_id,boxoffice.pk_Movie_id,boxoffice.Start_time],callback);
    },
    getTimeByDate:function(id,callback)
    {
        return db.query("select show_tbl.Start_time from show_tbl where show_tbl.Date=?",[id],callback);   
    },
       getTimeByDateAndTID:function(dt,tid,callback)
    {
        return db.query("select show_tbl.Start_time from show_tbl where show_tbl.Date=? and show_tbl.fk_theater_id=?",[dt,tid],callback);   
    },
          
       checkSeatAvaibility:function(sid,mid,tid,callback){
 
         //return db.query(" SELECT screen_tbl.capacity- SUM(book_tbl.No_of_seats) AS result FROM screen_tbl,book_tbl",callback);
            return db.query("SELECT screen_tbl.capacity- SUM(book_tbl.No_of_seats) AS result FROM screen_tbl,book_tbl WHERE book_tbl.fk_show_id=? and book_tbl.fk_Movie_id=? and book_tbl.fk_theater_id=?",[sid,mid,tid],callback);
    },
     capacity:function(callback){
 
         return db.query("SELECT screen_tbl.capacity FROM screen_tbl",callback);
    }
    
  
   
     
    
       
    
 /*updateAccount:function(id,Task,callback){
 }
*/
};
 module.exports=boxofficee;
