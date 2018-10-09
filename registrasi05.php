<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: mimich">
	<center>
		<h2><p>FORM REGISTRASI MAHASISWA</p></h2>
	<form action="proses05.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="radio" name="class" value="D3MI-41-01" required="">D3MI-41-01<br></td>
				<td><input type="radio" name="class" value="D3MI-41-02">D3MI-41-02<br></td>
				<td><input type="radio" name="class" value="D3MI-41-03">D3MI-41-03<br></td>
				<td><input type="radio" name="class" value="D3MI-41-04">D3MI-41-04<br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Male" required="">Male<br></td>
				<td><input type="radio" name="jk" value="Female">Female<br></td>
				<td><input type="radio" name="jk" value="lain">Other<br></td>
			</tr>
			<tr>
				<td>Hobi</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Acting" required="">Berenang <br>
				<input type="checkbox" name="hoby[]" value="Mendengarkan Musik">Mendengarkan Musik 
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Badminton" >Badminton<br>
				<input type="checkbox" name="hoby[]" value="Membaca Novel">Membaca Novel
			</td>
		</tr>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FKB">Fakultas Komunikasi dan Bisnis</option>
    				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>
    		</tr>
		<tr>
			<td>Alamat</td>
			<td> <input type="textarea" name="alamat" style="height: 100px;width: 150px"></td>
		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['class'];
		$jenisk=$_POST['jk'];
		$hobi=$_POST['hoby'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$jumlahob=count($hobi);

		for($x=0;$x<$jumlahob;$x++){
			mysql_query("insert into data values('','$hobi[$x]')");
		}

		$error=array();
		if(strlen($_POST['nama']) <> 35){
			$error['nama']=="Harus 35";
		} if(strlen($_POST['nim']) <= 10){
			$error['nim']=="Harus 10";
		} if(empty($kelas)){
			$error['class']=="Kelas harus diisi";
		}if(empty($jenisk)){
			$error['jk']=="Jenis Kelamin harus diisi";
		}if(empty($hobi)){
			$error['hoby']=="Hobby harus diisi";
		}if(empty($fakultas)){
			$error['fakultas']=="Fakultas harus diisi";
		}if(empty($alamat)){
			$error['alamat']=="Alamat harus diisi";
		}
}
?>

	