<!DOCTYPE html>
<html lang="en">

<head>
  <title>Feedback</title>
  <meta charset="utf-8">
  <meta name="description" content="Feedback">
  <meta name="keywords" content="Web design blog, Blockchain blog, bitcoin, Feedback">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#datepicker").datepicker();
    });
  </script>
  <style>
    .datepick {
      text-align: center;
    }
  </style>

<body>
  <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
      <source src="bckvd2.mp4" type="video/mp4">
    </video>
  </div>
  <header>
    <h1>Feedback :</h1>
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
    <hr>
    <form action="process.php" method="POST" class="text-center">
      <div class="container">
        <div>
          <label><strong><u>
                <h5>First Name</h5>
              </u></strong></label><br>
          <input type="text" name="firstName" placeholder="Enter First Name" class="roundbox1" required="">
        </div>
        <br>
        <div>
          <label><strong><u>
                <h5>Last Name</h5>
              </u></strong></label><br>
          <input type="text" name="lastName" placeholder="Enter Last Time" class="roundbox1" required="">
        </div>
        <br>
        <div>
          <label><strong><u>
                <h5>Email</h5>
              </u></strong></label><br>
          <input type="email" name="email" placeholder="Enter email" class="roundbox1" required="">
        </div>
        <br>
        <div>
          <label><strong><u>
                <h5>Thoughts</h5>
              </u></strong></label><br>
          <textarea name="message" class="roundbox3"></textarea>
        </div>
        <br>
      </div>
      <div>
        <input type="checkbox" name="ChkBxPol" id="checkme">
        <label>I have read and agree to the Terms and Conditions.</label>
      </div>
      <br>
      <input type="submit" name="submit" value="Submit" id="sendNew" />
      <input type="reset" name="reset" value="Reset">
    </form>
    <hr>
    <div class="container" style="text-align: center">
      <form enctype="multipart/form-data" action="upload.php" method="POST">
        <h5><u>Upload your photo</u></h5>
        <input type="file" name="uploaded_file"></input>
        <input type="submit" value="Upload"></input>
        <hr>
        <div class="datepick">
          <u><h6>Date</h6></u>
          <input type="text" id="datepicker" class="roundbox1">
        </div>
      </form>
    </div>
    <br>
    <footer id="main-footer">
      <p>Copyright &copy; 2019, My Webpage</p>
    </footer>
</body>

</html>