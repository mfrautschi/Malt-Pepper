 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Logout</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

 </head>

 <body>
<?php
  session_start();
  session_destroy();
 ?>
 </body>

 </html>
