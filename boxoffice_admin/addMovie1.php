  <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $con = new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
      $_pk_Movie_id=$_POST["txtpk_Movie_id"];
      echo $_pk_Movie_id;
      $_Movie_name=$_POST["txtMovie_name"];
      echo $_Movie_name;
      $_Director=$_POST["txtDirector"];
      
      $_Producer=$_POST["txtProducer"];
      $_Cast=$_POST["txtCast"];
      $_Duration=$_POST["txtDuration"];
      $_Story=$_POST["txtStory"];
      $_Type=$_POST["txtType"];
      $_fk_Language_id=$_POST["txtfk_Language_id"];
      $_Rating=$_POST["txtRating"];  
	 // $target_dir="images/";
//$target_file=$target_dir.basename($_FILES["pimg"]["name"]);

//if(move_uploaded_file($_FILES["pimg"]["tmp_name"],$target_file))

       $target_dir="images/";
	     $target_file=$target_dir.basename($_FILES["txtpimg"]["name"]);
	   echo $target_file;
          
            echo $target_file;

            if(move_uploaded_file($_FILES["txtpimg"]["tmp_name"],$target_file))
            {  
   
                  
      
      require 'admin_class.php';
      $obj=new movie_booking();
      $res=$obj->addMovie($_pk_Movie_id,$_Movie_name,$_Director,$target_file,$_Producer,$_Cast,$_Duration,$_Story,$_Type,$_fk_Language_id,$_Rating );
      echo $res;
      
      if($res===true)
      {
        //  echo "Unsuccessful";
		  header('location:movieDb.php');
      }
      else
      {
          echo "Unsuccessful";
          
      }
            }
    }
      ?>
	