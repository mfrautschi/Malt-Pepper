 <!DOCTYPE html>
 <html lang="en">


 <head>
      <meta charset="UTF-8">
      <title>Gallery</title>
      <link rel="stylesheet" href="stylesheet.css">
      <link rel="stylesheet" href="lightbox/lightbox.css"/>
      <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
      <link rel="icon" href="./Logo/logo-round.png" type="image/png" sizes="32x32">
      <style>

  </style>

  </head>


  <body id="body-contactus">
    <?php
    session_start();
    ?>
    <header>

      <div id="gallery-bilder" href="lightbox/lightbox.css">

        <p>
        <div> <a href="img/pepper_bild1.jpg" data-lightbox="image-1"
          data-title="Pfeffer Sieb">
          <img src="./img/pepper_bild1.jpg" alt="barrel1" /></a>
        </div>

        <div> <a href="img/pepper_bild2.jpg" data-lightbox="image-1"
          data-title="Pfeffer in Schalen">
          <img src="./img/pepper_bild2.jpg" alt="barrel2" /></a>
        </div>

        <div> <a href="img/pepper_bild3.jpg" data-lightbox="image-1"
          data-title="Pfeffer drei Farben">
          <img src="./img/pepper_bild3.jpg" alt="barrel3" /></a>
        </div>

        <div> <a href="img/pepper_bild4.jpg" data-lightbox="image-1"
          data-title="Pfeffer auf Löffel">
          <img src="./img/pepper_bild4.jpg" alt="barrel3" /></a>
        </div>
        </p>

        <p>
        <div> <a href="img/whiskey_bild1.jpg" data-lightbox="image-1"
          data-title="Whiskeyglas 1">
          <img src="./img/whiskey_bild1.jpg" alt="barrel4" /></a>
        </div>

        <div> <a href="img/whiskey_bild2.jpg" data-lightbox="image-1"
          data-title="Whiskeyglas 1">
          <img src="./img/whiskey_bild2.jpg" alt="barrel5" /></a>
        </div>

        <div> <a href="img/whiskey_bild3.jpg" data-lightbox="image-1"
          data-title="Whiskey 'old man'">
          <img src="./img/whiskey_bild3.jpg" alt="barrel6" /></a>
        </div>

        <div> <a href="img/whiskey_bild4.jpg" data-lightbox="image-1"
          data-title="Whiskey Fässer">
          <img src="./img/whiskey_bild4.jpg" alt="barrel6" /></a>
        </div>
        </p>

        <div id="div-member">
          <p id="titel-member">Memberbereich</p>
          <p id="text-member">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam labore et dolore aliquyam erat.</p>
          <br>
          <p style="font-weight: 600;">Leider bist du nicht eingeloggt...</p>
          <a href="mym&p_member.php" id="button-member">Login</a>

        </div>


      </div>


    </header>
    <nav id="nav-website">
      <div id="home-icon-website">
        <a href="home.php">
        <img src="./Logo/logo-white-schnitt.png"/>
        </a>
      </div>
      <div id="nav-description-website">

        <ul>

        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a style="color: #C48C2B" href="gallery.php">Gallery</a></li>
        <li style="float:right"><a href="mym&p.php">My M&P</a></li>

        </ul>

      </div>

    </nav>


    <footer>

      <div id="footer-gallery">


        <div id="footer-description-gallery">

          <ul>

          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Customer Support</a></li>
          <li><a href="#">Carrers</a></li>
          <li><a href="#">Privacy Policy</a></li>

          </ul>
        </div>

        <div id="footer-icon-gallery">

          <ul>

            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>


          </ul>
        </div>

      </div>


    </footer>
    <script src="lightbox/lightbox-plus-jquery.js"></script>

  </body>

  </html>
