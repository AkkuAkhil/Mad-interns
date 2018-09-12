<!DOCTYPE html>
<html>
<head>
<title>Mad-interns</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="main.css" >
<style>
    button {
    background-color: #4CAF50;
    width: 100%;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
select{
    width: 100%;
}
form{
    padding-left: 30px;
    padding-right: 30px;
}
</style>
</head>

<body class="w3-content w3-border-left w3-border-right">
<nav class="w3-sidebar w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <strong><u><h1>Mad-interns</h1></u>
    <h5>Find Your</h5>
    <h5>INTERNSHIP</h5></strong>
  </div>
  <div class="w3-bar-block w3-black">
      <a href="index.php" class="w3-bar-item w3-button w3-padding-16 w3-blue"><i class="fa fa-home"></i> Home Page</a>
      <a href="home.php" class="w3-bar-item w3-button w3-padding-16 w3-red"><i class="fa fa-search"></i> Find Your Internship</a>
      <a href="reg.php" class="w3-bar-item w3-button w3-padding-16 w3-blue"><i class="fa fa-registered"></i> Register Your Internship</a>
      
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Mad-interns</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white w3-container new_container" style="margin-left:260px">
    <h2>Fill out the form to Register Your Own Internship</h2><hr>
  <form method="POST" action="server.php" autocomplete="on">
                            <div class="form-group">
                                <label for="User">Your Name</label>
                                <input type="text" class="form-control" id="User" name="User" required autofocus placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="Usermobile">Your Mobile</label>
                                <input type="number" class="form-control" id="Usermobile" name="Usermobile" placeholder="Enter your mobile">
                            </div>
                            <div class="form-group">
                                <label for="Name">Name of Internship</label>
                                <input type="text" class="form-control" id="Name" name="Name" required placeholder="Enter Companys name/internship name">
                            </div>
                            <div class="form-group">
                                <label for="Department">Department</label><br/>
                                <select name="Department" required>
                                    <option value="CSE">CSE</option>
                                    <option value="CE">CE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="BME">BME</option>
                                    <option value="BTE">BTE</option>
                                    <option value="ME">ME</option>
                                    <option value="OTHER">OTHER</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Duration">Duration</label>
                                <input type="Number" class="form-control" id="Duration" name="Duration" min="0" max="120" minlength="1" maxlength="3" required placeholder="Enter the duration of program(no of days)">
                            </div>
                            <div class="form-group">
                                <label for="District">District</label><br/>
                                <select name="District" required>
                                    <option value="THRISSUR">Thrissur</option>
                                    <option value="KOCHI">Kochi</option>
                                    <option value="OTHERS">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input type="Number" class="form-control" id="Price" name="Price" min="0" max="20000" maxlength="6" minlength="1" required placeholder="Enter the amount in INR">
                            </div>
                            <div class="form-group">
                                <label for="Mobile">Company's Mobile</label>
                                <input type="Number" class="form-control" id="Mobile" name="Mobile" maxlength="12" minlength="10" placeholder="Enter Companys Mobile/Contact number">
                            </div>
                            <div class="form-group">
                                <label for="Web">Company's Website</label>
                                <input type="url" class="form-control" id="Web" name="Web" placeholder="Enter companys website/email">
                            </div>
                            <div class="form-group">
                                <label for="Address">Companys Address</label>
                                <textarea class="form-control" id="Address" name="Address" placeholder="Enter Companys address"  style="height:100px"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="About">About</label>
                                <textarea class="form-control" id="About" name="About" placeholder="Enter more about internship" style="height:100px"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        
  <br/>
  </form><h6><center>Powerd by <a href="index.php#aboutme">akku</a></center></h6><br/>
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
  </div><footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="akku.php" title="akku" target="_blank" class="w3-hover-text-green">akku</a></footer>
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
