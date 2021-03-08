<?php include("include/header.php");?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<br>
NAME: <?php echo $_POST["name"]; ?><br>
EMAIL: <?php echo $_POST["email"]; ?><br>
<?php echo $_POST["demo"]; ?><br>
 
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

echo "TAXABLE INCOME: $taxable_income";echo"<br>";
echo "Tax: $total_tax_paid";echo"<br>";
echo "cess(4%): $cess\n";echo"<br>";
echo "TAX PAYABLE: $tax_payable\n";echo"<br>";
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

echo "TAXABLE INCOME: $taxable_income";echo"<br>";
echo "Tax: $total_tax_paid";echo"<br>";
echo "cess(4%): $cess\n";echo"<br>";
echo "TAX PAYABLE: $tax_payable\n";echo"<br>";
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

echo "TAXABLE INCOME: $taxable_income";echo"<br>";
echo "Tax: $total_tax_paid";echo"<br>";
echo "cess(4%): $cess\n";echo"<br>";
echo "TAX PAYABLE: $tax_payable\n";echo"<br>";
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

echo "TAXABLE INCOME: $taxable_income";echo"<br>";
echo "Tax: $total_tax_paid";echo"<br>";
echo "cess(4%): $cess\n";echo"<br>";
echo "TAX PAYABLE: $tax_payable\n";echo"<br>";
}
?>   

<?php include("include/footer.php"); ?>
</body>
</html>