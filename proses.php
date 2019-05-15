<!DOCTYPE html>
<html>
<head>
	<title>Metode Bagi Dua</title>
</head>
<body>
<center><b>METODE BAGI DUA</b><br>Klompok A</center>
<hr size="2" color="#0000CC">
Bentuk Fungsinya = <b>f(x) = x^3+4x^2-11x-30 </b>
<br>

<?php
$a = $_POST['awal'];
$b = $_POST['akhir'];
$error = $_POST['error'];
echo "Nilai Toleransi = <b>".$error."</b><br><br>";
function fungsi ($x){
	$hasil = ($x*$x*$x)+4*($x*$x)-11*$x-30;
	return $hasil;
}

echo "<table border='1' align='center'>
		<tr>
			<td>No</td>
			<td>A</td>
			<td>B</td>
			<td>C</td>
			<td>f(A)</td>
			<td>f(B)</td>
			<td>f(C)</td>
			<td>Selang A</td>
			<td>Selang B</td>
			<td>Lebar Selnag</td>
			<td>Lanjut / Berhenti</td>
		</tr>";

$no = 1;
$lebarSelang = $error;
while (abs($lebarSelang) >= $error){
	$fungsiA = fungsi($a);
	$fungsiB = fungsi($b);
	// if ($fungsiA * $fungsiB < 0) {
		$c = ($a+$b)/2;
		$fungsiC = fungsi($c);
	// }

	echo "	<tr>
				<td>$no</td>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$fungsiA</td>
				<td>$fungsiB</td>
				<td>$fungsiC</td>";

	if ($fungsiC * $fungsiA < 0) {
		$b = $c;
	} else {
		$a = $c;
	}
	$lebarSelang = $b-$a;
	if ($lebarSelang > $error) {
		$iterasi = "Lanjur";
	} else {
		$iterasi = "Berhenti";
	}

	echo "		<td>$a</td>
				<td>$b</td>
				<td>$lebarSelang</td>
				<td>$iterasi</td>
			</tr>";
	$no++;
}
echo "</table>";
echo "<br>Maka Nilai hampiran akar = ".$fungsiC."<br>";
echo "Pada X = ".$c."<br>";
echo "Pada iterasi ke ".($no-1);
?>
<br>
<a href="bagidua.php"><center>Kembali</center></a>
</body>
</html>