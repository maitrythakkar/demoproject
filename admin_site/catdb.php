<?php
class database1
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
    public function catgetdata()
    {
        $conn=database1::connection();
        $sql="select * from Cat_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function catinsert($_cat_id,$cat_name)
    {
        $conn=database1::connection();
        $sql="insert into Cat_tbl values('". $_cat_id ."','". $cat_name ."')";
         $res=$conn->query($sql);
         return $res;
    }
    public function getcat($_cat_id)
    {
        $conn=database1::connection();
        $sql="select * from Cat_tbl where Cat_pk_catid=".$_cat_id;
         $res=$conn->query($sql);
         return $res;

    }
    public function catupdate($_cat_name,$_cat_id)
    {
        $conn=database1::connection();
        $sql="update Cat_tbl set Cat_name='". $_cat_name ."' where Cat_pk_catid='". $_cat_id ."'" ;
                        echo $sql;             
         $res=$conn->query($sql);
        
         return $res;
          
    }
    public function catdelete($id)
    {
        $conn=database1::connection();
        $sql="delete from Cat_tbl where Cat_pk_catid=".$id;
         $res=$conn->query($sql);
         return $res;
    }
}
?>