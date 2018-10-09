<?php
	$hostname   = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "db_mahasiswa";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['class'];
		$jenisk=$_POST['jk'];
		$hobi = implode(", ", $_POST['hoby']);
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];	
	
	$sql="INSERT INTO datamahasiswa(nama,nim,kelas,jeniskelamin,hobby,fakultas,alamat) VALUES ('$nama','$nim','$kelas','$jenisk','$hobi','$fakultas','$alamat')";
			if(mysqli_query($con,$sql)){
				echo "Database masuk";
			}else{
				die(mysqli_error($con));
				echo "error";
			}
}
	?>