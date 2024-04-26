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
    echo $username;
    echo $password;
    $result = mysqli_query($con, $sql);  
    
    // Check for errors
    if (!$result) {
        // Print the error message
        echo "Error: " . mysqli_error($con);
        exit(); // Stop further execution
    }
    
    $count = mysqli_num_rows($result);  
    
    if($count >= 1){  
        echo '<script>alert("User already registered! Redirecting in 1 second")</script>';  
        sleep(1); //makes the system wait for 1 sec 
        header("Location:index.html");
    }  
    else{  
        $sql="insert into login(username,password) values('$username','$password')";
        $result = mysqli_query($con, $sql);  
        if (!$result) {
            // Print the error message
            echo "Error: " . mysqli_error($con);
            exit(); // Stop further execution
        }
        echo '<script>alert("User successfully registered! Redirecting in 3 seconds");</script>'; 
        sleep(3);
        header("Location:index.html");
         

    }     
?>  
