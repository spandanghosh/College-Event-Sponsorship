<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting events</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<!---<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">--->
</head>
<body>
  <div class="header">
   <div class="container">
       <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/sponsor.png" width="125px" ></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="beds.php">Our location</a></li>
                <!---<li><a href="">About</a></li>
                <li><a href="">Contact</a></li>---->
                <li><a href="account.php">Login/register for event holder</a></li>
                <li><a href="complogin.php">Login/register for sponsors</a></li>
            </ul>
        </nav>
           <a href="donate.php">companies that work with us</a>
    </div> 
    <div class="row">
        <div class="col-2">
            <h1>Making finding sponsorships easy and on time</h1>
            
            <a href="learnmore.php" class="btn">Learn more &#8594;</a>
        </div>
        <div class="col-3">
            <img src="images/handshake.jpg">
        </div>
    </div>
   </div>
 </div>
 
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

    
    
   
<?php include('partials/footer.php');?> 
    
</body>
</html>