 <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $con = new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
         $_pk_Language_id=$_POST["txtpk_Language_id"];
         $_Language_name=$_POST["txtLanguage_name"];
     
         require '../admin_class.php';
         $obj=new movie_booking();
         $res=$obj->addLanguage($_pk_Language_id,$_Language_name);
         
      
      if($res===true)
      {
         header('location:languageDb.php');
      }
      else
      {
          echo "Unsuccessful";
          
      }
            
    }
      ?>