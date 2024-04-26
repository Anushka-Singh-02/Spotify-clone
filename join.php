<?php      
    include('./connection.php');  // Assuming this file contains your database connection setup

    // Assuming 'connection.php' contains a variable $con which is your mysqli connection object

      
    $pname=$_POST['pname'];
  
    
    //to prevent from mysqli injection  
   
    $pname = stripcslashes($pname);  
   
  
    $pname = mysqli_real_escape_string($con, $pname); 
  
    
  
    
   
    
  
   
        $val = mysqli_query($con,"select 1 from `$pname` LIMIT 1"); //checking if the playlist table exists or not

            if($val == FALSE)
            {
                echo 'Playlist does not exist.';
            }
            else
            {
               $sql="select * from `$pname` inner join songs on songs.song_name=`$pname`.song_name";
                $retval = mysqli_query($con, $sql);  
                if (!$retval) {
                    // Print the error message
                    echo "Error: " . mysqli_error($con);
                    exit(); // Stop further execution
                }
                else
                while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
                    echo "Song Name:{$row['song_name']} <br> ".
                       "Added by: {$row['username']} <br> ".
                       "Song ID: {$row['id']} <br> ".
                       "Artist name: {$row['artist_name']} <br> ".
                       "Upload Date: {$row['upload date']} <br> ".
                       "--------------------------------<br>";
                 }
                 echo "Fetched data successfully
              ";


            }
       
   
    
?>  
