
<?php

$insert=false;
if(isset($_POST["blood1"])){
  $server = "localhost"; 
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname'];
  $blood1 = $_POST['blood1'];
  $gender1=$_POST['gender1'];
  $hname="Newlife hospital";
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood1','$gender1','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood2"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname1'];
  $blood2 = $_POST['blood2'];
  $hname="chinook hospital";
  $gender2=$_POST['gender2'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood2','$gender2','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>


<?php

$insert=false;
if(isset($_POST["blood3"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname2'];
  $blood3 = $_POST['blood3'];
  $hname="Care hospital";
  $gender3=$_POST['gender3'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood3','$gender3','$hname');";
  if($con->query($sql)== true){
    echo "Successfully  registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>


<?php

$insert=false;
if(isset($_POST["blood4"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname3'];
  $blood4 = $_POST['blood4'];
  $hname="Remedy plus care";
  $gender4=$_POST['gender4'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood4','$gender4','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood5"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname4'];
  $blood5 = $_POST['blood5'];
  $hname="Florence hospital";
  $gender5=$_POST['gender5'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood5','$gender5','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood6"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname5'];
  $blood6 = $_POST['blood6'];
  $hname="Rejuvenate hospital";
  $gender6=$_POST['gender6'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood6','$gender6','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood7"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname6'];
  $blood7 = $_POST['blood7'];
  $hname="apollo hospital";
  $gender7=$_POST['gender7'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood7','$gender7','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood8"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname7'];
  $blood8 = $_POST['blood8'];
  $hname="fortis hospital";
  $gender8=$_POST['gender8'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood8','$gender8','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood9"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname8'];
  $blood9 = $_POST['blood9'];
  $hname="manipal hospital";
  $gender9=$_POST['gender9'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood9','$gender9','$hname');";
  if($con->query($sql)== true){
    echo "Successfully  registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blood10"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname9'];
  $blood10 = $_POST['blood10'];
  $hname="columbia asia";
  $gender10=$_POST['gender10'];
  $sql="INSERT INTO `careall`.`donors` (`username`,`blood type`,`gender`,`hospital_name`) VALUES ('$usname','$blood10','$gender10','$hname');";
  if($con->query($sql)== true){
    echo "Successfully registered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php include('logmenu.php');?>
   
 <!----cart items details----->
 <div class="small-container cart-page">
         <table>
             <tr>
                 <th>Products</th>
                 <th>Blood type</th>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/newlife.png">
                         <div>
                         <form method="POST" action="" id="RegForm">
                             <p>Newlife hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender1" placeholder="Enter gender">
                             <input type="text" name="usname" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood1"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/chinook.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                             <p>chinook hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender2" placeholder="Enter gender">
                             <input type="text" name="usname1" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood2"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/care.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                             <p>Care hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender3" placeholder="Enter gender">
                             <input type="text" name="usname2" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood3"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/remedy.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                             <p>Remedy plus care</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender4" placeholder="Enter gender">
                             <input type="text" name="usname3" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood4"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/Florence.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                            <p>Florence hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender5" placeholder="Enter gender">
                             <input type="text" name="usname4" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood5"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/Rejuvenate.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                             <p>Rejuvenate hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender6" placeholder="Enter gender">
                             <input type="text" name="usname5" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood6"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/apollo.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                             <p>apollo hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender7" placeholder="Enter gender">
                             <input type="text" name="usname6" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood7"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/fortis.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                            <p>fortis hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender8" placeholder="Enter gender">
                             <input type="text" name="usname7" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood8"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/manipal.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                             <p>manipal hospital</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender9" placeholder="Enter gender">
                             <input type="text" name="usname8" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood9"></td>
                 <td></td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/columbia asia.jpg">
                         <div>
                         <form method="POST" action="" id="OrderForm">
                              <p>columbia asia</p>
                             <small>eg:A-,B+</small>
                             <input type="text" name="gender10" placeholder="Enter gender">
                             <input type="text" name="usname9" placeholder="Enter username for confirmation">
                             <button type="submit" class="btn">Donate</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="text" name="blood10"></td>
                 <td></td>
                 </form>
             </tr>
         </table>
         
         
         
     </div>
      
    
     <?php include('logfooter.php');?>