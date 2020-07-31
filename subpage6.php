<!DOCTYPE html>
<html lang="en">

<head>
    <title>FormVal SS</title>
    <meta charset="utf-8">
    <meta name="description" content="Blockchain blog by 230501">
    <meta name="keywords" content="Web design blog, Blockchain blog, bitcoin">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Titillium Web', sans-serif;
        }
        * {
            text-align: center;
        }
        h1,h3 {
            text-decoration: underline dotted;
        }
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
            <source src="bckvd2.mp4" type="video/mp4">
        </video>
    </div>
    <header id="main-header">
        <h1 style="color: azure; text-decoration: underline">Feedback 2.0</h1>
    </header>
    <div>
        <div class="dropdown">
            <button class="dropbtn"><a href="index.html"><img src="images/home.png" class="img-thumbnail"></a></button>
            <div class="dropdown-content">
                <a href="subpage1.html">Blockchain</a>
                <a href="subpage2.html">How it all works?</a>
                <a href="subpage3.html">Download Bitcoin Whitepaper</a>
                <a href="subpage4.html">Feedback</a>
            </div>
        </div>
        <div class="topnav">
            <a class="active" href="index.html">Bitcoin</a>
            <a href="subpage1.html">Blockchain</a>
            <a href="subpage2.html">How it works?</a>
            <div class="topnav-right">
                <a href="subpage3.html">Download Bitcoin Whitepaper</a>
                <a href="subpage4.html">Feedback</a>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h2><u>Form Validation Server Side</u></h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
                value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
                value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>
                value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <?php
         echo "<h2><u>Your Input:</u></h2>";
         echo $name;
         echo "<br>";
         echo $email;
         echo "<br>";
         echo $comment;
         echo "<br>";
         echo $gender;
        ?>
        <br>
        <hr>
        <footer id="main-footer">
            <p>Copyright &copy; 2019, My Webpage</p>
        </footer>
</body>

</html>