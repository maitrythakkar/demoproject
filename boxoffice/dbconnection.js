var mysql = require('mysql');
/*var connection=mysql.createPool({
 
host:'localhost',
user:'root',
password:'',
database:'boxoffice'
 
});*/
var connection = mysql.createPool({

    host: 'boxoffice1.db.9462939.769.hostedresource.net',
    user: 'boxoffice1',
    password: 'Maitry@1212',
    database: 'boxoffice1'

});
module.exports = connection;