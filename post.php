<!DOCTYPE html>
<html>
<head>
		<title></title>
</head>
<body>
	<!--membuat form dengan method POST dan akan memanggil postAct.php-->
	</form method="POST" action="postAct.php">
	<!--membbuat tabel-->
		<table width="400" align cellpanding="2" cellspacing="2">
		</tr>
					<!--membuat baris-->
		<tr>
			<!--membuat sel pada tabel dengan teks email-->
			<td> width="130">Email</td>
			<!--membuat type text dengan nama email-->
			<td><input type="text" name=email></td>
		</tr>
		<!--membuat baris-->
		<tr>
				<td>
					<!--membuat sebuah input type submit dengan nilai login-->
					<input type="submit" name="btnLogin" value="Login">
					<!--membuat sebuah input type reset dengan nama reset-->
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
