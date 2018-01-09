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


$ip = $_SERVER['REMOTE_ADDR'];
$user_name	= strtolower(mysql_escape_string($_POST['txtusername']));
$user_name	= preg_replace("/[^a-zA-Z0-9]/", "", $user_name);
$password	= mysql_real_escape_string(strip_tags(ltrim(rtrim(trim($_POST['txtpassword'])))));
$email		= mysql_real_escape_string(strip_tags($_POST['txtemail']));
$telpon		= mysql_real_escape_string(strip_tags($_POST['txttelpon']));
$nama		= mysql_real_escape_string(strip_tags($_POST['txtnama']));
$pass_rhs	= md5($password);

if( isset($_POST['submit'])){

	$jml_user = mysql_num_rows(mysql_query("SELECT 1 FROM tbl_member WHERE mb_username='$user_name'"));
			
	if( !empty($user_name) || $user_name!=""){
		if($jml_user < 1){
					
			$simpan = mysql_query("INSERT INTO tbl_member (
				mb_ip,
				mb_tanggal_join,
				mb_username,
				mb_password,
				mb_pas,
				mb_nama,
				mb_telpon,
				mb_email,
				mb_status
				)VALUES(
				'$ip',
				NOW(),
				'$user_name',
				'$pass_rhs',
				'$password',
				'$nama',
				'$telpon',
				'$email',
				'1')");

			$mbr = mysql_fetch_array(mysql_query("SELECT MID FROM tbl_member ORDER BY MID DESC LIMIT 1"));
			$MID = $mbr['MID'];
			$sis1 = mysql_query("INSERT INTO tbl_deposit (MID,tanggal)VALUES('$MID',NOW())");

			// KIRIM SMS ------------------------------
			/*
			$nomor	= $telpon;
			$pesan	= "Registrasi anda di MisterKlik.com sukses\nUsername:$user_name\nPassword:$password\nmisterklik.com";
			$msge 	= urlencode($pesan);

			if( $sc_sms_online=="1" ){
				$curlHandle = curl_init();
				$url="http://mysms.mediadesain.co.id/key_sms.php?username=$sc_sms_username&pass=$sc_sms_password&apikey=$sc_sms_key&no=$nomor&pesan=$msge";
				curl_setopt($curlHandle, CURLOPT_URL,$url);
				curl_setopt($curlHandle, CURLOPT_HEADER, 0);
				curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curlHandle, CURLOPT_TIMEOUT,120);
				$hasil = curl_exec($curlHandle);
				curl_close($curlHandle);
			}else{
				$kirim_sms = mysql_query("INSERT INTO sms_report ( tanggal, noTelp, pesan)VALUES(NOW(), '$nomor', '$pesan')");
			}
			*/
			// KIRIM SMS ------------------------------
							
			//include("email/konfirmasi_shop_registrasi.php");
			//header('Location: ../login');
			?>
			<meta http-equiv="refresh" content="0.001;url=<?=base_url()?>page/registersukses" />
			<?php
		}else{
			?>
			<meta http-equiv="refresh" content="0.001;url=<?=base_url()?>page/register" />
			<?php
			//header('Location: page/register'); // username sama
		}
			
	}else{
		?>
		<meta http-equiv="refresh" content="0.001;url=<?=base_url()?>page/register" />
		<?php
		//header('Location: page/register'); // username kosong
	}
			
			
}else{
	?>
	<meta http-equiv="refresh" content="0.001;url=<?=base_url()?>page/register" />
	<?php
	//header("Location: page/register");
}

?>