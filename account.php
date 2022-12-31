<?php
$insert=false;
if(isset($_POST["username"])){
  $server = "localhost:3307"; 
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  //$cred=$_POST['cred_no'];
  $sql="INSERT INTO `Sponsorship`.`student` (`username`, `password`,`name`,`email`,`phone`,`address`) VALUES ('$username', '$password','$name','$email','$phone','$address');";
  $subject = "Confirmation of creation of account";
  $body = "Hi! This is from the care4all team, you have successfully registered";
  $headers = "From: sender email";
  
  if($username!=NULL)
  {
  if($con->query($sql) == true){
    echo "Successfully registered";
    // Flag for successful insertion
    
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
}
else{
    echo"Enter the required details";
}
// Close the database connection
$con->close();
}
?>

<?php include('partials/login.php');?>
<?php include('partials/menu.php');?>

<!------account-page------>
<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/handshake.jpg" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                    <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator"> 
                        </div>
                        <form method="POST" action='loggedin/logindex.php' id="LoginForm">
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" class="btn">Login</button>
                        </form>
                        
                        <form  method="POST" action="account.php" id="RegForm">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <input type="text" name="name" id="name" placeholder="name" required>
                            <input type="email" name="email" id="email" placeholder="Email" required> 
                            <input type="number" name="phone" id="phone" placeholder="Phone no." required>
                            <input type="text" name="address" id="address" placeholder="address" required>
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
 <!-----js for toggle form---->
   <script>
    var LoginForm = document.getElementById("LoginForm");
       var RegForm = document.getElementById("RegForm");
       var Indiacator = document.getElementById("Indicator");
       function register(){
           RegForm.style.transform = "translateX(0px)";
           LoginForm.style.transform = "translateX(0px)";
           Indiacator.style.transform = "translateX(100px)";
           
       }
       function login(){
           RegForm.style.transform = "translateX(300px)";
           LoginForm.style.transform = "translateX(300px)";
           Indiacator.style.transform = "translateX(0px)";
           
       }
    </script>
    
    <?php include('partials/footer.php');?>
