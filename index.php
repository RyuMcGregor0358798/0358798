<!DOCTYPE html>
<html lang="en">

<head>
  <title>4_2GAL</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="25231.png">
  <script src="jquery-min.js"></script>
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
      margin-bottom: 12px
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
      width: 120px;
      background: #222;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {
      margin-left: 120px
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
      #main {
        margin-left: 0;
      }
    }
  </style>
</head>

<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="PORTUGAL.jpg" style="width:100%">
    <a href="#Home" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#About" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#Photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#Contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#Home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#About" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="#Photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
      <a href="#Contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="Home">
      <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Jimuel L. Portugal.</h1>
      <p>Web Developer.</p>
      <img src="PORTUGAL.jpg" alt="boy" class="w3-image" width="992" height="1108">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="About">
      <h2 class="w3-text-light-grey">Jimuel L. Portugal</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>I'm Jimuel Portugal, an 18-year-old senior high school student at Camarines Sur National High School. I am still studying programming languages. My hobbies include coding, playing online games with my friends, and watching anime.</p>
      <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
      <p class="w3-wide">Web Dev</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:90%"></div>
      </div>
      <p class="w3-wide">Database</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:60%"></div>
      </div><br>

      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">1</span><br>
          Partner/s
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">3</span><br>
          Projects Done
        </div>
      </div>

      <table>
        <tr>
          <th><h3 class="w3-padding-24 w3-text-light-grey">My Partner/s</h3></th>
        </tr>
        <tr>
          <td>
<p><i class="fa solid fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
          <a href="https://penggwyn.github.io" target="_blank">Gwynard Andaya.</a></p
          </td>
        </tr>
        <tr></tr>
      </table>

      <div>
                 

      <!-- <img src="https://www.w3schools.com/w3images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right"
        style="width:80px">
      <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
      <p>No one is better than John Doe.</p> -->

      <!-- <button class="w3-button w3-light-grey w3-padding-large w3-section">
          <i class="fa fa-download"></i> Download Resume
        </button> -->

      <!-- Grid for pricing tables -->
      <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
            <li class="w3-padding-16">HTML</li>
            <li class="w3-padding-16">CSS</li>
            <li class="w3-padding-16">JAVASCRIPT(JQuery)</li>
            <li class="w3-padding-16">
              <h2>100-500</h2>
              <span class="w3-opacity">per project</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="#Contact">Sign Up</a></button>
            </li>
          </ul>
        </div>

        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">Web Dev</li>
            <li class="w3-padding-16">Web Game</li>
            <li class="w3-padding-16">Database</li>
            <li class="w3-padding-16">
              <h2>1000-3000</h2>
              <span class="w3-opacity">per project</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="#Contact">Sign Up</a></button>
            </li>
          </ul>
        </div>
        <!-- End Grid/Pricing tables -->
      </div>

      <!-- Testimonials -->
      <!-- <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>
        <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar"
          class="w3-left w3-circle w3-margin-right" style="width:80px">
        <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
        <p>John Doe saved us from a web disaster.</p><br> -->

      <!-- End About Section -->
    </div>

    <!-- Portfolio Section -->
    <div class="w3-padding-64 w3-content" id="Photos">
      <h2 class="w3-text-light-grey">My Photos</h2>
      <hr style="width:200px" class="w3-opacity">

      <!-- Grid for photos -->
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <img src="IMG.jpg" style="width:80%">
          <img src="img1.jpg" style="width:80%">
          <img src="img2.jpg" style="width:80%">
        </div>

        <div class="w3-half">
          <img src="img6.jpg" style="width:80%">
          <img src="img5.png" style="width:80%">
          <img src="img4.jpg" style="width:80%">
          <!-- <img src="img3.jpg" style="width:80%"> -->
          <!-- <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
            <img src="https://www.w3schools.com/w3images/p6.jpg" style="width:100%"> -->
        </div>
        <!-- End photo grid -->
      </div>
      <!-- End Portfolio Section -->
    </div>

    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="Contact">
      <h2 class="w3-text-light-grey">Contact Me</h2>
      <hr style="width:200px" class="w3-opacity">

      <div class="w3-section">
        <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Barobay-bay Magarao, Camarines
          Sur</p>
        <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 09956414957</p>
        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email:
          <a href="https://mail.google.com" target="_blank">anonymous0358798@gmail.com</a>
        <p><i class="fa brands fa-facebook fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Facebook:
          <a href="https://www.facebook.com/profile.php?id=100075721774306" target="_blank"> Jimuel
            Portugal</a>
        </p>
        <p><i class="fa brands fa-instagram fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Instagram:
          <a href="https://www.instagram.com/jimuel_42gal?igsh=anc1ZXEwcmdrd2Vm" target="_blank">taji_sparrow</a>
        </p></div><br>
        <p><a href="UPDATE.php">Let's get in touch. Send me a message:</a></p>

        <!-- <div>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
        <button class="w3-button w3-light-grey w3-padding-large" href="https://mail.google.com">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </div> -->
        <!-- End Contact Section -->
      </div>
      </div>
      </div>

      <!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
      <!-- <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-small">This website was made with W3schools Spaces. Make your own free website today!</p>
        <a class="w3-button w3-round-xxlarge w3-small w3-light-grey" href="https://www.w3schools.com/spaces"
          target="_blank">Start now</a> -->
      <!-- End footer -->
      <!-- END PAGE CONTENT -->
</body>
</html>
