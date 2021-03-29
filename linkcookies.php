<!DOCTYPE html >
<html>
<head>
	<title></title>
</head>
<body >
	<?php  // perintah php
	// menerapkan variable cookies
	setcookie("variable_cookies","Ini adalah variable_cookies",
		// dengan lama 60 detik
	 time()+60); 
	echo "<a href=cekcookies.php> Cek Cookies</>" ; // tampilkan tautan cekcookies.php dengan teks Cek Cookies
	?>
	
</body>
</html>