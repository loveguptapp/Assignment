
<?php include("./header.php"); 
      include("./navbar.php"); ?>
<h3>DOWNLOAD ITR FORM HERE</h3>
<html>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<table "id"=t01>
  <tr>
    <th>FORM NAME </th>
    <th>Assesment Year</th> 
    <th>Dwnload link</th>
  </tr>
  <tr>
    <td>ITR-1 form</td>
    <td>18-19</td>
    <td><a href="./download/itr1.pdf">download</a></td>
  </tr>
   <tr>
    <td>ITR-2 form</td>
    <td>18-19</td>
    <td><a href="./download/itr2.pdf">download</a></td>
  </tr> <tr>
    <td>ITR-3 form</td>
    <td>18-19</td>
    <td><a href="./download/itr3.pdf">download</a></td>
  </tr> <tr>
    <td>ITR-4 form</td>
    <td>18-19</td>
    <td><a href="./download/itr4.pdf">download</a></td>
	 <tr>
    <td>AKNOWLEDGMENT</td>
    <td>18-19</td>
    <td><a href="./download/aknowladgment.pdf">download</a></td>
  </tr>
  </tr>
</table>

</html>




<?php include("./footer.php"); ?>