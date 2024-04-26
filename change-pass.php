<?php      
    include('./connection.php');  // Assuming this file contains your database connection setup

    // Assuming 'connection.php' contains a variable $con which is your mysqli connection object

    $username = $_POST['user'];  
    $old_password = $_POST['old-pass'];  
    $new_password=$_POST['new-pass'];  
    
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $old_password = stripcslashes($old_password);  
    $new_password = stripcslashes($new_password);  

    $username = mysqli_real_escape_string($con,$username);  
    $old_password = mysqli_real_escape_string($con,$old_password);  
    $new_password = mysqli_real_escape_string($con,$new_password);  

     
    
    $sql = "select *from login where username = '$username' and password = '$old_password'";  
    
    $result = mysqli_query($con, $sql);  
    
    // Check for errors
    if (!$result) {
        // Print the error message
        echo "Error: " . mysqli_error($con);
        exit(); // Stop further execution
    }
    
    $count = mysqli_num_rows($result);  
    
    if($count >= 1){  
        $sql="update login set username = '$username',password = '$new_password' where username = '$username' and password = '$old_password' ";
        $result = mysqli_query($con, $sql);  
        if (!$result) {
            // Print the error message
            echo "Error: " . mysqli_error($con);
            exit(); // Stop further execution
        }
        echo "Successfully changed password for '$username'"; 
        
        
    }  
    else{  
        echo "<h1>Authentication failed. Invalid username or password.</h1>"; 
         

    }     
?>  
