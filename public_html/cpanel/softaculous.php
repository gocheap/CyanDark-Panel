<?
//Auto Login for Softaculous by CyanDark
//Requires Softaculous Remote with Premium Licencese

/***

						<!-- Softaculous -->
                                <div id="softaculous" style="display: none;">
                                	<font style="font-weight: 200; font-size: 25px; color: #337ab7;">Softaculous Auto Installer</font>
                                	
                                	<form action="//{cpanel:domain}/cpanel/softaculous.php" method="post">
                                	<table><tr>
                                	<td style="padding-right: 10px;">FTP Password:</td>
                                	<td style="padding-right: 10px;"><input type="password" name="pass" value="" class="form-control"></td>
                                	<td style="padding-right: 10px;"><p><input type="submit" name="submit" class="btn btn-block btn-warning btn-flat" value="Login" alt="Login" style=" margin-top: 10px; background: #e08e0b !important;"></p></td>
                                	</tr></table>
                                	
                                	<input type="hidden" id="soft_domain" name="domain" value="">
                                	<input type="hidden" name="email" value="{client:email}">
                                	<input type="hidden" id="soft_user" name="user" value="">
                                	<input type="hidden" name="return_url" value="//dashboard.{cpanel:domain}/website/auto-installer/softaculous/aid/{client:id}">
                                	</form>
                                	    
                                </div>
                                
***/
include_once('../sdk/remote_sdk.php');

//---- USER DATA SETTINGS
$domain = $_POST['domain'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$fail_url = $_POST['return_url'];

//---- SOFTACULOUS SERVER SETTINGS
$server_ip = '198.96.90.217';
$softaculous_hostname = 'softaculous.cyandark.com';
$url = 'https://'.$server_ip.':2006';
$api_key = 'ZC3e2TahVVqsjoTX';
$api_pass = 'Hu2fyzCGJ0FOWJusPJujhrJfuroil3VX';

//---- USER VERIFICATION [ with FTP ] ----

$conn_id = ftp_connect($domain); 
$ftp_connected = 0;

	// Login Verification
	if (@ftp_login($conn_id, $user, $pass)) {
	    $ftp_connected = 1;
	    //echo 'Conectado al FTP';
	} else {
	    $ftp_connected = 0;
	    //echo 'Error accediendo al FTP';
	}

// Close FTP Conecction 
ftp_close($conn_id);  

//---- EXECUTE ONLY IF FTP IS VALID ----

if($ftp_connected == 1){

echo'<br>Conectado a la API de Softaculous';

//---- CREATE USER
$rsdk = new Remote_API($url, $api_key, $api_pass);
$res = $rsdk->adduser($user, $email);

/* if(!empty($res['error'])){
    echo'<br>El usuario ya existe.';
}else{
	echo'<br>El usuario se creo correctamente.'; */
} 

//---- ADD DOMAIN
	$url = 'https://'.$server_ip.'/index.php?'.
				'api_key='.$api_key.
				'&api_pass='.$api_pass.
				'&useuser='.$user.
				'&api=serialize'.
				'&act=adddomain';

	$post = array('domain' => $domain,
	              'ftp_user' => $user,
	              'ftp_pass' => $pass,
	              'ftp_path' => '/public_html',
	              'backup_path' => '/backups',
	              'data_dir' => '/home/'.$user.'/datadir', // Notice Full Path
	              'add_domain' => 1
	);
 
	// Set the curl parameters.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $time);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
	if(!empty($post)){
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	}
 
	// Get response from the server.
	$resp = curl_exec($ch);
	
	/*if (preg_match("/done/i", $resp)) {
    	echo "<br>El dominio se añadio correctamente.";
	} else {
	    echo "<br>El dominio ya esta añadido.";
	}*/

//---- GENERATE URL TOKEN
$url = 'https://'.$server_ip.'/index.php?'.
			'api_key='.$api_key.
			'&api_pass='.$api_pass.
			'&createSession='.$user.
			'&api=serialize';
 
// Set the curl parameters.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $time);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
// Get response from the server.
$resp = curl_exec($ch);
 
// The response will hold a string as per the API response method. In this case its PHP Serialize
$res = unserialize($resp);
 
	if(!empty($res['error'])){
		header('Location: https:'.$fail_url);
	} else {
		header('Location: https://'.$softaculous_hostname.'/index.php?rsid='.$res['rsid']);	
	}

} else {
	header('Location: https:'.$fail_url);
}
?>