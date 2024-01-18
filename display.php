<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displaystyle.css">
    <title>Display Picture Page</title>
</head>
<body>

    <?php
    if (isset($_GET["filename"])) {
        $filename = "uploads/" . $_GET["filename"];
        echo "<img src='$filename' alt='Uploaded Image'>";
    } else {
        echo "No image file specified.";
    }
    ?>

</body>
</html>
