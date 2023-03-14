<!dOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>admin home page</title>
        <link rel="stylesheet" href="style2.css"> 
</head>
<body>
     <nav class="w3-sidebar w3-orange w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <h3 class="w3-padding-64"><b>TOLLGATE<br>MANAGEMENT<br>CENTER</b></h3>
              </div>
        <div class="w3-bar-block">  
        <ul>
            <li><a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> </li>
            <li><a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> </li>
            <li><a href="#payment packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">payment packages</a> </li>
            <li><a href="#contact us" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">contact us</a> </li>
        </ul>
        </div>
    </nav>
    <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
        <span>TOLLGATE MANAGEMENT CENTER</span>
      </header>
      <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:340px;margin-right:40px">
        <div class="w3-container" style="margin-top:80px" id="showcase">
            <h1 class="w3-jumbo"><b>Management Center dashboard</b></h1>
            <h1 class="w3-xxxlarge w3-text-orange"><b>home</b></h1>
            <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">

        </div>
        <div class="w3-half w3-margin-bottom">
            <ul class="w3-ul w3-center">
                <li><button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit"><a href="add.php">Add Vehicle Details</a></button></li>
                 <li> <button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit"><a href="dis.php">Display Vehicle Details</a></button></li>
                 <li> <button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit"><a href="search.php" target="_blank">search Vehicle Details</a></button></li>
            </ul>
        </div>


        <div class="w3-container" id="services" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-orange"><b>Services.</b></h1>
            <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round"
            <p>
                Tollgate management system is a website based system that enabled the admin 
                to partake the analysis of the  Tollgate users and to take into account the 
                number of cars and their registration numbers as they enter/ pass through the 
                tollgate plaza.
            </p>
        </div>
        <div class="w3-container" id="payment packages" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-orange"><b>Payment Packages.</b></h1>
            <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">
            <p>choose the prefered mode of payment bellow</p>
        </div>
        <div class="w3-row-padding">
            <div class="w3-half w3-margin-bottom">
                <ul class="w3-ul w3-light-grey w3-center">
                    <h3 class="w3-dark-grey w3-xlarge w3-padding-32">MORTORS</h3>
                    <li><button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit">daily payment @50</button></li>
                    <li> <button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit">weekly payment@400</button></li>
                    <li> <button class="w3-button w3-white w3-padding-16 w3-hover-black" type="submit">monthly payment@1000</button></li>
                </ul>
            </div>
                <div class="w3-half w3-margin-bottom">
                    <ul class="w3-ul w3-light-grey w3-center">
                        <h3 class="w3-green w3-xlarge w3-padding-32">SMALL CARS</h3>
                        <div class="w3-light-grey w3-padding-24">
                            <li> <button class="w3-button w3-green w3-padding-16 w3-hover-black" type="submit">daily payment @100</button></li>
                            <li><button class="w3-button w3-green w3-padding-16 w3-hover-black" type="submit">weekly payment @800</button></li>
                            <li><button class="w3-button w3-green w3-padding-16 w3-hover-black" type="submit">monthly payment @2500</button></li>
                        </div>
                    </ul>
                </div>
                <div class="w3-half w3-margin-bottom">
                    <ul class="w3-ul w3-light-grey w3-center">
                        <h3 class="w3-blue w3-xlarge w3-padding-32">TRUCKS</h3>
                        <div>
                            <li> <button class="w3-button w3-blue  w3-padding-16 w3-hover-black" type="submit">daily payment @150</button></li>
                            <li><button class="w3-button w3-blue  w3-padding-16 w3-hover-black" type="submit">weekly payment @1600</button></li>
                            <li> <button class="w3-button w3-blue  w3-padding-16 w3-hover-black" type="submit">monthly payment @3000</button></li>
                        </div>
                    </ul>
                </div>
                <div class="w3-half w3-margin-bottom">
                    <ul class="w3-ul w3-light-grey w3-center">
                        <h3 class="w3-red w3-xlarge w3-padding-32">PASSANGER VEHICLE</h3>
                        <div>
                            <li> <button class="w3-button w3-red w3-padding-16 w3-hover-black" type="submit">daily payment @200</button></li>
                            <li> <button class="w3-button w3-red w3-padding-16 w3-hover-black" type="submit">weekly payment @1500</button></li>
                            <li> <button class="w3-button w3-red w3-padding-16 w3-hover-black" type="submit">monthly payment @4500</button></li>
                        </div>
                    </ul>
                </div>
        </div>
        <div class="w3-container" id="contact us" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-orange"><b>Contact us.</b></h1>
            <hr style="width:50px;border:5px solid rgb(248, 172, 8)" class="w3-round">
            <p>do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
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
              <button type="submit" class="w3-button w3-block  w3-red w3-margin-bottom">Send Message</button>
            </form>  
          </div>
    </div>
    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right">Powered by <button type="button" class="btn btn-danger w3-red">
            <a href="" title="SmallyPauls" target="_blank" class="w3-hover-opacity ">SmallyPauls</a></button>
        </p>
    </div>
</body>
</html>