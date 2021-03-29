<html>
<kepala>
	<title> Pemrograman PHP dengan Array </title>
</head>
<body> 
	// perintah php
	<? php  
	// Penulisan array dapat dibuat seperti berikut
	// membuat variabel $ nama dengan array menyimpan string Suci
	$ nama [] = "Suci" ; 
	// membuat variabel $ nama dengan array yang menyimpan string Nur
	$ nama [] = "Nur" ; 
	// membuat variabel $ nama dengan array yang menyimpan string Alima
	$ nama [] = "Alima" ; 
	// menampilkan teks nilai variabel nama indeks ke 1, variabel nilai nama indeks ke 2, nilai variabel nama indeks ke 0
	echo  $ nama [ 1 ]. $ nama [ 2 ]. $ nama [ 0 ]; 
	// menampikkan ganti baris
	echo  "<br>" ; 
	// membuat variabel jum_array yang menyimpan nilai hitung variabel nama
	$ jum_array = hitung ( $nama ); 
	// menampilkan teks jumlah elemen array = nilai variabel jum_array
	echo  "jumlah elemen array =" . $jum_array ; 
	?>
</ body >
</ html >