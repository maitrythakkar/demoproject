<?php

class database
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","database1");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
   
     public function forgetpassword($_eml)
    {
        $conn=database::connection();    
        
   
   
    $sql="select * from user_tbl where User_pk_emailid='".$_eml."'";
    $res=$conn->query($sql);
    if($res->num_rows==1)
    {
        $row=$res->fetch_assoc();
        $password=$row["User_password"];
        $flag=1;
        return $password;
        echo $password;
    }
    else
    {
        return "your account is invalid";
    }
}
}
?>