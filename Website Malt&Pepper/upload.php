 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>

 </head>

 <body>

   <?php
$target_dir = "../gallery/galleries/gallery/Bottles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Bild, Kein Bild check
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Datei ist ein Bild - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Datei ist kein Bild.";
        $uploadOk = 0;
    }
}


//Nicht umbedingt nötig


// Duplex check
if (file_exists($target_file)) {
    echo "Datei bereits vorhanden.";
    $uploadOk = 0;
}
// Grössencheck
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Datei zu Gross.";
    $uploadOk = 0;
}
// Dateityp
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Nur JPG, JPEG, PNG & GIF Dateien möglich.";
    $uploadOk = 0;
}
// upload = 0kb =error
if ($uploadOk == 0) {
    echo "Nochmals versuchen.";
// hochladen Ok
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Datei wurde hochgeladen.";
    }
}
?>

 </body>

 </html>
