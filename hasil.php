<?php 
	$bilangan1 = $_POST["bilangan1"];
	$bilangan2 = $_POST["bilangan2"];

	if ($_POST["tambah"]) {
		$tambah = $bilangan1 + $bilangan2;
		echo "Hasil : ".$tambah;
	}else if ($_POST["kurang"]) {
		$kurang = $bilangan1 - $bilangan2;
		echo "Hasil : ".$kurang;
	}else if ($_POST["kali"]) {
		$kali = $bilangan1 * $bilangan2;
		echo "Hasil : ".$kali;
	}else if ($_POST["bagi"]) {
		$bagi = $bilangan1 / $bilangan2;
		echo "Hasil : ".$bagi;
	}
?>