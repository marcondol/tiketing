<?php
ob_start();
error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);

$dbHost = 'localhost';
$dbUser = 'sharexyz_Kl13km1';
$dbPass = '$()#%rawageni';
$dbName = 'sharexyz_m15T3R';
$objConn = mysql_connect("$dbHost","$dbUser","$dbPass");
mysql_select_db("$dbName",$objConn);

//ob_start();

if( isset($_POST['submit'])){

	$pas_rhs 		= md5(ltrim(rtrim(trim(mysql_real_escape_string($_POST['txtpassword'])))));
	$login_member 	= mysql_query("SELECT * FROM tbl_member WHERE mb_username='".mysql_real_escape_string($_POST['txtusername'])."' AND mb_status='1'");
	$member = mysql_fetch_array($login_member);
		
	if(mysql_real_escape_string($_POST['txtusername'])=="" || mysql_real_escape_string($_POST['txtpassword'])==""){

		//header('Location: shop_validasi/3/gagal.html');
		echo "GAGAL";
		
	}else{
		if($pas_rhs == "$member[mb_password]"){
			//session_start();
			$password_session 	= "$member[mb_password]";
			$MID_ses 			= "$member[MID]";
		
			$_SESSION['password_session'] 	= $member['mb_password'];
			$_SESSION['MID_ses'] 			= $member['MID'];
			
			//header("location: $domain/shop_home_mitra.html");
			echo "SUKSES";
			
		}else{
			//header('Location: shop_validasi/4/gagal.html');
			echo "GAGAL";			
		}
	}
	
}	
?>
