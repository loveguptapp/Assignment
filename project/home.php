<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
	.column {
  float: left;
  width: 50%;
  padding: 5px;
  height: 5px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<body>
<div class=row>
<div class=column><blockquote class="twitter-tweet" tw-align-center><p lang="en" dir="ltr">Watch out for keynote address by RBI Governor <a href="https://twitter.com/DasShaktikanta?ref_src=twsrc%5Etfw">@DasShaktikanta</a> in the 185th Foundation Day Celebration of Bombay Chamber of Commerce and Industry at 11:00 am on February 25, 2021.<br><br>Watch it live at: <a href="https://t.co/tZOAgG2UtW">https://t.co/tZOAgG2UtW</a><br><br> <a href="https://twitter.com/hashtag/rbigovernor?src=hash&amp;ref_src=twsrc%5Etfw">#rbigovernor</a> <a href="https://twitter.com/hashtag/rbitoday?src=hash&amp;ref_src=twsrc%5Etfw">#rbitoday</a></p>&mdash; ReserveBankOfIndia (@RBI) <a href="https://twitter.com/RBI/status/1364471950697848833?ref_src=twsrc%5Etfw">February 24, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class=column>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Bank at Your Fingertips.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form action="customer_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                    </div>

                    <div class="flex-item">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

</div>
</body>
</html>

<?php include "easter_egg.php"; 
      include "footer.php"; ?>