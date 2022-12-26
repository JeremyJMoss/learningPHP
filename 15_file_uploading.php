<?php

define("ALLOWED_IMAGE_EXTENSIONS", ["jpg", "jpeg", "bmp", "gif", "png"]);

if (isset($_POST["submit"])) {
    if (!empty($_FILES["upload"]["name"])) {

        $file_name = $_FILES["upload"]["name"];
        $file_size = $_FILES["upload"]["size"];
        $file_tmp = $_FILES["upload"]["tmp_name"];
        $target_dir = "uploads/${file_name}";

        $file_ext = explode(".", $file_name)[1];

        /*
        quicker way to check for the existence of a string
        through the use of hash table.
        */
        $flipped_extensions = array_flip(ALLOWED_IMAGE_EXTENSIONS);

        if (!isset($flipped_extensions[$file_ext])) {

            $message = "<p style='color: red'>Uploaded file is not an image</p>";
        } else {

            if ($file_size <= 1000000) {

                move_uploaded_file($file_tmp, $target_dir);

                $message = "<p style='color: green'>File uploaded</p>";
            } else {

                $message = "<p style='color: red'>File size is too large</p>";
            }
        }
    } else {
        $message = "<p style='color: red'>No file was selected</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        <p>Select Image to Upload:</p>
        <input type="file" name="upload">
        <input type="submit" name="submit" value="Upload">
        <?php echo $message ?? null; ?>
    </form>
</body>

</html>
