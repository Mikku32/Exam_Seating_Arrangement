<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/";

        // Create the "uploads" directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // Redirect to the display page with the filename as a query parameter
            header("Location: display.php?filename=" . basename($_FILES["file"]["name"]));
            exit();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staffpagestyle.css">
    <title>Upload Picture Page</title>
</head>
<body>

    <div class="container">
        <h1>Welcome <?php echo "$_SESSION[username]"; ?> </h1>
        <h3>Upload Seating arrangement  </h3>

        <div class="upload-container">
            
            <form class="upload-form" action="staffPage.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="upload-input" accept="image/*">
                <button type="submit" id="upload-button">Upload</button>
            </form>

            <div class="uploaded-image" id="uploaded-image"></div>
        </div>
    </div>

</body>
</html>
