<?php
include('koneksi.php');
if(isset($_POST['login'])){
	$email = mysql_real_escape_string(htmlentities($_POST['email']));
	$pass = mysql_real_escape_string(htmlentities($_POST['password']));
	$sql = mysql_query("SELECT * FROM admin WHERE Email ='$email' AND Password = '$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript"> alert("User Tidak Ditemukan"); document.location="index.php" </script>';

	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level']==1){
			$_SESSION['admin']=$email;
			echo'<script language="javascript"> alert("anda Berhasil Login Admin!"); document.location="index_admin.php"; </script>';

		}else{
			$_SESSION['guest']=$user;
			echo'<script language="javascript"> alert("anda Berhasil Login Guest!"); document.location="index_guest.php"; </script>';
		}
	}

}
?>
