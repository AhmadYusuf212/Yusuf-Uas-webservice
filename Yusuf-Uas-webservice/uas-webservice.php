<?php
	$sumber = 'http://papaside.com/data.php';
	$konten = file_get_contents($sumber);
	$data = json_decode($konten, true);

	echo "<h1 align = 'center'>Cuaca Hari Ini</h1>";
?>
<!DOCTYPE html>
<html>
<head>
	<title >JSON Data Object - javascript</title>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			width: 100%;
		}
		table tr td {
			padding: 1rem;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th>kota</th>
			<th>siang</th>
			<th>malam</th>
			<th>dini_hari</th>
			<th>suhu</th>
			<th>kelembapan</th>
		</tr>
		<?php
		for ($a=0; $a < count($data) ; $a++) { 
			print "<tr>";
			print "<td>".$a."<td>";
			print "<td>".$data[$a]['kota']."</td>";
			print "<td>".$data[$a]['siang']."</td>";	
			print "<td>".$data[$a]['malam']."</td>";	
			print "<td>".$data[$a]['dini_hari']."</td>";	
			print "<td>".$data[$a]['suhu']."</td>";	
			print "<td>".$data[$a]['kelembapan']."</td>";	

			}
		?>
	</table>

</body>
</html>