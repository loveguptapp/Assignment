<?php include("./header.php");
      include("./navbar.php");?>
<!DOCTYPE html>
<html>
<head>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<br>
<h3>
NAME: <?php echo $_POST["name"]; ?><br>
EMAIL: <?php echo $_POST["email"]; ?><br>
<?php echo $_POST["demo"]; ?><br>
</h3>
<?php
$value=$_POST["demo"]; 

if($value=='INDIVIDUAL MALE'){
	
$income=$_POST["income"];
$cded=$_POST["cded"];
$dded=$_POST["dded"];
$other=$_POST["other"];
$house=$_POST["house"];

$income1=($income+$other+$house)-($cded+$dded);
$taxable_income=$income1;

$income2=$income-($cded+$dded);

$band1_top = 250000;
$band2_top = 500000;
$band3_top = 1000000;
//no top of band 4

//the tax rates of each band
$band1_rate = 0.00;
$band2_rate = 0.05;
$band3_rate = 0.010;
$band4_rate = 0.020;
 //set this to your income

$band1 = $band2 = $band3 = $band4 = 0;

if($income1 > $band3_top) {
    $band4 = ($income1 - $band3_top) * $band4_rate;
    $income1 = $band3_top;
}

if($income1 > $band2_top) {
    $band3 = ($income1 - $band2_top) * $band3_rate;
    $income1 = $band2_top;
}

if($income1 > $band1_top) {
    $band2 = ($income1 - $band1_top) * $band2_rate;
    $income1 = $band1_top;
}

$band1 = $income1 * $band1_rate;

$total_tax_paid = $band1 + $band2 + $band3 + $band4;
$cess=($total_tax_paid*4)/100;
$tax_payable=$total_tax_paid+$cess;

}

elseif($value=="INDIVIDUAL FEMALE"){	
$income=$_POST["income"];
$cded=$_POST["cded"];
$dded=$_POST["dded"];
$other=$_POST["other"];
$house=$_POST["house"];

$income1=($income+$other+$house)-($cded+$dded);
$taxable_income=$income1;

$income2=$income+-($cded+$dded);

$band1_top = 250000;
$band2_top = 500000;
$band3_top = 1000000;
//no top of band 4

//the tax rates of each band
$band1_rate = 0.00;
$band2_rate = 0.05;
$band3_rate = 0.010;
$band4_rate = 0.020;
 //set this to your income

$band1 = $band2 = $band3 = $band4 = 0;

if($income1 > $band3_top) {
    $band4 = ($income1 - $band3_top) * $band4_rate;
    $income1 = $band3_top;
}

if($income1 > $band2_top) {
    $band3 = ($income1 - $band2_top) * $band3_rate;
    $income1 = $band2_top;
}

if($income1 > $band1_top) {
    $band2 = ($income1 - $band1_top) * $band2_rate;
    $income1 = $band1_top;
}

$band1 = $income1 * $band1_rate;

$total_tax_paid = $band1 + $band2 + $band3 + $band4;
$cess=($total_tax_paid*4)/100;
$tax_payable=$total_tax_paid+$cess;


}

elseif($value=="SENIOR CETIZEN"){
	
$income=$_POST["income"];
$cded=$_POST["cded"];
$dded=$_POST["dded"];
$other=$_POST["other"];
$house=$_POST["house"];

$income1=($income+$other+$house)-($cded+$dded);
$taxable_income=$income1;

$income2=$income+-($cded+$dded);

$band1_top = 300000;
$band2_top = 500000;
$band3_top = 1000000;
//no top of band 4

//the tax rates of each band
$band1_rate = 0.00;
$band2_rate = 0.05;
$band3_rate = 0.010;
$band4_rate = 0.020;
 //set this to your income

$band1 = $band2 = $band3 = $band4 = 0;

if($income1 > $band3_top) {
    $band4 = ($income1 - $band3_top) * $band4_rate;
    $income1 = $band3_top;
}

if($income1 > $band2_top) {
    $band3 = ($income1 - $band2_top) * $band3_rate;
    $income1 = $band2_top;
}

if($income1 > $band1_top) {
    $band2 = ($income1 - $band1_top) * $band2_rate;
    $income1 = $band1_top;
}

$band1 = $income1 * $band1_rate;

$total_tax_paid = $band1 + $band2 + $band3 + $band4;
$cess=($total_tax_paid*4)/100;
$tax_payable=$total_tax_paid+$cess;

}

elseif($value=="SUPER SENIOR CETIZEN"){
	
$income=$_POST["income"];
$cded=$_POST["cded"];
$dded=$_POST["dded"];
$other=$_POST["other"];
$house=$_POST["house"];

$income1=($income+$other+$house)-($cded+$dded);
$taxable_income=$income1;

$income2=$income+-($cded+$dded);

$band1_top = 500000;
$band2_top = 1000000;
$band3_top = 2000000;
//no top of band 4

//the tax rates of each band
$band1_rate = 0.00;
$band2_rate = 0.05;
$band3_rate = 0.010;
$band4_rate = 0.020;
 //set this to your income

$band1 = $band2 = $band3 = $band4 = 0;

if($income1 > $band3_top) {
    $band4 = ($income1 - $band3_top) * $band4_rate;
    $income1 = $band3_top;
}

if($income1 > $band2_top) {
    $band3 = ($income1 - $band2_top) * $band3_rate;
    $income1 = $band2_top;
}

if($income1 > $band1_top) {
    $band2 = ($income1 - $band1_top) * $band2_rate;
    $income1 = $band1_top;
}

$band1 = $income1 * $band1_rate;

$total_tax_paid = $band1 + $band2 + $band3 + $band4;
$cess=($total_tax_paid*4)/100;
$tax_payable=$total_tax_paid+$cess;


}
?>   

<table>
  <tr>
    <th>__________Calculated Tax__________ </th>
  </tr>
  <tr>
    <td><?php echo "TAXABLE INCOME: $taxable_income rs."; ?></td>
  </tr>
  <tr>
    <td><?php echo "Tax: $total_tax_paid rs."; ?></td>
  </tr>
  <tr>
    <td><?php echo "cess(4%): $cess  rs. \n"; ?></td>
  </tr>
  <tr>
    <td><?php echo "TAX PAYABLE: $tax_payable rs.\n"; ?></td>
  </tr>
</table>
<blockquote class="twitter-tweet" tw-align-center><p lang="en" dir="ltr">Target Achieved ! <br>all stocks are down by 2-4% <a href="https://t.co/CnYUE0aVZS">pic.twitter.com/CnYUE0aVZS</a></p>&mdash; The Market Tech (@TMarketTech) <a href="https://twitter.com/TMarketTech/status/1321711526655397888?ref_src=twsrc%5Etfw">October 29, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php include("./footer.php"); ?>
</body>

</html>