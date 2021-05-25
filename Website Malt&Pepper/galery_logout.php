 <!DOCTYPE html>
 <html lang="en">


 <head>
      <meta charset="UTF-8">
      <title>TITLE</title>
      <link rel="stylesheet" href="stylesheet.css">
      <link rel="stylesheet" href="lightbox/lightbox.css"/>
      <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
      <link rel="icon" href="./Logo/logo-round.png" type="image/png" sizes="32x32">
      <style>

  </style>

  </head>

  <?php
  error_reporting(0);

  $target_dir = "./uploaded/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Bild, Kein Bild check
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          //echo "Datei ist ein Bild - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "Datei ist kein Bild.";
          $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }
  ?>


  <body id="body-contactus">

    <header>
      <nav id="nav-website">
        <div id="home-icon-website">
          <a href="home_logout.php">
          <img src="./Logo/logo-white-schnitt.png"/>
          </a>
        </div>
        <div id="nav-description-website">

          <ul>

          <li><a href="aboutus_logout.php">About Us</a></li>
          <li><a href="products_logout.php">Products</a></li>
          <li><a href="contactus_logout.php">Contact Us</a></li>
          <li><a style="color: #C48C2B" href="galery_logout.php">Galery</a></li>
          <li style="float:right"><a href="Logout.php">Logout</a></li>

          </ul>

        </div>

      </nav>


    </header>


    <div id="contentgalery">
      <div id="galery">
      <div id="galery-bilder" href="lightbox/lightbox.css">

        <p>
        <div> <a href="img/pepper_bild1.jpg" data-lightbox="image-1"
          data-title="Pfeffer Sieb">
          <img src="./img/pepper_bild1.jpg" alt="barrel1" /></a>
        </div>

        <div> <a href="img/pepper_bild2.jpg" data-lightbox="image-1"
          data-title="Pfeffer in Schalen">
          <img src="./img/pepper_bild2.jpg" alt="barrel2" /></a>
        </div>

        <div> <a href="./img/pepper_bild3.jpg" data-lightbox="image-1"
          data-title="Pfeffer drei Farben">
          <img src="./img/pepper_bild3.jpg" alt="barrel3" /></a>
        </div>

        <div> <a href="./img/pepper_bild4.jpg" data-lightbox="image-1"
          data-title="Pfeffer auf Löffel">
          <img src="./img/pepper_bild4.jpg" alt="barrel3" /></a>
        </div>
        </p>

        <p>
        <div> <a href="./img/whiskey_bild1.jpg" data-lightbox="image-1"
          data-title="Whiskeyglas 1">
          <img src="./img/whiskey_bild1.jpg" alt="barrel4" /></a>
        </div>

        <div> <a href="./img/whiskey_bild2.jpg" data-lightbox="image-1"
          data-title="Whiskeyglas 1">
          <img src="./img/whiskey_bild2.jpg" alt="barrel5" /></a>
        </div>

        <div> <a href="./img/whiskey_bild3.jpg" data-lightbox="image-1"
          data-title="Whiskey 'old man'">
          <img src="./img/whiskey_bild3.jpg" alt="barrel6" /></a>
        </div>

        <div> <a href="./img/whiskey_bild4.jpg" data-lightbox="image-1"
          data-title="Whiskey Fässer">
          <img src="./img/whiskey_bild4.jpg" alt="barrel6" /></a>
        </div>
        </p>

        <?php
        $count = 0;
        foreach(glob($target_dir.'/*.*') as $file) {
          if($count >= 4){
            print_r('<br>');
            $count = 0;
          }

          $filename = substr($file, strrpos($file, "/")+1);

          print_r('
          <div class="gallery-item">
           <a href="' . $file . '" data-lightbox="image-1" data-title="' . $filename . '">
            <img src="' . $file . '" alt="' . $filename . '" /></a>
          </div>'
          );
          $count = $count + 1;
        }
      ?>
      </div>
    </div>


        <div id="div-member">
          <p id="titel-member">Memberbereich</p>
          <p id="text-member">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam labore et dolore aliquyam erat.</p>
          <br>

          <form style="font-size: 17px; color: #3D3D3D;" action="galery_logout.php" method="post" enctype="multipart/form-data">

          Wähle ein Bild zum Upload:
        <div>
      </div>
      <div class="container">
        <div class="row">

            <input class="col-3 btn btn-primary inputbtn" type="file" name="fileToUpload" id="fileToUpload">
            <input class="col-3 btn btn-primary inputbtn" type="submit" value="Upload Image" name="submit">
          </div>
            </div>
        </div>

      </div>
      </form>

        </div>


      </div>


    <footer>

      <div id="footer-galery-logout">


        <div id="footer-description-galery-logout">

          <ul>

          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Customer Support</a></li>
          <li><a href="#">Carrers</a></li>
          <li><a href="#">Privacy Policy</a></li>

          </ul>
        </div>

        <div id="footer-icon-galery-logout">

          <ul>

          <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
          <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>

          </ul>
        </div>

      </div>


    </footer>
    <script src="lightbox/lightbox-plus-jquery.js"></script>

  </body>

  </html>
