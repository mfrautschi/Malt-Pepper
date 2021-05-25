 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Logout</title>


 </head>

 <body>
   <?php
   //session_start();
   session_destroy();
   header('Location: website.php');
   exit;
   ?>

 </body>

 </html>
