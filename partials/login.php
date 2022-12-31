<?php

if(isset($_POST["username"])){
    $server = "localhost:3307";
    $username = "root";
    $password = "";
    $db="Sponsorship";
    //connecting
    $con = mysqli_connect($server, $username, $password,$db);
    if(!$con){
        die("connection failed due to".mysqli_connect_error());
    }
     
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    
    $sql = "select * from student where username='$username' and password='$password'limit 1";
    $result = mysqli_query($con, $sql); 
    if($con->query($sql) == true){
        //echo "Successfully connected";
        // Flag for successful insertion
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
    if(mysqli_num_rows($result)== 1)
    {  
        
        header("Location: loggedin/logindex.php");
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else
    {  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }
          
    $con->close();
}

?>