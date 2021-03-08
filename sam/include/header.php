<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: courier;
    padding: 10px;
    background: #f1f1f1;
}

.header {
    padding: 5px;
	color:white;
	background-color:#333;
    
	
}

.header h1 {
    font-size: 40px;
}

.topnav {
    overflow: hidden;
    background-color: black;
}

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.leftcolumn {   
    float: left;
    width: 75%;
}
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}



@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="header">
  <a href= "index.php"><h1><IMG SRC="logo.jpg" ALT="some text" WIDTH=80 HEIGHT=80></a>FINANCIAL HELPER </h1>
  <p align="right">Grow your money with US </p>
</div>

<div class="topnav">
  <a href="index.php">HOME</a>
  <a href= "tax.php">CALCULATE TAX</a>
  <a href="download.php">DOWNLOAD</a> 
  <a href="about.php">ABOUT</a>
  <a href="contact.php">CONTACT</a>
  <a href="tax.php" style="float:right">sign up </a>
</div>

