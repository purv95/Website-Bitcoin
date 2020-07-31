<?php
$toEmail = "purvam@outlook.com";
$mailHeaders = "From: " . $_POST["firstName"] . "<". $_POST["lastName"] .">\r\n";
if(mail($toEmail, $_POST["message"], $_POST["email"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
