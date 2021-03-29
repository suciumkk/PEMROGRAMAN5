<?php
include 'incdata.php';
if (empty($_POST['nama']) || empty($_POST['email'])){
	// memasukkan karakter nama dan email
} else {
	// menampilkan karakter nama 
	echo "<center>Nama: ".$_POST['nama']."</center><br>";
	// menampilkan karakter email
	echo "<center>Email: ".$_POST['email']."</center><br>";
	// menampilkan karakter hari
	echo "<center>Hari: ".$hari."</center><br>";
	// menampilkan karakter jam
	echo "<center>Jam: ".$jam."</center><br>";
	// menampilkan karakter tanggal login
	echo "<center>Tanggal Login: ".$tanggal."</center><br>";	
}

?>