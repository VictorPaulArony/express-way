<!DOCTYPE html>
<html lang="en">
<head>
<title>TOLLGATE EXPRESSWAY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
button{
  border: 2px solid;
  border-radius: 7px;
  margin: 5px 0;
  outline: none;
}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-orange w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>TOLLGATE<br>CUSTOMER<br>CENTER</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#users" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">users</a> 
    <a href="#payment packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment packages</a> 
    <a href="#contact us" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact us</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-orange w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
  <span>TOLLGATE CUSTOMER CENTER</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Customer Center Dashboard</b></h1>
    <h1 class="w3-xxxlarge w3-text-orange"><b>Showcase.</b></h1>
    <hr style="width:50px;border:5px solid rgb(255, 208, 0)" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="image/image3.jpg" style="width:100%" onclick="onClick(this)" alt="tollgate">
      <img src="image/image2.jpg" style="width:100%" onclick="onClick(this)" alt="tollgate">
      <img src="image/image4.jpg" style="width:100%" onclick="onClick(this)" alt="tollgate">
    </div>

    <div class="w3-half">
      <img src="image/image6.jpg" style="width:100%" onclick="onClick(this)" alt="tollgate">
      <img src="image/image5.jpg" style="width:100%" onclick="onClick(this)" alt="tollgate">
      <img src="image/image1.jpg" style="width:100%" onclick="onClick(this)" alt="tollgate">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-orange"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">
    <p>Tollgate management system is a website based system that enabled the admin 
      to partake the analysis of the  Tollgate users and to take into account the 
      number of cars and their registration numbers as they enter/ pass through the 
      tollgate plaza.</p>
  </div>
  
  <!-- users -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-orange"><b>Management .</b></h1>
    <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">
    <p>The best team in the world.</p>
    <p>
    </p>
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="image/smally1.jpg" alt="Paul" style="width:100%">
        <div class="w3-container">
          <h3>smally pauls</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="image/smally2.jpg" alt="Victor" style="width:100%">
        <div class="w3-container">
          <h3>victor paul</h3>
          <p class="w3-opacity">users</p>
          <p></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="image/smally3.jpg" alt="Arony" style="width:100%">
        <div class="w3-container">
          <h3>Victor Arony</h3>
          <p class="w3-opacity">Architect</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <!-- payment Packages / Pricing Tables -->
  <div class="w3-container" id="payment packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-orange"><b>Payment Packages.</b></h1>
    <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">
    <p>choose the prefered mode of payment bellow</p>
</div>
<div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-light-grey w3-center" style="border-radius: 10px;">
            <h3 class="w3-dark-grey w3-xlarge w3-padding-32">MORTORS</h3>
            <li><button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">daily payment @50</a></button></li>
            <li> <button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">weekly payment@400</a></button></li>
            <li> <button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">monthly payment@1000</a></button></li>
        </ul>
    </div>
        <div class="w3-half w3-margin-bottom">
            <ul class="w3-ul w3-light-grey w3-center" style="border-radius: 10px;">
                <h3 class="w3-green w3-xlarge w3-padding-32">SMALL CARS</h3>
                <div class="w3-light-grey w3-padding-24">
                    <li> <button class="w3-button w3-green w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">daily payment @100</a></button></li>
                    <li><button class="w3-button w3-green w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">weekly payment @800</a></button></li>
                    <li><button class="w3-button w3-green w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">monthly payment @2500</a></button></li>
                </div>
            </ul>
        </div>
        <div class="w3-half w3-margin-bottom">
            <ul class="w3-ul w3-light-grey w3-center" style="border-radius: 10px;">
                <h3 class="w3-blue w3-xlarge w3-padding-32">TRUCKS</h3>
                <div>
                    <li> <button class="w3-button w3-blue  w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">daily payment @150</a></button></li>
                    <li><button class="w3-button w3-blue  w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">weekly payment @1600</a></button></li>
                    <li> <button class="w3-button w3-blue  w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">monthly payment @3000</a></button></li>
                </div>
            </ul>
        </div>
        <div class="w3-half w3-margin-bottom " >
            <ul class="w3-ul w3-light-grey w3-center"  style="border-radius: 10px;">
                <h3 class="w3-red w3-xlarge w3-padding-32 ">PASSANGER VEHICLE</h3>
                <div>
                    <li> <button class="w3-button w3-red w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">daily payment @200</a></button></li>
                    <li> <button class="w3-button w3-red w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">weekly payment @1500</a></button></li>
                    <li> <button class="w3-button w3-red w3-padding-16 w3-hover-black" type="submit"><a href="payment.php">monthly payment @4500</a></button></li>
                </div>
            </ul>
        </div>
</div>
  
  <!-- Contact us -->
  <div class="w3-container" id="contact_us" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-orange"><b>Contact us.</b></h1>
    <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-orange w3-margin-bottom">Send Message</button>
    </form>  
  </div>
</div>
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="" title="SmallyPauls" target="_blank" class="w3-hover-opacity">SmallyPauls</a></p></div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
//gallary
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
