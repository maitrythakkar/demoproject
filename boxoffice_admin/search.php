<?php

	 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
  //-select  the database to use 
  $mydb=mysql_select_db("boxoffice"); 
 //-query  the database table 
	  $sql="SELECT  pk_Movie_id, Movie_name, Director FROM movie_tbl WHERE Movie_name LIKE '%" . $name .  "%' OR Director LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $FirstName  =$row['Movie_name']; 
	          $LastName=$row['Director']; 
	          $ID=$row['pk_Movie_id']; 
	  //-display the result of the array 
	 echo' <table class="table table-hover">'; 
                        echo'<thead>';
                            echo'<tr>'; 
                                 
                                     echo '<th>Movie name</th>';
                                    // <th>Director</th>
                                    //  <th>Image</th>
                                    // <th>Producer</th>
                        echo ' </tr> ';
                       echo '  </thead>'; 
						  echo '<tr>';
                echo "<td>"."<a  href=\"search.php?id=$ID\">"   .$FirstName . " </a></td>";
	  //echo "<ul>\n"; 
	//echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
	//  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
	 
	?> 
