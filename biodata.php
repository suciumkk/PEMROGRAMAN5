<?php 
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
	
	if ($nama== "") {
echo  "<center> Lengkapi BIODATA anda</center><br>" ;
	}elseif ($Nama == "") {
echo  "<center> Lengkapi BIODATA anda</center><br>";
	}elseif ($Email == "") {
echo  "<center> Lengkapi BIODATA anda</center><br>";
	}elseif ($Tempat_Tanggal_Lahir == "") {
echo  "<center> Lengkapi BIODATA anda</center><br>";
	}elseif ($Pendidikan == "") {
echo  "<center> Lengkapi BIODATA anda</center><br>";
	}elseif ($Alamat == "") {
echo  "<center> Lengkapi BIODATA anda</center><br>";
	}elseif ($Hobi == "") {
echo  "<center> Lengkapi BIODATA anda</center><br>";
	}else
	echo "Nama : $Nama<br>";
	echo "Email : $Email<br>";
	echo "Tempat_Tanggal_Lahir : $Tempat_Tanggal_Lahir<br>";
	echo "Pendidikan : $Pendidikan<br>";
	echo "Alamat : $Alamat<br>";
	echo "Hobi : $Hobi<br>";
}
?>
	
	
	
	
	



