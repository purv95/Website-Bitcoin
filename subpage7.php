<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn+$tn+$frn+$ftn;
		break;
		
		case '-':
		$res=$fn-$sn-$tn-$frn-$ftn;
		break;
		
		case '*':
		$res=$fn*$sn*$tn*$frn*$ftn;
		break;
		
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">    

<head>
    <title>Calculator</title>
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

        h1,
        h3 {
            text-decoration: underline dotted;
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
        <h1 style="color: azure; text-decoration: underline">Calculator</h1>
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

        <form method="post">
            <table align="center">
                <tr>
                    <th>Your Result</th>
                    <th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>" />
                    </th>
                </tr>

                <tr>
                    <th>Enter your First num</th>
                    <th><input type="number" name="fn" value="<?php  echo @$fn;?>" /></th>
                </tr>
                <tr>
                    <th>Enter your Second num</th>
                    <th><input type="number" name="sn" value="<?php  echo @$sn;?>" /></th>
                </tr>
                <tr>
                    <th>Enter your Thrid num</th>
                    <th><input type="number" name="tn" value="<?php  echo @$tn;?>" /></th>
                </tr>
                <tr>
                    <th>Enter your Fourth num</th>
                    <th><input type="number" name="frn" value="<?php  echo @$frn;?>" /></th>
                </tr>
                <tr>
                    <th>Enter your Fifth num</th>
                    <th><input type="number" name="ftn" value="<?php  echo @$ftn;?>" /></th>
                </tr>
                <tr>
                    <th>Select Your Choice</th>
                    <th>
                        <select name="ch">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                        </select>
                    </th>
                </tr>
                <tr>

                    <th colspan="2">
                        <input type="submit" name="save" value="Show Result" />
                    </th>
                </tr>
            </table>
        </form>

        <br>
        <hr>
        <footer id="main-footer">
            <p>Copyright &copy; 2019, My Webpage</p>
        </footer>
</body>

</html>