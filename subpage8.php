<!DOCTYPE html>
<html lang="en">

<head>
    <title>DrDgwithPp</title>
    <meta charset="utf-8">
    <meta name="description" content="Blockchain blog by 230501">
    <meta name="keywords" content="Web design blog, Blockchain blog, bitcoin">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
        body {
            font-family: 'Titillium Web', sans-serif;
        }

        * {
            text-align: center;
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
        <h1 style="color: azure; text-decoration: underline">Drag&Drop with Popup</h1>
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
        <table class="table table-bordered">
            <tr>
                <th><b>#</b></th>
                <th><u>Name</u></th>
                <th><u>Description</u></th>
            </tr>
            <tbody class="row_position">
                <?php
            require('db_config.php');
            $sql = "SELECT * FROM sorting_items ORDER BY position_order";
            $users = $mysqli->query($sql);
            while($user = $users->fetch_assoc()){
        ?>
                <tr id="<?php echo $user['id'] ?>">
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['title'] ?></td>
                    <td><?php echo $user['description'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<br>
<hr>
<footer id="main-footer">
    <p>Copyright &copy; 2019, My Webpage</p>
</footer>
</body>
<script type="text/javascript">
    $(".row_position").sortable({
        delay: 150,
        stop: function () {
            var selectedData = new Array();
            $('.row_position>tr').each(function () {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
            $(".row_position").change(function () {
                alert('Handler for .change() called.');
            });
        }
    });


    function updateOrder(data) {
        $.ajax({
            url: "ajaxPro.php",
            type: 'post',
            data: {
                position: data
            },
            success: function () {
                alert('Change successfully saved');
            }
        })
    }
</script>

</html>