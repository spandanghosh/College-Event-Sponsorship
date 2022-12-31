<?php include('logmenu2.php');?>
<!DOCTYPE html>
<style>

table {
                border-collapse: collapse;
            }
            th {
                background-color:green;
                Color:white;
            }
            th, td {
                width:150px;
                text-align:center;
                border:1px solid black;
                padding:5px;
                height:70px;
             
            }
            /* .geeks {
                border-right:hidden;
            } */
            /* .gfg {
                border-collapse:separate;
                border-spacing:0 15px;
            } */
tr:hover {background-color: coral;}
/* td {
    padding-top: .5em;
    padding-bottom: .5em;
} */


tr:nth-child(even) {background-color: #f2f2f2;}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php
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

$sql = "SELECT * FROM  event ";
$result = $conn->query($sql);
// <div style="overflow-x: auto;">
echo "<table border='1'>";
echo "<tr>
      <td>S.No </td>
      <td>Eventname </td>
      <td>Club name </td>
      <td>Position </td>
      <td>Contact numbers </td>
      <td>Email </td>
      <td>Domain </td>
      <td>Description </td>
      <td>Experience </td>
      <td>Reason </td>
      
      </tr>";
if ($result->num_rows > 0) {
  
  // output data of each row
  $i=0;
  while($row = $result->fetch_assoc()) {
    $i=$i+1;
    if($result->num_rows > 0){
    echo "<table border='1'>";
    echo "<tr>
					<td>".$i."</td>
                    <td>".$row["evename"]."</td>
                    <td>".$row["clname"]."</td>
                    <td>".$row["pos"]."</td>
                    <td>".$row["phoneno"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["domain"]."</td>
                    <td>".$row["description"]."</td>
                    <td>".$row["exp"]."</td>
                    <td>".$row["reason"]."</td>
                    
                    
				  </tr>";
    // echo "<tr>
    // <td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["evename"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["clname"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["pos"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["phoneno"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["email"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["domain"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["description"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["exp"]}</td><td style="border:1px solid black;Font-size:18;Font-Weight:bold">{$row["reason"]}</td></tr>";
     echo "</table>";
    } 

    else {
  echo "0 results";
}}
$conn->close();}
?>
<!----- featured hospitals ----->
<div class="categories">
       <div class="small-container">
       <h2 class="title">Successfull events</h2>
            <div class="row">
            <div class="col-3">
                <img src="images/event1.jpg" width="420 px">
                <h4>Ranbo college event sponsored by copma</h4>
            </div>
            <div class="col-3">
                <img src="images/event 2.jpg" width="425px">
                <h4>Kaves college event sponsored by caphat</h4>
            </div>
            <div class="col-2">
                <img src="images/event3.jpg" width="425px">
                <h4>Sindhu college event sponsored by tefl</h4>
            </div>
            <div class="col-3">
                <img src="images/event4.jpeg" width="425px">
                <h4>Atreus college event sponsored by randon</h4>
            </div>
        </div>
       </div>
       
    </div>   

</body>
</html>
<?php include('logfooter.php');?>