<?php include('logmenu.php');?>
 
<div class="small-container" >
           <h1>Enter the required details</h1>
       <br>
       <div class="eve" >
           
        <form name="app" action = "logindex.php" method="post" enctype="multipart/form-data">
        <h3>Personal details</h3>
        <label for="name" >Enter the name of the event</label><br>
        <input type="text" id="name" name="name" ><br>
        <label for="clname">Enter the club hosting the event</label><br>
        <input type="text" id="clname" name="clname"><br>
        <label for="pos">Enter your position in the club</label><br>
        <input type="text" id="pos" name="pos"><br>
        <label for="num">Enter your phone number</label><br>
        <input id="no" name="phoneno"><br>
		<label for="email">Enter your email</label><br>
        <input type="text" id="email" name="email"><br>


        <h3>Event details</h3>
        <label for="evename">Enter the event name</label><br>
        <input type="text" id="evename" name="evename"><br>
        <label for="domain">Enter the domains the event would come under eg:machine learning, web dev etc.</label><br>
        <input type="text" id="domain" name="domain"><br>
        <label for="description">Give a short description of the event</label><br>
        <input type="text" id="description" name="description"><br>
        
        <h3>Work experience</h3>
        <label for="exp">The club's past experience in successfully hosting a similar event</label><br>
        <input type="text" id="exp" name="exp"><br>
        <label for="reason">Why your club should get the sponsorship</label><br>
        <input type="text" id="reason" name="reason"><br>
        
        

        <input type="submit" value = "submit" >
    <style>
        body{
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 100% }
    </style>
    </form>
       
       
   </div>
</div>
    
   <?php include('logfooter.php');?>   

<?php
   $insert=false;
if(isset($_POST["name"])){
  $server = "localhost:3306"; 
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $name = $_POST['name'];
  $clname=$_POST['clname'];
  $pos = $_POST['pos'];
  $phoneno = $_POST['phoneno'];
  $email = $_POST['email'];
  $evename = $_POST['evename'];
  $domain=$_POST['domain'];
  $description=$_POST['description'];
  $exp=$_POST['exp'];
  $reason=$_POST['reason'];

  //$cred=$_POST['cred_no'];
  $sql="INSERT INTO `Sponsorship`.`event` (`name`, `clname`,`pos`,`phoneno`,`email`,`evename`,`domain`,`description`,`exp`,`reason`) VALUES ('$name', '$clname','$pos','$phoneno','$email','$evename','$domain','$description','$exp','$reason');";
  $subject = "Confirmation of creation of account";
  $body = "Hi! This is from the care4all team, you have successfully registered";
  $headers = "From: sender email";
  
  if($name!=NULL)
  {
  if($con->query($sql) == true){
    echo "Successfully registered";
    // Flag for successful insertion
    header("Location: loggedin/logindex.php");
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