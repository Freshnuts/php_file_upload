
<?php

// Create 2 variables:
// 1 is the location of file upload
// 2. Save the filename with "uploads/" as prefix; "/uploads/test.txt"
// ===================================================================

$path = "uploads/";
$uploadfile = $path.basename($_FILES['file']['name']);


// Debug Information
// =================

echo "File Statistics<br>=========<br>";
echo "Name: ".$_FILES['file']['name']."<br>";
echo "Size: ".$_FILES['file']['size']."<br>";
echo "Type: ".$_FILES['file']['type']."<br>";
echo "Temp: ".$_FILES['file']['tmp_name']."<br>";


$temp = $_FILES['file']['tmp_name'];
//if (move_uploaded_file($tmp, $path)) {
//   echo "The file has been uploaded";
//} else {
//   echo "There was an error uploading the file, please try again!";

move_uploaded_file($temp, $uploadfile);

?>

