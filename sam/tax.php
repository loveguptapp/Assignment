<html>
<?php include("include/header.php"); ?>
<style> 
input[type=button], input[type=submit], input[type=reset] {
    
    border: none;
	border-radius: 25px;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	background-color: white;
   
}
input[type=text],input[type=number],select {
    width: 50%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

.modal-content {
    background-color:#FCF3CF;
    margin: 3% auto 5% auto;
    border: 1px solid #888;
    width:80%; 
}
</style>
<body>
<center>


<form  class= modal-content action="welcome.php" method="post">
<h2>CALCULATE YOUR TAX HERE</h2>
<h4>NAME:<br> <input type="text" name="name" required><br>
EMAIL:<br> <input type="text" name="email" required><br><br>
<select name="demo">
      <option value="INDIVIDUAL MALE">INDIVIDUAL MALE</option>
	  <option value="INDIVIDUAL FEMALE">INDIVIDUAL FEMALE</option>
	  <option value="SENIOR CETIZEN">SENIOR CETIZEN</option>
	  <option value="SUPER SENIOR CETIZEN">SUPER SENIOR CETIZEN</option>
</select><br><br>	  
INCOME:<br><input type="number"  name="income" required><br>
Deduction 80C:<br><input type="number"  name="cded" placeholder="upto 1.5 lakh"><br>
Deduction 80D:<br><input type="number"  name="dded" placeholder="upto 60000"><br>
Income from House:<br><input type="number"  name="house"><br>
Income from other:<br><input type="number"  name="other"><br><br>
</h4>

<input type="submit" style= "border: 2px solid #4CAF50";> <input type="reset" style="border: 2px solid red";>
</form></center>


</body>
</html>
<?php include("include/footer.php"); ?>