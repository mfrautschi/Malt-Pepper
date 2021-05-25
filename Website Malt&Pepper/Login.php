 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Login</title>

 </head>

 <body>
   <?php
   session_start();
   $username = $_POST["username"];
   $password = $_POST["password"];
   if ($username == "Andy" && $password == "1234"){
     $_SESSION["username"] = $username;
     header("Location: gallery_logout.php");
   } else {
     header("Location: mym&p.php");
   }
   ?>

 </body>

 </html>
