
<?php

if(isset($_POST["uname"])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="Sponsorship";
    //connecting
    $con = mysqli_connect($server, $username, $password,$db);
    if(!$con){
        die("connection failed due to".mysqli_connect_error());
    }
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
   
    $sql = "select * from company where uname='$uname' and pwd='$pwd' limit 1";
    $result = mysqli_query($con, $sql);
    if($con->query($sql) == true)
    {
        //echo "Successfully connected";
        // Flag for successful insertion
    }
    else
    {
        echo "ERROR: $sql <br> $con->error";
    }  
      
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      
    if(mysqli_num_rows($result) == 1)
    {  
        header("Location: loggedin/loggedincomp.php");
        echo "<h1><center> Login successful </center></h1>";
          
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }      
    $con->close();
}

?>
<?php include('partials/menu.php');?>

<!------account-page------>
<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="images/handshake.jpg" width="100%">
                </div>
                <div class="col-3">
                        <h3>Enter the username and password you have recieved</h3>
                        <form method="POST" action="" id="LoginForm">
                            <input type="text" name="uname" placeholder="Username" required>
                            <input type="password" name="pwd" placeholder="Password" required>
                            <button type="submit" class="btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   

<?php include('partials/footer.php');?>