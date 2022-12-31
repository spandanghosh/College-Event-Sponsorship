<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "Sponsorship"; 

$na = $_POST["custna"];

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// delete from database
$sql = "DELETE FROM event WHERE name='$na';";
if ($conn->query($sql) === TRUE) {
echo "Event sponsored successfully<br>";
} 
else
{
  echo "Error deleting from database: " . $conn->error;
}
echo '<script type="text/javascript">';
echo 'window.location.href = "loggedincomp.php";';
echo '</script>';
exit();
// enter into successfully sponsored database
// $sql = "INSERT INTO successful ('name') VALUES ('$na');";
// if ($conn->query($sql) === TRUE) {
// echo "Event sponsored successfully<br>";
// } 
// else
// {
//   echo "Error deleting from database: " . $conn->error;
// }


?>