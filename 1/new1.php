<html>
	<head>
		<title> File Terima Data </title>
	</head>
	<body>
	<?php
		$_POST["nama"]."</H2><br/>";
		$_POST["umur"]."tahun.";
	?>
		<center> <h1> Data yang di input adalah : </h1></center>
		<br>
		<br>
		<table border="1" width="400">
			<tr>
				<td> Nama </td>
				<td> Budi Setiawan </td>
			</tr>
			<tr>
				<td> Umur </td>
				<td> 21 tahun </td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
			</tr>
		</table>
	</body>
</html>
<?php
	echo"<H2> SELAMAT DATANG".	$_POST["nama"]."</H2><br/>";
	echo" Usia Anda".$_POST["umur"]."tahun.";
?>
