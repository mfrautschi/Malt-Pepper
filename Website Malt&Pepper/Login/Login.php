 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <meta name="description" content="DESCRIPTION">

 </head>

 <body>
   <?php
    session_start();
      $username = $_POST["username"];
      $password = $_POST["password"];
      if($username == "Roger" && $password == "12345") {
        $_SESSION["username"] = $username;
        header("Location: Geheim.php");
      } else {
        echo "Falscher Username oder Passwort";
      }


    ?>
 </body>

 </html>
