<!DOCTYPE html>
<html>
<kepala>
	<title></title>
</head>
<body>
	<!-- membuat form dengan metode GET dan akan memanggil file getAct.php ketika form dikirim -->
	<form  method = "GET"  action = "getAct.php"> 
		<!-- membuat baris pada tabel -->
			<tr> 
				<!-- membuat tabel -->
					<table  width = "400"  align = "center"  cellpadding = "2"  cellspacing ="2"> 
			 <!-- membuat baris pada tabel -->
			<tr>
				<!-- membuat sel pada tabel dengan teks nama -->
				<td  width = "130"> Nama </td>   
				<!-- membuat tipe masukan teks -->
				<td> <input  type = "text"  name = "nama" > </td>   
			</tr>
			<!-- membuat baris pada tabel -->
			<tr> 
				 <!-- membuat sel pada tabel dengan teks email -->
				<td  width = "130"> Email </td>
				<!-- membuat tipe input teks -->
				<td> <input  type = "text" name = "email"> 
				</td> 
				</tr>
			 <!-- membuat baris pada tabel -->	
				<tr>
				<td>
 						<!-- membuat jenis masukan submit dengan nilai login -->
					<input  type = "submit"  name = "btnLogin"  value = "Login"> 
					   <!-- membuat jenis input reset dengan nilai Reset -->
					<input  type = "reset"  name = "reset"  value = "Reset">   
				</td>
			</tr>
		</table>
	</form>
</body>
</html>