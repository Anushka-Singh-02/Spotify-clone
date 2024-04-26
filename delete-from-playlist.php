<?php      
    include('./connection.php');  // Assuming this file contains your database connection setup

    // Assuming 'connection.php' contains a variable $con which is your mysqli connection object

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $pname=$_POST['pname'];
    $sname=$_POST['sname'];
    
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $pname = stripcslashes($pname);  
    $sname = stripcslashes($sname);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    $pname = mysqli_real_escape_string($con, $pname); 
    $sname = mysqli_real_escape_string($con, $sname); 
    
    $sql = "select *from login where username = '$username' and password = '$password'";  
    
    $result = mysqli_query($con, $sql);  
    
    // Check for errors
    if (!$result) {
        // Print the error message
        echo "Error: " . mysqli_error($con);
        exit(); // Stop further execution
    }
    
    $count = mysqli_num_rows($result);  
    
    if($count >= 1){  
        $val = mysqli_query($con,"select 1 from `$pname` LIMIT 1");

            if($val == FALSE)
            {
                echo 'Playlist does not exist.';
            }
            else
            {
               $sql="Delete from`$pname`  where username='$username' and song_name='$sname' ";
                $result = mysqli_query($con, $sql);  
                if (!$result) {
                    // Print the error message
                    echo "Error: " . mysqli_error($con);
                    exit(); // Stop further execution
                }
                else
                echo "Successfully deleted from playlist `$pname`";


            }
       
    }  
    else{  
       
        echo 'Invalid credentials.';
         

    }     
?>  
