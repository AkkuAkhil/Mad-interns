<?php
    $select_query1 = "SELECT * FROM `main`";
    $con = mysqli_connect("localhost", "root", "akku", "madinterns") or die(mysqli_error($con));
    $department='ALL';
    if($_POST){
        $department = mysqli_real_escape_string($con,$_POST['Department']);
        if($department == 'ALL'){
            $select_query1 = "SELECT * FROM `main`";
        }
        elseif ($department=='CSE') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='CSE'";
        }
        elseif ($department=='CE') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='CE'";
        }
        elseif ($department=='ME') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='ME'";
        }
        elseif ($department=='EEE') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='EEE'";
        }
        elseif ($department=='ECE') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='ECE'";
        }
        elseif ($department=='BTE') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='BTE'";
        }
        elseif ($department=='BME') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='BME'";
        }
        elseif ($department=='OTHER') {
            $select_query1 = "SELECT * FROM `main` WHERE Department='OTHER'";
        }
        $select_query_result = mysqli_query($con, $select_query1) or die(mysqli_error($con));
    }
    $select_query_result = mysqli_query($con, $select_query1) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<title>Mad-interns</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="main.css" >
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}
#hrbottom{
    color: #f00;
    background-color: #f00;
    height: 8px;
}
</style>

<body class="w3-content w3-border-left w3-border-right">
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <strong><u><h1>Mad-Interns</h1></u>
    <h5>Find Your</h5>
    <h5>INTERNSHIP</h5></strong>
    <form action="home.php" method="POST" autocomplete="on" class="w3-blue">
      <div class="formonhome">  
          <p><center><label class="inlabel"><br/><i class="fa fa-building"></i> Department</label></center></p>
      <center><select name="Department" required>
        <option value="ALL">ALL</option>
        <option value="CSE">CSE</option>
        <option value="CE">CE</option>
        <option value="EEE">EEE</option>
        <option value="ECE">ECE</option>
        <option value="BME">BME</option>
        <option value="BTE">BTE</option>
        <option value="ME">ME</option>
        <option value="OTHER">OTHER</option>
      </select></center>
      </div>
      <!--<p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>         
      <p><label><i class="fa fa-male"></i> Adults</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">              
      <p><label><i class="fa fa-child"></i> Kids</label></p>
      <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">-->
        <p><center><button class="w3-button w3-block w3-red " type="submit" value=”find_submit”><i class="fa fa-search w3-margin-right"></i>Click to Find</button><br/></center></p>
    </form>
  </div>
  <div class="w3-bar-block"><center>
      <a href="reg.php" class="w3-bar-item w3-button w3-padding-16 w3-blue"><i class="fa fa-registered"></i> Register Your Internship</a>
      <a href="home.php" class="w3-bar-item w3-button w3-padding-16 w3-red"><i class="fa fa-search"></i> Find Your Internship</a>
      <a href="index.php" class="w3-bar-item w3-button w3-padding-16 w3-blue"><i class="fa fa-home"></i> Home Page</a>
      </center></div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">
<?php while ($row = mysqli_fetch_array($select_query_result)) { ?>

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <h2 class="w3-text-green"><?php echo $row['Name']; ?></h2>
  </div>

  <div class="w3-container">
    <h4><strong>Department : <?php echo $row['Department']; ?></strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s3">
        <p><i class="fa fa-calendar-times-o"></i> Duration : </p>
        <p><i class="fa fa-money"></i> Price: </p>
      </div>
      <div class="w3-col s9">
        <p> <?php echo $row['Duration']; ?> days</p>
        <p> <?php echo $row['Price']; ?> .inr</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Company Details</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s3">
        <p><i class="fa fa-phone"></i> Mobile : </p>
        <p><i class="fa fa-link"></i> Web : </p>
        <p><i class="fa fa-address-card-o"></i> Address : </p>
      </div>
      <div class="w3-col s9">
        <p> <?php echo $row['Mobile']; ?></p>
        <p> <?php echo $row['Web']; ?></p>
        <p> <?php echo $row['Address']; ?></p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Extra Info</strong></h4>
    <p><?php echo $row['About']; ?></p>
    <hr>
   </div>
  <hr>
  
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <i class="fa fa-user-o" style="width:30px"></i> <?php echo $row['User']; ?><br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: <?php echo $row['Usermobile']; ?><br>
  </div>
  
  <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="akku.php" title="akku" target="_blank" class="w3-hover-text-green">akku</a></footer>
  <hr id="hrbottom">
<!-- End page content -->
<?php } ?>
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
