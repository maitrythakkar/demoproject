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
    public function change($_oldpass,$_newpass,$_eml)
    {
        $conn=database::connection();
        $sql="select * from User_tbl where User_pk_emailid='".$_eml."' and User_password='".$_oldpass."' ";
        $res=$conn->query($sql);
        if($res->num_rows==1)
        {
            $sql="update User_tbl set User_password='".$_newpass."' where User_pk_emailid='".$_eml."' ";
            $res=$conn->query($sql);
              return $res;
        }
        else
        {
            echo "username and password is incorrect";
        }

    }
}

    ?>