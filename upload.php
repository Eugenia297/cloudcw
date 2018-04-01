<?php

if(isset($_POST['submit'])){
$file= $_FILES['file'];

$fileName = $_FILES ['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType  = $_FILES['file']['type'];

/*  variable for file ex*/
$fileExt = explode ('.',$fileName);
$fileActualExt= strtolower (end($fileExt));

$allowed = array('pdf','docx','txt');
if (in_array($fileActualExt, $allowed)){
if($fileError ===0){
if ($fileSize <1000000){
$fileNameNew = uniqid('',true). "."
.$fileActualExt;
$fileDestination =  'uploads/'.$fileNameNew;
/*MOVING FILE*/
move_uploaded_file($fileTmpName, $fileDestination);
header ("location:authentication.html?uploadsucess");

}else {
  echo "Your file is too big!";
}
}else {
  echo "Error uploading your file";
}
}else {
  echo "You cannot upload this type of file";
}

}

?>
