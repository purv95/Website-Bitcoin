<?php
$message = '';
if(!empty($_FILES['uploaded_file'])) {
  $path = 'uploads/';
  $path = $path . uniqid('u', true) . '-' . basename($_FILES['uploaded_file']['name']);
  if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
    echo "File has been uploaded!";
  } else {
    $message = 'There was an error uploading the file, please try again!';
   echo $message .= $_FILES['uploaded_file']['error'];
  }
}
?>