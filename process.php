<?php session_start();

//creating connection to database
$con=mysqli_connect("localhost","root","","lab7") or die(mysqli_error());

//check whether submit button is pressed or not
if((isset($_POST['submit'])))
{

  //fetching and storing the form data in variables
  $firstName = $con->real_escape_string($_POST['firstName']);
  $lastName = $con->real_escape_string($_POST['lastName']);
  $email = $con->real_escape_string($_POST['email']);
  $message = $con->real_escape_string($_POST['message']);
       
  //query to insert the variable data into the database
  $sql="INSERT INTO account (firstName, lastName, email, message) VALUES ('".$firstName."','".$lastName."', '".$email."', '".$message."')";

//session 
if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'])) {
    session_start();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName']; 
    $email = $_POST['email'];
    
    // store session data
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email'] = $email;
    }

//Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $con->error . ']');
}
else

header("Location:http://localhost/webdesign4/subpage5.php");

$to = "email@example.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$subject = "Form submission";
$message = $firstName . " " . $lastName . " wrote the following:" . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
mail($from,$headers2); // sends a copy of the message to the sender
eheader("Location:http://localhost/webdesign4/subpage5.php");

}
?>