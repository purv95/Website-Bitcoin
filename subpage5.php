<!DOCTYPE html>
<html lang="en">

<head>
    <title>FormSession Thankyou</title>
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
            color: skyblue;
        }
        h1,h3 {
            text-decoration: underline dotted;
        }
        h4 {
            text-decoration: underline dotted;
            color: red;
        }
    </style>
</head>

<body>
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
            <source src="bckvd2.mp4" type="video/mp4">
        </video>
    </div>
    <header id="main-header">
        <h1 style="color: azure; text-decoration: underline">Feedback:</h1>
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
        <h3>Thank You!</h3>
        <br>
        <div style="color: darkblue">
            <?php session_start();
            echo "<h4>Your Info:</h4>";
            echo "<u>Your Name</u>: ";
            echo $_SESSION['firstName'];
            echo "<br>";
            echo "<u>Your Surname</u>: ";
            echo $_SESSION['lastName'];
            echo "<br>";
            echo "<u>Your Email</u>: ";
            echo $_SESSION['email'];
            ?>
        </div>
        <br>
        <hr>
        <footer id="main-footer">
            <p>Copyright &copy; 2019, My Webpage</p>
        </footer>
</body>

</html>