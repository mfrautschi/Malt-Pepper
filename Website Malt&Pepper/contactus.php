 <!DOCTYPE html>
 <html lang="en">


 <head>
      <meta charset="UTF-8">
      <title>Contact Us</title>
      <link rel="stylesheet" href="stylesheet.css">
      <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
      <link rel="icon" href="./Logo/logo-round.png" type="image/png" sizes="32x32">
      <style>

  </style>

  </head>

  <body id="body-contactus">

    <header>

      <div id="kontaktformular">

        <div id="kontaktformular-titel">

          <p class="titel-produkt">Kontaktformular</p>
          <p class="inhalt-produkt">Wir sind immer für Dich da...</p>

        </div>

        <form action="./contactus_send.php">

          <ul>

          <li><label for="vorname">Vorname*
              <input id="vorname" type="text" maxlenght="8" required="true"/>
          </label></li>
          <li><label for="nachname">Nachname*
              <input id="nachname" type="text" maxlenght="7" required="true"/>
          </label></li>
          <li><label for="firma">Firma
              <input id="firma" type="text" maxlenght="8"/>
          </label></li>
          <li><label for="strasse">Strasse
              <input id="strasse" type="text" maxlenght="8"/>
          </label></li>
          <li><label for="plz, ort">PLZ, Ort
              <input id="plzort" type="text" maxlenght="8"/>
          </label></li>
          <li><label for="telefon">Telefon*
              <input id="telefon" type="text" maxlenght="8" required="true"/>
          </label></li>
          <li><label for="email">E-Mail*
              <input id="email" type="email" required="true"/>
          </label></li>
          <li><label for="ihre nachricht">Ihre Nachricht*</label>
              <textarea id="ihrenachricht" required></textarea></li>
          <button id="button_send" type="submit" name="action" style="text-decoration: none;">Send</button>
          </ul>
        </form>

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
        <li><a style="color: #C48C2B" href="contactus.php">Contact Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li style="float:right"><a href="mym&p.php">My M&P</a></li>

        </ul>

      </div>

    </nav>


    <footer>

      <div id="footer-contactus">

        <div id="text-contact">

          <p>
            Malt & Pepper AG<br>
            Musterstrasse 1<br>
            CH-4800 Zofingen<br>
            Switzerland<br>
          </p>

        </div>

        <div id="footer-description-contactus">

          <ul>

          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Customer Support</a></li>
          <li><a href="#">Carrers</a></li>
          <li><a href="#">Privacy Policy</a></li>

          </ul>
        </div>

        <div id="footer-icon-contactus">

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

  </body>

  </html>
