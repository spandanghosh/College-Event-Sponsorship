

<?php
$insert=false;
if(isset($_POST["btype"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $btype = $_POST['btype'];
  $amnt = $_POST['amnt'];
  $hid = $_POST['hid'];
  $susname=$_POST['susname'];
  $sql="INSERT INTO `careall`.`request` (`request_id`,`blood_type`, `amount`,`hospital_id`,`s_username`) VALUES (NULL,'$btype', '$amnt','$hid','$susname');";
  if($btype!=NULL)
  {
  if($con->query($sql) == true){
    echo "Successfully entered";
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

<?php include('reqmenu.php');?>

<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="/blood bank/images/centre.jpg" width="125%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="register()">request</span>
                           
                        </div>                        
                         <form method="POST" action="" id="RegForm">
                            <input type="text" name="btype" id="btype" placeholder="Blood type" required>
                            <input type="text" name="amnt" id="amnt" placeholder="amount(in litres)" required>
                            <input type="number" name="hid" id="hid" placeholder="hospital id" required>
                            <input type="text" name="susname" id="susname" placeholder="username" required> 
                            <button type="submit" class="btn">Enter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   





<?php include('reqfooter.php');?>