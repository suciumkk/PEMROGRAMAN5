<? php
$ nama = $ _GET [ 'nama' ];
$ email = $ _GET [ 'email' ];

jika ( $ nama == "" ) {
	echo  '<meta http-equiv = "refresh" content = "1; url = http: //localhost/pemrograman_5/tugasAct.php">' ;
} elseif ( $ email == "" ) {
	echo  '<meta http-equiv = "refresh" content = "1; url = http: //localhost/pemrograman_5/tugasAct.php">' ;
} lain {
	echo  "<center> Nama:" . $ nama . "</center> <br>" ;
	echo  "<center> Email:" . $ email . "</center> <br>" ;
date_default_timezone_set ( 'Asia / Jakarta' );
	echo  "<center> Tanggal:" . tanggal ( "dFY, H: i: s a" ). "</center> <br>" ;
	echo  "<center> Tanggal Login:" . tanggal ( "dFY" ). "</center> <br>" ;
	echo  '<meta http-equiv = "refresh" content = "3; url = http: //localhost/praktikum5/tugasBiodata.php">' ;
}
?>