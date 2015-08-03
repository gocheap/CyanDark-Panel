<?
//Website Builder Handler
if($_GET['token'] == '8dd1f44bc136925'){
	
	//Languages -------------------
	if($_GET['lang'] == 'es'){
		$welcome_msj = 'Estas a un paso de activar el constructor Web.';
		$onlyreg_msn = 'Actualmente no has activado tu cuenta en el Constructor Web de CyanDark, ¿Que esperas? Es Completamente Gratis. <br> <b>Para activar tu cuenta solo necesitamos estos datos:</b>';
		$pass_msj = 'Contraseña';
		$pass_msj2 = 'Confirmar Contraseña';
		$activate_msj = 'Activar';
		$welcome_back = 'Bienvenido de nuevo.';
		$back_msj = 'Bienvenido de vuelta al Constructor Web, Para entrar al mismo necesitas iniciar sesion. <br> Ademas puedes ingresar desde https://builder.'.$_SERVER['HTTP_HOST'].'/. <br><br> Tus datos de acceso son: <br> <b>Client ID: </b>'.$_GET['id'].'<br><b>Contraseña: </b>********';
	} else {
		$welcome_msj = 'You are one step to activate the Web Builder.';
		$onlyreg_msn = 'Currently you have not activated your account on the Web Builder CyanDark, What do you expect? It\'s completely free.<br> <b>To activate your account only need this data:</b>';
		$pass_msj = 'Password';
		$pass_msj2 = 'Confirm Password';
		$activate_msj = 'Activate';
		$welcome_back = 'Welcome back.';
		$back_msj = 'Welcome back to the Web Builder, you need to enter the same login. <br> You can enter from  https://builder.'.$_SERVER['HTTP_HOST'].'/. <br><br> Your login details are:<br> <b>Client ID: </b>'.$_GET['id'].'<br><b>Password: </b>********';
	}
	
	//Database Connection ---------
	$servername = "localhost";
	$username = "cyandark_builder";
	$password = "Metabee5";
	$dbname = "cyandark_builder";
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT vuser_login, vuser_email FROM tbl_user_mast";
	$result = $conn->query($sql);

	//Web View -------------------
	echo'
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CyanDark, Inc | Website Builder</title>
        <meta content=\'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\' name=\'viewport\'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/cpanel/bootstrap/css/panel.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        
        <div class="wrapper row-offcanvas row-offcanvas-left" style=" margin-top: 0px !important; ">
            

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side" style=" margin-left: 0px; ">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <center><div style="width: 97%; text-align: left;">';
                    
		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		if($_GET['id'] == $row["vuser_login"] || $_GET['email'] == $row["vuser_email"]){
        		$name = explode(" ",$_GET['name']);
        		echo'
				<h2 style="color: #3c8dbc; font-weight: 100;">'.$name[0].', '.$welcome_back.'</h2><p>'.$back_msj.'</p>
    				
 				<form name="loginForm" target="_blank" id="loginForm" method="post" action="//builder.'.$_SERVER['HTTP_HOST'].'/login.php?act=post" target="_parent">
				<input type="hidden" name="vuser_login" id="vuser_login" maxlength="50" value="'.$row["vuser_login"].'"><hr>
				<p>'.$pass_msj.'</p>
				<table style="width: 100%;"><tr>
				<td><input type="password" name="vuser_password" class="form-control" id="vuser_password" maxlength="50"></td>

                <td style=" width: 50px; "><input class="btn btn-primary btn-sm btn-flat" type="submit" value="LOGIN" style="margin-left: 10px; "></td></tr></table>
				</form>';
        			$notfound = 0;
        			break;
    			} else { 
					$notfound = 1;
    			}
    		}
		} else {
    		$notfound = 1;
		}
	$conn->close();
	
			if($notfound == 1){
					$name = explode(" ",$_GET['name']);
	    			echo'<h2 style="color: #3c8dbc; font-weight: 100;">'.$name[0].', '.$welcome_msj.'</h2><p>'.$onlyreg_msn.'</p>
    				
    				<form name="regForm" target="_blank" method="post" action="//builder.'.$_SERVER['HTTP_HOST'].'/signup.php?act=post" target="_parent">
					<input type="hidden" name="vuser_login" id="vuser_login" maxlength="15" value="'.$_GET['id'].'" size="30" readonly><hr>
					<p>'.$pass_msj.'</p>
                	<input type="password" class="form-control" name="vuser_password" id="vuser_password" maxlength="50" value="" size="30"><br>
                	<p>'.$pass_msj2.'</p>
                	<input type="password" class="form-control" name="vuser_password1" id="vuser_password1" maxlength="50" value="" size="30"><br>
                	<input type="hidden" name="txtFirstName" id="txtFirstName" maxlength="100" value="'.$_GET['name'].'" size="30">
					<input type="hidden" value="'.$_GET['email'].'" name="vuser_email" id="vuser_email" maxlength="100" size="30">

                    <input class="btn btn-primary btn-sm btn-flat" type="submit" onclick="validate();" value="'.$activate_msj.'">

    				</form>';
					}
                    echo'</div></center></div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>';

}
?>