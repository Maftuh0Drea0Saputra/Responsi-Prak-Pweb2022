<link rel="stylesheet" href="style.css">
<div class="background">
        <center><h2>:---- FillExE ----:</h2></center>
		<center><h4>(RIWAYAT TRANSAKSI)</h4></center>
    <div class="box" >
<?php   
echo "<head> <title> FillExe </title> </head>";
	$fp = fopen("Fillexe.txt", "r");
	echo "<table border=0>";

	while ($isi = fgets($fp, 80)) {
		$pisah = explode("|", $isi);
		echo "<tr> <td> Bahan Bakar </td><td>:	$pisah[0]</td></tr>";
        echo "<tr> <td> Biaya       </td><td>:	$pisah[1]</td></tr>";
		echo "<tr> <td> Tanggal 	</td><td>:	$pisah[2]</td></tr> 
		<tr> 
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>";
	}

	echo "</table>";
?>
    </div>
</div>

<div class="box">
    <label class="tombol"><ion-icon name="receipt-outline"></ion-icon><a href="index.html"> Lakukan Transaksi </a></label>
</div>