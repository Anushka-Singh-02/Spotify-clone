<?php      
    include('./connection.php');  // Assuming this file contains your database connection setup

    // Assuming 'connection.php' contains a variable $con which is your mysqli connection object

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    
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
        $sql="delete from login where username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);  
        if (!$result) {
            // Print the error message
            echo "Error: " . mysqli_error($con);
            exit(); // Stop further execution
        }
        echo "Successfully deleted user '$username'"; 
        
        
    }  
    else{  
        echo "<h1>Authentication failed. Invalid username or password.</h1>"; 
         

    }     
?>  
