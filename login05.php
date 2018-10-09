<form action=" " method="POST">
	<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
	 		<td>Password :</td>
	 		<td><input type="Password" name="pass"></td>
	 	</tr>
	 	<tr>
	 		<td></td>
	 		<td><input type="submit" name="submit"></td>
	 	</tr>
	 </table>
	</form>

<?php
session_start();
$tiara=array(
	"user"=>"tiara",
	"pass" =>"2904"
);
		if(isset($_POST['submit'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];


			if($user== $tiara["user"] && $pass==$tiara["pass"]){
				$_session['user']=$user;
				header("location:registrasi05.php");
			}else{
				header("location:login05.php");
			}

		}
?>