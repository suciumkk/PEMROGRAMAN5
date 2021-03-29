<? php
if (kosong ( $ _POST [ 'nama' ])) { // jika metode POST masukkan nama kosong
	header ( "location: kosong.php" ); // browser akan mer-redirect ke halaman kosong.php
} lain {
	echo  "<center> Nama:" . $ _POST [ 'nama' ]. "</center> <br>" ; // jika tidak menampilkan Nama: nilai dari method Post iinput type nama
}
?>