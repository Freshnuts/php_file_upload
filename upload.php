
<?php

// NOT SAFE for public use. Just use as examples.

// Create 2 variables:
// 1. Upload Directory.
// 2. Introduce path prefix to "test.txt"; "/uploads/test.txt"
// 3. $temp - saves the temporary file name.
// ============================================================

$path = "uploads/";
$uploadfile = $path.basename($_FILES['file']['name']);
$temp = $_FILES['file']['tmp_name'];


// Debug Information
// =================

echo "File Statistics<br>=========<br>";
echo "Name: ".$_FILES['file']['name']."<br>";
echo "Size: ".$_FILES['file']['size']."<br>";
echo "Type: ".$_FILES['file']['type']."<br>";
echo "Temp: ".$_FILES['file']['tmp_name']."<br>";


// Check file upload status.
// =========================
if (move_uploaded_file($temp, $uploadfile)) {
    echo "The file has been uploaded";
} else {
    echo "There was an error uploading the file, please try again!";
}

?>

