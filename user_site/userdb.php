<?php
class database
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","Project");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
   public function usergetdata()
    {
        $conn=database::connection();
        $sql="select * from Userb_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function userdelete($_eml)
    {
        $conn=database::connection();
        $sql="select * from user where eml='.$_eml.'";

         $res=$conn->query($sql);
         $row=$res->fetch_assoc();
         unlink($row["img"]);
         $sql="delete from user where eml=".$_eml;
         $res=$conn->query($sql);
         database::disconnect();

         return $res;
    
    }
    public function deleteusers($arr)
    {
        $conn=database::connect();

        $sql="delete from User_tbl where User_pk_emailid In($arr)";
        echo $sql;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();

    }
}