<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<h3>Output Registrasi</h3>
<hr>
<table>
<?php
echo "<tr><td>Nama Depan<td>: ".$_POST["depan"];
echo "<tr><td>Nama Belakang<td>: ".$_POST["belakang"];
echo "<tr><td>Linkedin<td>: ".$_POST["linkedin"];
echo "<tr><td>E-Mail<td>: ".$_POST["email"];
echo "<tr><td>Jenis Kelamin<td>: ".$_POST["kelamin"];
echo "<tr><td>Jenis Training<td>:".$_POST["training"];
echo "<tr><td>Keterangan<td>: ".$_POST["keterangan"];
?>
</table>
</body>
</html>	