<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Obtenemos los datos del cliente
$name = $_GET['name'];
$mail = $_GET['email'];
$id = $_GET['id'];

//Obtenemos el idioma del navegador
function getUserLanguage() {  
       $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
       return $idioma;  
}
$user_language = getUserLanguage(); 

//Traducimos
if($user_language=='es'){ 
	$desc = 'Desde aqui puedes revisar el estado, la configuracion y la salud de las entradas DNS y servidores de correo (MX) de cualquier dominio externo o propio independientemente del servidor donde se aloja. Y proporciona sugerencias para solucionar y mejorar ellos, con referencias a la documentación oficial de los protocolos.';
	$profile = 'Perfil';
	$hosting = 'Hosting';
	$domains = 'Dominios';
	$invoices = 'Facturas';
	$faq = 'FAQ';
	$news = 'Noticias';
	$help = 'Ayuda';
	$logout = 'Cerrar Sesión';
	$placeholder = 'Ingresa el nombre de la seccion...';
    $title = 'Salud DNS';
	$current_lang = 'Español';
		$go = 'Revisar';
			$err = 'El sitio no existe';


} else {

	$desc = 'From here you can check the status, configuration and health of the DNS entries and mail servers (MX) from any external or own domain independently of the server where it is hosted. And provides suggestions to fix and improve them, with references to protocols’ official documentation.';
	$profile = 'Profile';
	$hosting = 'Hosting';
	$domains = 'Domains';
	$invoices = 'Invoices';
	$faq = 'FAQ';
	$news = 'News';
	$help = 'Help Desk';
	$logout = 'Logout';
	$placeholder = 'Type section name...';
	$current_lang = 'English';
	$title = 'DNS Health';
	$go = 'Check';
	$err = 'The website is offline';
}

echo'
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CyanDark,Inc. | '.$title.'</title>
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
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://cpanel.cyandark.com/index" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                cyandark
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                       
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-warning">2</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">News</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                       <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> No use cyanInstall and SSL.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> Hello And Welcome!
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> Text
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="/news">View all</a></li>
                            </ul>
                        </li>
                        
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span style="text-transform: capitalize;"><span class="namecap"></span> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="/cpanel/profile/profile.php?tk=fRedre8hAYuduC2uRecr4bRUguvazEra&id='.$_GET['id'].'" onclick="showphotoup();" style="cursor: pointer;" class="img-circle" alt="Change Image" />
                                    <p style="text-transform: capitalize;">
                                        <span class="namecap"></span> <!-- Name Capitalized -->
                                        <small style="text-transform: lowercase;">'.$_GET['email'].'</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="http://cpanel.cyandark.com/invoices">Billing</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="http://cpanel.cyandark.com/helpdesk">Tickets</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="http://cpanel.cyandark.com/accounts/change-language">Language</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="http://cpanel.cyandark.com/profile/change" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="http://cpanel.cyandark.com/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/cpanel/profile/profile.php?tk=fRedre8hAYuduC2uRecr4bRUguvazEra&id='.$_GET['id'].'" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <span class="namefirst"></span></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type=\'submit\' name=\'seach\' id=\'search-btn\' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="/switcher">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Account</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/accounts/details"><i class="fa fa-angle-double-right"></i> Details</a></li>
                                <li><a href="http://cpanel.cyandark.com/accounts/start"><i class="fa fa-angle-double-right"></i> Getting Started</a></li>
                                <li><a href="http://cpanel.cyandark.com/accounts/upgrade"><i class="fa fa-angle-double-right"></i> Upgrade</a></li>
                                <li><a href="http://cpanel.cyandark.com/accounts/change-password"><i class="fa fa-angle-double-right"></i> Change Password</a></li>
                                <li><a href="http://cpanel.cyandark.com/accounts/change-theme"><i class="fa fa-angle-double-right"></i> Change Theme</a></li>
                                <li><a href="http://cpanel.cyandark.com/accounts/change-language"><i class="fa fa-angle-double-right"></i> Change Language</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>Emails</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/emails/manage"><i class="fa fa-angle-double-right"></i> Manage Emails</a></li>
                                <li><a href="http://cpanel.cyandark.com/emails/forwarders"><i class="fa fa-angle-double-right"></i> Manage Forwarders</a></li>
                                <li><a href="http://cpanel.cyandark.com/emails/mx"><i class="fa fa-angle-double-right"></i> Edit MX Record</a></li>
                                <li><a href="http://cpanel.cyandark.com/emails/webmail"><i class="fa fa-angle-double-right"></i> Webmail</a></li>
                                <li><a href="http://cpanel.cyandark.com/emails/mail-service-control"><i class="fa fa-angle-double-right"></i> Mail Service Control</a></li>
                                <li><a href="http://cpanel.cyandark.com/emails/sent-mail-logs"><i class="fa fa-angle-double-right"></i> Sent Mail Logs</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-globe"></i> <span>Domains</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/domains-manager"><i class="fa fa-angle-double-right"></i> Domains</a></li>
                                <li><a href="http://cpanel.cyandark.com/domains/subdomains"><i class="fa fa-angle-double-right"></i> Subdomains</a></li>
                                <li><a href="http://cpanel.cyandark.com/domains/parked"><i class="fa fa-angle-double-right"></i> Parked Domains</a></li>
                                <li><a href="http://cpanel.cyandark.com/domains/addon"><i class="fa fa-angle-double-right"></i> Addon Domains</a></li>
                                <li><a href="http://cpanel.cyandark.com/domains/redirects"><i class="fa fa-angle-double-right"></i> Redirects</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cloud"></i> <span>Website</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/website/import"><i class="fa fa-angle-double-right"></i> Import Website</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/database-import"><i class="fa fa-angle-double-right"></i> Import Database</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/builder"><i class="fa fa-angle-double-right"></i> Website Builder</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/auto-installer"><i class="fa fa-angle-double-right"></i> Auto Installer</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/stats"><i class="fa fa-angle-double-right"></i> Statistics</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/latest-visitor-report"><i class="fa fa-angle-double-right"></i> Latest Visitors</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/error-pages"><i class="fa fa-angle-double-right"></i> Error Pages</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/website-templates"><i class="fa fa-angle-double-right"></i> Website Templates</a></li>
                                <li><a href="#" id="analyze_web"><i class="fa fa-angle-double-right"></i> Analyze Web</a></li>
                                <li><a href="http://cpanel.cyandark.com/website/zyro-builder"><i class="fa fa-angle-double-right"></i> Zyro Builder</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Files</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/files/ftp-access"><i class="fa fa-angle-double-right"></i> FTP Access</a></li>
                                <li><a href="http://cpanel.cyandark.com/files/ftp-accounts"><i class="fa fa-angle-double-right"></i> FTP Account</a></li>
                                <li><a href="http://cpanel.cyandark.com/files/ftp-login-history"><i class="fa fa-angle-double-right"></i> FTP Login History</a></li>
                                <li><a href="http://cpanel.cyandark.com/files/manager-2"><i class="fa fa-angle-double-right"></i> FTP Cloud Client</a></li>
                                <li><a href="http://cpanel.cyandark.com/files/backups"><i class="fa fa-angle-double-right"></i> Backups</a></li>
                                <li><a href="http://cpanel.cyandark.com/files/error-logs"><i class="fa fa-angle-double-right"></i> Error Logs</a></li>
                                <li><a href="http://cpanel.cyandark.com/files/file-manager"><i class="fa fa-angle-double-right"></i> File Manager</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>Advanced</span>
                                <i class="fa fa-angle-left pull-right"></i>
                                <small class="badge pull-right bg-yellow"><span class="insert_databases_number">0</span></small>

                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/advanced/mysql-databases"><i class="fa fa-angle-double-right"></i> MySQL Databases <b>[<span class="insert_databases_number">0</span>]</b></a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/phpmyadmin"><i class="fa fa-angle-double-right"></i> phpMyAdmin</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/cronjobs"><i class="fa fa-angle-double-right"></i> Cron Jobs</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/advanced-cron-jobs"><i class="fa fa-angle-double-right"></i> Advanced Cron Jobs</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/cron-output"><i class="fa fa-angle-double-right"></i> Cron Output</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/ssh-console"><i class="fa fa-angle-double-right"></i> SSH Console</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/dns-zone-editor"><i class="fa fa-angle-double-right"></i> DNS Zone Editor</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/phpinfo"><i class="fa fa-angle-double-right"></i> PHP Info</a></li>
                                <li><a href="http://cpanel.cyandark.com/advanced/php-configuration"><i class="fa fa-angle-double-right"></i> PHP Configuration</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-code-fork"></i> <span>Other</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://cpanel.cyandark.com/other/password-protect-dirs"><i class="fa fa-angle-double-right"></i> Password Protection Directories</a></li>
                                <li><a href="http://cpanel.cyandark.com/other/ip-deny"><i class="fa fa-angle-double-right"></i> IP Deny Manager</a></li>
                                <li><a href="http://cpanel.cyandark.com/other/hotlink-protection"><i class="fa fa-angle-double-right"></i> Hotlink Protection</a></li>
                                <li><a href="http://cpanel.cyandark.com/other/folder-index-manager"><i class="fa fa-angle-double-right"></i> Folder Index Manager</a></li>
                                <li><a href="http://cpanel.cyandark.com/other/fix-file-ownership"><i class="fa fa-angle-double-right"></i> Fix File Ownership</a></li>
                                <li><a href="http://cpanel.cyandark.com/other/reload-account"><i class="fa fa-angle-double-right"></i> Reload Account</a></li>
                                <li><a href="http://cpanel.cyandark.com/other/delete-account"><i class="fa fa-angle-double-right"></i> Delete Account</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-briefcase"></i> <span>Professional Services</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Web Design</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> App Development</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Graphic Design</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-wrench"></i> <span>Tools</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="https://tawk.to/e92ba94341756f6f287fe97b4fd65da576ea6876/popout/default/?$_tawk_popout=true&$_tawk_sk=54af3962f052df9f488a2909&$_tawk_tk=10a6db6c71205d63a42aaaafe7e2fcd3&v=278" onclick="window.open(this.href, this.target, \'width=300,height=400\'); return false;" target="_blank"><i class="fa fa-angle-double-right"></i> Support</a></li>
                                <li><a href="http://www.mojomarketplace.com/scripts"><i class="fa fa-angle-double-right"></i> Mojo Marketplace</a></li>
                                <li><a href="/tools/cloudflare.php?name={client:name}&email={client:email}"><i class="fa fa-angle-double-right"></i> CloudFlare</a></li>
                                <li><a href="http://marketplace.cyandark.com/"><i class="fa fa-angle-double-right"></i> CyanDark Marketplace</a></li>
                                <li><a href="/tools/dns-health.php?name={client:name}&email={client:email}"><i class="fa fa-angle-double-right"></i> DNS Health</a></li>
                                <li><a href="/tools/whois.php?name={client:name}&email={client:email}"><i class="fa fa-angle-double-right"></i> Whois</a></li>
                                <li><a href="/tools/ssl.php?id={client:id}&email={client:email}&name={client:name}&token=vr4G4gtg"><i class="fa fa-angle-double-right"></i> SSL</a></li>
                                <li><a href="/installer/id={client:id}&email={client:email}&name={client:name}"><i class="fa fa-angle-double-right"></i> cyanInstall</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        '.$title.'
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">'.$title.'</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">



<center><div class="container" style="text-align: left;">  
                <div id="mid">
					<div id="side-1" style="margin-top: 10px; width: 90%;">
            '.$desc.'
                             			<br><br>';
                             			
			if($_GET['check'] == 'true'){
			$result = file_get_contents('http://www.intodns.com/'.$_GET['web']);
			$princ = strpos($result,'class="content"');
			$data = substr($result, $princ + 16);
			$finc = strpos($data,'Processed in');
			$data = substr($data, 0, $finc - 3);
			$data = str_replace('src="/static/images/info.gif"','src="http://www.intodns.com/static/images/info.gif"',$data);
			$data = str_replace('src="/static/images/pass.gif"','src="http://www.intodns.com/static/images/pass.gif"',$data);
			$data = str_replace('src="/static/images/warn.gif"','src="http://www.intodns.com/static/images/warn.gif"',$data);
			$data = str_replace('src="/static/images/error.gif"','src="http://www.intodns.com/static/images/error.gif"',$data);
			
			$data = str_replace('src="../static/images/error.gif"','src="http://www.intodns.com/static/images/error.gif"',$data);
			$data = str_replace('src="../static/images/info.gif"','src="http://www.intodns.com/static/images/info.gif"',$data);
			$data = str_replace('src="../static/images/pass.gif"','src="http://www.intodns.com/static/images/pass.gif"',$data);
			$data = str_replace('src="../static/images/warn.gif"','src="http://www.intodns.com/static/images/warn.gif"',$data);
			$data = str_replace('class="tabular"','class="table table-bordered" style="width: 100% !important;"',$data);
			$data = str_replace('<td rowspan="3" scope="row" style="vertical-align: top; background-color: #ffffff;">','<td rowspan="3" scope="row" style="vertical-align: top;">',$data);
				
				if(preg_match("/get nameservers at parent server/i", $data)){ echo'<font color="#800000"><b>'.$err.'</b></font>  - <a href="dns-health.php?name='.$name.'&email='.$mail.'">Go Back</a>'; }
				else{
				echo'<br><div class="box">
				
				<div class="box-header">
                                    <h3 class="box-title">'.$title.'</h3>
                                </div>
                                
                                <div class="box-body">';
				echo $data;
				
				echo'</div></div>';}
			}
			else{
			echo'<form method="GET" action="dns-health.php">
			<center>
			<table style="margin-left: -70px;"><tr>
			<td style=" padding-top: 10px; "><p>Web:</p></td>
			<td><input type="text" name="web" class="form-control" id="web" placeholder="example.com" style=" margin-left: 15px; margin-right: 0px; " value=""></td>
			<td><input class="btn btn-primary" type="submit" name="submit" style=" margin-left: 30px; " id="submit" value="'.$go.'"></td>
			</tr></table>
		    </center>
			<input type="text" name="check" id="check" style="display:none;" value="true">
			<input type="text" name="name" id="name" style="display:none;" value="'.$name.'">
			<input type="text" name="email" id="email" style="display:none;" value="'.$mail.'">
			<input type="text" name="id" id="email" style="display:none;" value="'.$id.'">
			</form>';}
			
                 					echo'</div>
            		</div>

	</div></center>
	
	

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="/cpanel/bootstrap/js/app.js" type="text/javascript"></script>
		<!-- Transform Name -->'; ?>
	<script>
	var name = '<?php echo $_GET['name']?>';
	var name = name.toLowerCase();
	$('.namecap').text(name);
	
	var name = '<?php echo $_GET['name']?>';
	var name2 = name.split(" ");
	var name2 = name2[0].toLowerCase();
	$('.namefirst').text(name2);
	</script>
	
    <? echo'</body>
</html>';

?>