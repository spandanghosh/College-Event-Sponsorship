<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php include('logmenu2.php');?>
<?php
session_start();

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "Sponsorship";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$d=$_POST["Search"];
$sql = "SELECT * FROM  event where domain='$d'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i = 0;
 
  while($row = $result->fetch_assoc()) {

    $na = $row['name'];
    $email = $row['email'];
    $cl=$row['clname'];
    print ("
    <div class='small-container cart-pag'>
    <div class='cart-info'>
    <form method='POST' action='sponsor.php' id='$i'>
    <small>$na</small>
    <small>$cl</small>
    <small>$email</small>
    <hr><hr><hr>

    <input type='hidden' id='custna' name='custna' value='$na'>
    <td><button type='submit' class='button' stlye = 'align:center' onsubmit = '/sponsor.php'>Sponsor</button></td>
    <td></td>
    </form>
    </div>
    </div>
    ");
$i++;
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<?php include('logfooter.php');?>
</body>
</html>