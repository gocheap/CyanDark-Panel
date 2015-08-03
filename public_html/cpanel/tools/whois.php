<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Obtenemos los datos del cliente
$name = $_GET['name'];
$mail = $_GET['email'];

//Obtenemos el idioma del navegador
function getUserLanguage() {  
       $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
       return $idioma;  
}
$user_language = getUserLanguage(); 


//Traducimos
if($user_language=='es'){ 
	$desc = 'WHOIS es un protocolo TCP basado en petición/respuesta que se utiliza para efectuar consultas en una base de datos que permite determinar el propietario de un nombre de dominio o una dirección IP en Internet. Las consultas WHOIS se han realizado tradicionalmente usando una interfaz de línea de comandos, pero actualmente existen multitud de páginas web que permiten realizar estas consultas. Estas páginas siguen dependiendo internamente del protocolo WHOIS para conectar a un servidor WHOIS y hacer las peticiones. Los clientes de línea de comandos siguen siendo muy usados por los administradores de sistemas.';
	$profile = 'Perfil';
	$hosting = 'Hosting';
	$domains = 'Dominios';
	$invoices = 'Facturas';
	$faq = 'FAQ';
	$news = 'Noticias';
	$help = 'Ayuda';
	$logout = 'Cerrar Sesión';
	$placeholder = 'Ingresa el nombre de la seccion...';
	$current_lang = 'Español';
		$go = 'Revisar';

} else {

	$desc = 'WHOIS is a TCP based protocol request / response that is used for querying a database for determining the owner of a domain name or an IP address on the Internet. The WHOIS queries traditionally have been performed using a command line interface, but currently there are many websites that allow these queries. These pages are still dependent internally WHOIS protocol to connect to a server and WHOIS requests. The command-line clients are still widely used by system administrators.';
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
	$go = 'Check';
}


echo'<!DOCTYPE html>
<html lang="en">
<head>
    <title>CyanDark,Inc. | Whois</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="/images/favicon.png" />
<link href=\'http://fonts.googleapis.com/css?family=Electrolize\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'http://fonts.googleapis.com/css?family=Raleway\' rel=\'stylesheet\' type=\'text/css\'>'; ?>
        
<style type="text/css">@import url(http://fonts.googleapis.com/css?family=Electrolize);
@import url(http://fonts.googleapis.com/css?family=Raleway);
@import url(http://fonts.googleapis.com/css?family=Nunito);
@import url(http://fonts.googleapis.com/css?family=Open+Sans);

html, body{ height:100% !important; min-height:100%; font-family: 'Electrolize', sans-serif;}
body{
        font-family: 'Raleway', sans-serif;
        padding:0px;
        margin:0px;
        color: #FFFFFF;
	    font-size: 10px;
        background: #fff;}
.superbar{
background: rgb(249,249,250); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(249,249,250,1) 0%, rgba(237,237,240,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(249,249,250,1)), color-stop(100%,rgba(237,237,240,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9f9fa', endColorstr='#ededf0',GradientType=0 ); /* IE6-9 */
padding-top: 5px;
padding-bottom: 5px;
color: #6B7078 !important;
width: 100%;
vertical-align: center;
text-align: left;
border: 1px solid #D4D4D7;
border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;
height: 56px;}
.supersearch{color: #6B7078; width: 250px; padding-left: 20px !important; padding-right: 20px !important; height: 30px; border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px; -webkit-box-shadow:inset 0 2px 4px 0 #ddd; -moz-box-shadow:inset 0 2px 4px 0 #ddd; box-shadow:inset 0 2px 4px 0 #ddd; border: 1px solid #D4D4D7;}
.supersearch:focus{ -webkit-box-shadow:inset 0 2px 4px 0 #ddd !important; -moz-box-shadow:inset 0 2px 4px 0 #ddd !important; box-shadow:inset 0 2px 4px 0 #ddd !important;}
input[type=text], textarea {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid #DDDDDD;
}
.linkmenu{padding-left: 10px; padding-right: 10px; padding-bottom: 3px;}
.linkmenu a{color: #6B7078 !important; font-size: 14px;}
.linkmenu a:hover{text-decoration:none; padding-bottom: 14px; color: #3BC8F5 !important; border: 3px solid #3BC8F5;border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;}
.linkmenu_active a{font-size: 14px; font-weight: bold; text-decoration:none; padding-bottom: 13px; color: #3BC8F5 !important; border: 3px solid #3BC8F5;border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;}

input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}
.container{
        font-family: 'Raleway', sans-serif;
        padding-top: 120px;
	    width:960px;
        font-size: 10px;
	    text-align:left;}

.header{
        font-family: 'Raleway', sans-serif;
       width:100%;
	height:75px;
	padding:0;
	margin:0 auto;
	margin-top:-1px;
	text-align:center;
	position:fixed;
	z-index: 2;
	border-bottom:1px solid #EAF0F3;
}
.header img{
    margin-top: 5px;}
.headercont{
	width:960px;
	font-family: 'Raleway', sans-serif;
	text-align:left;
	height:25px;
        font-size: 10px;
	color: #8C8C8C;
	text-decoration:none;}
.headercont  td{
    padding-left: 28px;
    padding-right: 28px;}

.buttontopnav{
height: 46x;
color: #FFFFFF;
text-align: left;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-right: 15px;
}
.buttontopnav a{
text-decoration:none;
color: #FFFFFF;}
.buttontopnav:hover{
color: #20B8FB;}
.selectdecorated{
    float: right;
    padding-right: 25px;
color: #8C8C8C;}

.selectdecorated select{
background: rgb(237,237,237); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(237,237,237,1) 0%, rgba(229,229,232,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(237,237,237,1)), color-stop(100%,rgba(229,229,232,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(237,237,237,1) 0%,rgba(229,229,232,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(237,237,237,1) 0%,rgba(229,229,232,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(237,237,237,1) 0%,rgba(229,229,232,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(237,237,237,1) 0%,rgba(229,229,232,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#e5e5e8',GradientType=0 ); /* IE6-9 */
font-weight: 700;
color: #6B7078;
font-size: 12px;
font-family: 'Raleway', sans-serif;
border-radius: 95px; 
-moz-border-radius: 95px; 
-webkit-border-radius: 05px; 
text-align: left;
padding: 5px;
padding-left: 10px;
width: 100px;
border: 1px solid #D4D4D7;
	cursor: pointer;
	filter: alpha(opacity=0);
	-khtml-appearance: none;
	-webkit-appearance: none;
	height: 27px !important;
	  outline: none;
}
.selectdecorated label{
display: none;
}

.selectdecorated select option{
	color: #6B7078;
	background: #444;
	border: 0;
	border-top: 1px solid #5a5a5a;
	border-bottom: 1px solid #333;
	text-shadow: 0px 1px 1px #333;
	padding: 4px 6px;
	outline: none;
    height: 27px !important;
}

body, form						{ padding:0; margin:0; }
div,
table,
td,
input,
textarea,
select							{ font-family: 'Open Sans', sans-serif;font-size:12px; color:#000; }
a								{ color:#000; outline:none; text-decoration:none; }
a:hover							{ color:#343434; text-decoration:underline; }
a.hot							{ color:#EE7E2B !important; }
a:hover.hot						{ color:#F3AB76 !important; }
p, h1, h2, h3, h4, h5			{ margin:0; padding:0; font-weight:normal; }
img                             { border: 0; }
.hide   {display:none;}
.clear   {clear:both;}
.tal    {text-align: left !important;}
.tar    {text-align: right !important;}
#start				{ width:100%; min-width:1003px; min-height:600px; height:100%; }
#bef-main			{ width:100%; min-height:100%; }
#main				{ width:960px; position:relative; margin:0 auto; }

#top				{ width:100%; height:100px; }
#top .logo			{ overflow: hidden; position:absolute; left:0; top:13px; width:335px; height:74px; /*background:url(/themes/x3/images/logo-company.png) no-repeat;*/ padding: 5px 0 0 5px; }
#top .choose		{ float:right; padding:17px 0 0 20px; }
#top .choose span	{ display:block; padding-bottom:5px; color:#0E6C9F; }
#top .choose select	{ width:120px; }

#top-menu td		{ text-align:left; padding-left: 10px;}
#top-menu td:hover a{text-decoration:none; padding-bottom: 14px; color: #3BC8F5 !important; border: 3px solid #3BC8F5;border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;}
.layout-public #top-menu td:hover { background: none; }
#top-menu a			{ color: #6B7078 !important; font-size: 14px; }

#nav				{ list-style-type:none; padding:0; margin:0; }
#nav li				{ padding:0; margin:0; }
#nav li a			{ font-size:12px; }
#nav li a.s			{ font-weight:bold; }
.color_bar{
background: rgb(58,197,243); /* Old browsers */
background: -moz-linear-gradient(left,  rgb(58,197,243) 0%, rgb(55,233,244) 49%, rgb(143,209,125) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgb(58,197,243)), color-stop(49%,rgb(55,233,244)), color-stop(100%,rgb(143,209,125))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(left,  rgb(58,197,243) 0%,rgb(55,233,244) 49%,rgb(143,209,125) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(left,  rgb(58,197,243) 0%,rgb(55,233,244) 49%,rgb(143,209,125) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(left,  rgb(58,197,243) 0%,rgb(55,233,244) 49%,rgb(143,209,125) 100%); /* IE10+ */
background: linear-gradient(to right,  rgb(58,197,243) 0%,rgb(55,233,244) 49%,rgb(143,209,125) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3ac5f3', endColorstr='#8fd17d',GradientType=1 ); /* IE6-9 */
height: 5px;
width: 100%;
}
#mid, #mid-inner	{ width:960px; overflow:auto; }
#mid-inner			{ background:#fff;
margin-top: 15px;
padding-left: 30px; margin-left: -15px;
 }
.layout-profile #mid-inner			{ background:#fff; }
.layout-public #mid-inner			{ background:#fff; }

.main-menu	{ font-size:18px; color:#6B7078; padding:11px 0 5px 10px; }
.head{ font-size:14px; color:#6B7078; padding:11px 0 11px 10px;
font-family: 'Raleway', sans-serif;
font-weight: 400;
background: rgb(249,249,250); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(249,249,250,1) 0%, rgba(237,237,240,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(249,249,250,1)), color-stop(100%,rgba(237,237,240,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(249,249,250,1) 0%,rgba(237,237,240,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9f9fa', endColorstr='#ededf0',GradientType=0 ); /* IE6-9 */
border-radius: 5px 5px 0px 0px; 
-moz-border-radius: 5px 5px 0px 0px; 
-webkit-border-radius: 5px 5px 0px 0px;
border: solid #DEDEE0 1px;
border-top-width: 0px; 
border-left-width: 0px;
border-right-width: 0px;  }

.account-information    { color: #6B7078 !important; background-color: #F9F9FA; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;border: solid #DEDEE0 1px; }
.find                   { background-color: #fff; padding-bottom: 5px;}

#side-1				{ float:left; width:639px; padding-top: 20px; padding-left: 20px; padding-right: 15px; padding-bottom: 50px;
background: #F9F9FA;
border-radius: 5px; 
-moz-border-radius: 5px; 
-webkit-border-radius: 5px; 
border: solid #DEDEE0 1px;
margin-right: 5px;}
#mid-inner #side-1	{ width:250px; padding-left:0; margin-left: -22px !important; }

.list				{ overflow:auto; margin-top:15px;
width: 627px;margin-left: 5px;
background-color: #F9F9FA;}
.list.top			{ 
margin-top:0; 
width: 627px;margin-left: 5px;
}
.list .name{ width:auto; height:30px; 
margin-top: 10px;
margin-bottom: 10px;
font-size: 16px !important;
border-bottom: 1px solid #000;
font-family: 'Raleway', sans-serif;
font-weight: 100;
padding-left: 20px; 
}
.list .name			{ color:#000; text-align: left;}
.list .item			{ float:left; width:23%; padding:10px 0 5px 0; min-height:28px; overflow:hidden; height:70px; border: 3px solid #F9F9FA; font-family: 'Raleway', sans-serif; }
.list .item:hover   { border-radius: 11px; -moz-border-radius: 11px; -webkit-border-radius: 11px; border: 3px solid #3BC8F5; background: #F6FCFF; text-decoration: none;}
.list .item .icon	{ margin-left:auto; margin-right:auto; }
.list .item a		{ display:block; margin:0 0 0 0px; text-decoration: none; }
.list .item a span	{  }
.list .item a:hover span	{ text-decoration: underline; }
.list .item a img	{ padding:5px; display:block; }
.list .item .label	{ display:block; width:100%; text-align:center; margin-top:3px;font-size: 11px; }
.list .sep			{ float:left; width:100%; font-size:0; height:0; }

.list .item span.icon { display: block; width: 32px; height: 32px;}

.list .item span.icon-0	{ background:url(/themes/x3/images/icon-0.png) 0px 0px no-repeat; }
.list .item span.icon-1	{ background:url(/themes/x3/images/icon-1.png) 0px 0px no-repeat; }
.list .item span.icon-2	{ background:url(/themes/x3/images/icon-2.png) 0px 0px no-repeat; }
.list .item span.icon-3	{ background:url(/themes/x3/images/icon-3.png) 0px 0px no-repeat; }
.list .item span.icon-4	{ background:url(/themes/x3/images/icon-4.png) 0px 0px no-repeat; }
.list .item span.icon-5	{ background:url(/themes/x3/images/icon-5.png) 0px 0px no-repeat; }
.list .item span.icon-6	{ background:url(/themes/x3/images/icon-6.png) 0px 0px no-repeat; }
.list .item span.icon-7	{ background:url(/themes/x3/images/icon-7.png) 0px 0px no-repeat; }
.list .item span.icon-8	{ background:url(/themes/x3/images/icon-8.png) 0px 0px no-repeat; }
.list .item span.icon-9	{ background:url(/themes/x3/images/icon-9.png) 0px 0px no-repeat; }
.list .item span.icon-10	{ background:url(/themes/x3/images/icon-10.png) 0px 0px no-repeat; }
.list .item span.icon-11	{ background:url(/themes/x3/images/icon-11.png) 0px 0px no-repeat; }
.list .item span.icon-12	{ background:url(/themes/x3/images/icon-12.png) 0px 0px no-repeat; }
.list .item span.icon-13	{ background:url(/themes/x3/images/icon-13.png) 0px 0px no-repeat; }
.list .item span.icon-14	{ background:url(/themes/x3/images/icon-14.png) 0px 0px no-repeat; }
.list .item span.icon-15	{ background:url(/themes/x3/images/icon-15.png) 0px 0px no-repeat; }
.list .item span.icon-16	{ background:url(/themes/x3/images/icon-16.png) 0px 0px no-repeat; }
.list .item span.icon-17	{ background:url(/themes/x3/images/icon-17.png) 0px 0px no-repeat; }
.list .item span.icon-18	{ background:url(/themes/x3/images/icon-18.png) 0px 0px no-repeat; }
.list .item span.icon-19	{ background:url(/themes/x3/images/icon-19.png) 0px 0px no-repeat; }
.list .item span.icon-20	{ background:url(/themes/x3/images/icon-20.png) 0px 0px no-repeat; }
.list .item span.icon-21	{ background:url(/themes/x3/images/icon-21.png) 0px 0px no-repeat; }
.list .item span.icon-22	{ background:url(/themes/x3/images/icon-22.png) 0px 0px no-repeat; }
.list .item span.icon-23	{ background:url(/themes/x3/images/icon-23.png) 0px 0px no-repeat; }
.list .item span.icon-24	{ background:url(/themes/x3/images/icon-24.png) 0px 0px no-repeat; }
.list .item span.icon-25	{ background:url(/themes/x3/images/icon-25.png) 0px 0px no-repeat; }
.list .item span.icon-26	{ background:url(/themes/x3/images/icon-26.png) 0px 0px no-repeat; }
.list .item span.icon-27	{ background:url(/themes/x3/images/icon-27.png) 0px 0px no-repeat; }
.list .item span.icon-28	{ background:url(/themes/x3/images/icon-28.png) 0px 0px no-repeat; }
.list .item span.icon-29	{ background:url(/themes/x3/images/icon-29.png) 0px 0px no-repeat; }
.list .item span.icon-30	{ background:url(/themes/x3/images/icon-30.png) 0px 0px no-repeat; }
.list .item span.icon-31	{ background:url(/themes/x3/images/icon-31.png) 0px 0px no-repeat; }
.list .item span.icon-32	{ background:url(/themes/x3/images/icon-32.png) 0px 0px no-repeat; }
.list .item span.icon-33	{ background:url(/themes/x3/images/icon-33.png) 0px 0px no-repeat; }
.list .item span.icon-34	{ background:url(/themes/x3/images/icon-34.png) 0px 0px no-repeat; }
.list .item span.icon-35	{ background:url(/themes/x3/images/icon-35.png) 0px 0px no-repeat; }
.list .item span.icon-36	{ background:url(/themes/x3/images/icon-36.png) 0px 0px no-repeat; }
.list .item span.icon-37	{ background:url(/themes/x3/images/icon-37.png) 0px 0px no-repeat; }
.list .item span.icon-38	{ background:url(/themes/x3/images/icon-38.png) 0px 0px no-repeat; }
.list .item span.icon-39	{ background:url(/themes/x3/images/icon-39.png) 0px 0px no-repeat; }
.list .item span.icon-40	{ background:url(/themes/x3/images/icon-40.png) 0px 0px no-repeat; }
.list .item span.icon-41	{ background:url(/themes/x3/images/icon-41.png) 0px 0px no-repeat; }
.list .item span.icon-cron-output	{ background:url(/themes/x1/images/icon-29.png) 0px 0px no-repeat; }
.list .item span.icon-mail-service-control { background:url(/themes/x3/images/icon-mail-service-control.png) 0px 0px no-repeat; }

#nav-left			{ list-style-type:none; padding:0; margin:0; }
#nav-left li		{ padding:13px 0 13px 45px; margin:0; font-weight:bold; font-size:14px; }
#nav-left li.sub	{ padding:4px 0 4px 45px; font-weight:normal; font-size:11px; }
#nav-left a			{ color:#3B6086; }
#nav-left a:hover, #nav-left a.s	{ color:#000; }
#nav-left a.s		{ font-weight:bold; }
#nav-left a.s:hover	{ text-decoration:none; }

#nav-left li.icon-0	{ background:url(/themes/x3/images/icon-small-0.png) 15px center no-repeat; }
#nav-left li.icon-1	{ background:url(/themes/x3/images/icon-small-1.png) 15px center no-repeat; }
#nav-left li.icon-2	{ background:url(/themes/x3/images/icon-small-2.png) 15px center no-repeat; }
#nav-left li.icon-3	{ background:url(/themes/x3/images/icon-small-3.png) 15px center no-repeat; }
#nav-left li.icon-4	{ background:url(/themes/x3/images/icon-small-4.png) 15px center no-repeat; }
#nav-left li.icon-5	{ background:url(/themes/x3/images/icon-small-5.png) 15px center no-repeat; }
#nav-left li.icon-6	{ background:url(/themes/x3/images/icon-small-6.png) 15px center no-repeat; }
#nav-left li.icon-7	{ background:url(/themes/x3/images/icon-small-7.png) 15px center no-repeat; }

ul.nav-left         { list-style-type:none; padding:0; margin:10px 15px; }
ul.nav-left li      { padding: 0; margin:0; font-weight:bold; font-size:14px; }
ul.nav-left li a    { padding: 8px 0 0 30px; display: block; height: 21px; background-repeat: no-repeat; background-position: left center ;}
ul.nav-left li ul   { list-style-type:none; padding:0; margin:8px 0 8px 28px; }
ul.nav-left li ul li a { padding: 2px; height: auto; font-weight:normal; font-size:11px;}
ul.nav-left a       { color:#3B6086; }
ul.nav-left li.active > a { color: #000}


ul.nav-left li a.icon-0	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/4124431aa7dbab6d95b74a3e3d3cb2ec.png); background-size: 24px;}
ul.nav-left li a.icon-1	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/f80113bc71adf0a561a1adedc0d8d938.png); background-size: 24px;}
ul.nav-left li a.icon-2	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/aa0048e3e58da250db9055b5e8665c96.png); background-size: 24px;}
ul.nav-left li a.icon-3	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/85381280fe563b875176169f99f0e555.png); background-size: 24px;}
ul.nav-left li a.icon-4	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/3d78ac55524f68a3fca6f91b38dcaa34.png); background-size: 24px;}
ul.nav-left li a.icon-5	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/dacf10c91b3c8906410713f04db7cdee.png); background-size: 24px;}
ul.nav-left li a.icon-6	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/bdea341585c8c5f9e242f55c573f9aef.png); background-size: 24px;}
ul.nav-left li a.icon-7	{ background-image:url(http://static.main-hosting.com/r/495/78/49578/icons/2925f3ed23d83865639930ae9ad1ef76.png); background-size: 24px;}

#side-2				{ float:left; width:309px; padding:0; padding-top: 10px; background: #fff;
border-radius: 7px; 
-moz-border-radius: 7px; 
-webkit-border-radius: 7px; 
border: 1px solid #ccc;
box-shadow:0px 2px 2px #dddddd;}
#mid-inner #side-2	{ width:710px; }
.layout-profile #mid-inner #side-2	{ width:950px; }

#side-2	.block:last-child {margin-bottom: 10px;}

.body               { padding: 12px 14px; }

.block				{ width:auto; padding:0 10px; margin-top: 10px;}
.block table		{ border-collapse:collapse; width:100%; margin-bottom:10px; }
.block td			{ padding:7px 0 5px 15px; font-size:12px; color:#2A2A2A; }
.block td.even		{ padding-right:15px; color:#747474; }
span.active		{ background:url(/themes/x3/images/active.gif) 0 center no-repeat; display:block; height:16px; padding:0 0 0 21px; color:#2DAA15; font-weight:bold; }
span.active.not, span.inactive	{ background:url(/themes/x3/images/inactive.gif) 0 center no-repeat; display:block; height:16px; padding:0 0 0 21px; color:#D65021; font-weight:bold;}

.client-profile { 
overflow: hidden; 
background: #F9F9FA;
border-radius: 5px; 
-moz-border-radius: 5px; 
-webkit-border-radius: 5px;
border: solid #DEDEE0 1px;}
.client-profile table		{ border-collapse:collapse; width:100%; margin-bottom:10px; }
.client-profile td			{ padding:7px 0 5px 10px; font-size:12px; color:#2A2A2A; }
.client-profile td.even	{ padding-right:15px; color:#747474; }

.cont				{ width:auto; padding:0 20px; overflow:auto;
}
.cont h1			{ font-size:18px; color:#3B6086; background:url(/themes/x3/images/h1.gif) 0 10px repeat-x; margin:15px 0 20px 0; }
.cont h1 span		{ background:#fff; padding-right:10px; }
.cont h2			{ font-size:14px; color:#3B6086; background:url(/themes/x3/images/h1.gif) 0 7px repeat-x; margin:10px 0 15px 0; padding:0; }
.cont h2 span		{ background:#fff; padding:0 10px 0 0; margin:0; }
.cont h2.head em	{ display:none; }
.cont h3			{ color:#3B6086; font-size:12px; font-weight:bold; padding-left:10px; margin-bottom:10px; }
.cont h4			{ font-size:13px; font-weight:bold; color:#3B6086; }
.cont table			{ border-collapse:collapse; margin-bottom:15px; width:auto; }
.cont a				{ color:#0066CC; text-decoration:underline; }
.cont a:hover		{ color:#4A95E0; }
.cont input			{ /* padding:0 10px; */ }
.cont p, .cont td, .cont li, .cont div	{ font-size:11px; }
.cont p				{ padding-left:10px; margin-bottom:10px; line-height:20px; }
.cont ul			{ padding:0 0 0 20px; margin:0 0 10px 0; list-style-type:none; }
.cont li			{ padding:0 0 0 10px; line-height:20px; margin:0; background:url(/themes/x3/images/square.gif) 0 center no-repeat; }
.cont input[type=text],
.cont input[type=password],
.cont textarea,
.cont select		{ background:#fff; border:1px solid #ddd; font-size:11px; padding:1px 5px 2px 5px; }
.cont select		{ padding:0; }
.cont .block		{ padding:0; margin:0;  border-top:0; }

ul.errors           { list-style-type: none; color: #E25F53; margin: 0; padding: 0;}
ul.errors li        { list-style: none; padding: 0px; background: none;}
.cont-wrap			{ margin-left:10px; margin-top:10px; }

table.type-1 td					{ padding:4px 10px 5px 10px; }
table.type-1 tr.even td		{  background:#f4f4f5;  }
table.type-1 tr.bot td			{ text-align:right; padding-right: 0px;}

table.type-2 td				{ padding:0 10px 0 10px; }

table.type-3 td				{ padding:3px 20px 3px 20px; background:#E9F3FE; vertical-align: top;}
table.type-3 tr.top td, table.type-3 tr:first-child td		{ padding-top:19px;}
table.type-3 tr.bot td, table.type-3 tr:last-child td		{ text-align:right; padding-bottom:19px; }
table.type-3 td input[type=text], table.type-3 td input[type=password], table.type-3 td textarea    	{ width:180px; }
table.type-3 td input[type=submit]    	{ float:right; }
table.type-3 td label.required:after    	{ content: ' *'; color:red;}

table.type-4 td				{ padding:3px 20px 3px 20px; }
table.type-4 tr.top td		{ padding-top:15px; }
table.type-4 tr.bot td		{ text-align:right; padding-bottom:19px; }
table.type-4 td input[type=text], table.type-4 td input[type=password],
table.type-4 td input.txt	{ width:100px; }
table.type-4 td input.generate,
table.type-4 td select		{ width:140px; }

td.password					{ text-align:center; color:#636363; }
td.password div				{ background:#fff url(/themes/x3/images/password.gif) 1px 1px no-repeat; border:1px solid #7F9DB9; height:7px; font-size:0; padding:1px; margin-bottom:5px; }

table.type-5					{ border:1px solid #D3D3D3; width:100%;  }
table.type-5 td					{ padding:7px 20px 8px 20px; border-top:1px solid #D3D3D3; text-align:center;}
table.type-5 td.right       	{ text-align:right;}
table.type-5 tr.head td			{background: #FAFAF9 !important; color:#999; text-align:center; padding:7px 5px 8px 5px; }
table.type-5 tr.even td		{ background:#f4f4f5; }
table.type-5 tr.bot td			{ text-align:right; }
table.type-5 tr.bot td input	{ /*margin-right:-10px;*/ }

.cont .per-page				{ padding-left:0; margin-bottom:20px; }
.cont .per-page select		{ vertical-align:middle; margin-right:20px; }

.cont .host			{ border:1px solid #D5D5D5; position:relative; background:url(/themes/x3/images/host.gif) 22px 39px no-repeat; margin-top:2px; margin-bottom:15px; }
.cont .host span	{ position:absolute; background:#fff; padding:0 5px; top:-6px; left:17px; }
.cont .host div		{ padding:27px 0 27px 65px; }

table.type-6					{ width:100%; border: 1px solid #bbb; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;  box-shadow:0px 2px 4px #ccc;}
table.type-6 td					{ padding:4px 20px 5px 20px; background:#fff; line-height:20px; }
table.type-6 tr.top td			{ padding-top:15px; }
table.type-6 tr.bot td			{ padding-bottom:14px; }
table.type-6 tfoot td           { text-align: right; }
table.type-6 tbody td textarea  { width: 100%; }

table.type-7 td					{ padding:102px 30px 20px 30px; }
table.type-7 input				{ width:123px; }
table.type-7 td.style-x1			{ background:url(/themes/x3/images/style-1.png) center top no-repeat; }
table.type-7 td.style-x2			{ background:url(/themes/x3/images/style-2.png) center top no-repeat; }
table.type-7 td.style-x3			{ background:url(/themes/x3/images/style-3.png) center top no-repeat; }
table.type-7 td.style-xx			{ background:url(/themes/x3/images/style-3.png) center top no-repeat; }

#foot						{ width:100%; text-align:center; }
#bef-cop					{ width:920px; margin:0 auto; padding:17px 20px 17px 20px; font-size:12px; color:#fff; }

#youhosting-paginator {
	display:block;
	text-align:left;
	height:22px;
	line-height:21px;
	clear:both;
	padding-top:3px;
	font-size:12px;
	font-weight:normal;
}

#youhosting-paginator ul,
#youhosting-paginator ul li{
    margin: 0;
    padding: 0;
}

#youhosting-paginator ul li{
    display: inline;
    background: none;
}

#youhosting-paginator a:link, #youhosting-paginator a:visited{
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #EBEBEB;
	margin-left:10px;
	text-decoration:none;
	background-color:#F5F5F5;
	color:#0072bc;
	width:22px;
	font-weight:normal;
}

#youhosting-paginator a:hover {
	background-color:#DDEEFF;
	border:1px solid #BBDDFF;
	color:#0072BC;
}

#youhosting-paginator ul li.active a {
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #BBDDFF;
	margin-left:10px;
	text-decoration:none;
	background-color:#DDEEFF;
	color:#0072BC;
	cursor:default;
}

div.cont .block.ssh_cli {
    margin-bottom: 10px;
    overflow: hidden;
}

div.ssh_cli textarea {
    width: 655px;
}

div.ssh_cli textarea,
div.ssh_cli #command,
div.ssh_cli div.dark,
div.ssh_cli #cwd {
    font-size: 14px;
    font-family: courier;
    background-color: #000;
    color: #fff;
    margin: 0;
    padding: 2px 0 2px 5px;
    border: 0;
}

div.ssh_cli div.dark {
    border-top: 1px solid white;
    display: block;
    overflow: hidden;
    height: 21px;
}

#cwd {
    height:20px;
    text-align:right;
    white-space: nowrap;
}

#cwd,
div.ssh_cli #command {
    display: block;
    float: left;
/*    width: 48%;*/
}

div.ssh_cli_comm {
    padding: 10px;
    margin-top: 10px;
}

div.ssh_cli_comm dl dd {
    margin-bottom: 20px;
}

div.ssh_cli_comm dl dd dl dd{
    margin:-13px 0 10px 64px;
}

button.clear_cli,
button.comm {
    width: 100px;
    margin: 2px;
}

#basic-modal-content {display:none;}

/* Overlay */
#simplemodal-overlay {background-color:#E6F0FC; cursor: wait;}

/* Container */
#simplemodal-container, #loading-mask .loader { background-color:#fff; border:6px solid #29465F; padding:12px;}
#simplemodal-container code {background:#141414; border-left:3px solid #65B43D; display:block; margin-bottom:12px; padding:4px 6px 6px;}
#simplemodal-container a.modalCloseImg {background:url(/themes/x3/images/x.png) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
#simplemodal-container #basic-modal-content {padding:8px;}

#loading-mask
{
    position:absolute;
    color:#d85909;
    font-size:1.1em;
    font-weight:bold;
    text-align:center;
    opacity:0.80;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)"; /* IE8 */
    z-index:500;
}

.loader {
    background: url(/themes/x3/images/progress-bar.gif) no-repeat center center;
}

#loading-mask .loader
{
    position:fixed;
    top:45%;
    left:50%;
    width:150px;
    height:50px;
    margin:-25px 0 0 -75px;
    padding:15px 60px;
    font-weight:bold;
    text-align:center;
    z-index:1000;
}

/* -------------------------------------------
		NOTIFICATIONS
-------------------------------------------- */

.msg  {
    margin:0px 0 10px 10px !important;
    padding:5px 0px 5px 5px !important;
	background-position: 15px center;
	background-repeat: no-repeat;
    cursor: default;
    width: 96%; 
    font-family: 'Raleway', sans-serif;
}

.msg.warn {
	border: 1px solid #FFC237;
	color: #826200;
}

.msg.success {
	border: 1px solid #99C600;
	color: #355a00;
	background-color: #EAFFCE;
}

.msg.error {
	border: 1px solid #FF4CF6;
	color: #4F1744;
	background-color: #ffcffd;
}

.msg.info {
	border: 1px solid #49FFE9;
	color: #005449;
	background-color: #C6FFF9;
}
.msg h5 {
    margin:0;
    padding:5px 0px;
    font-size:1.0em;
    line-height:1.7em;
}

.msg p {
    line-height:18px !important;
    margin:0 0 10px !important;
    padding:0 !important;
}
.msg .close {
    text-decoration: none;
    float: right;
    margin: 0 5px;
    color: inherit;
}

.attention {
    width: 16px;
    height: 16px;
    display: inline-block;
    background-image: url(/themes/x2/images/attention.png);
    background-repeat: no-repeat;
}

#progress_bars {
    margin: 10px 20px;
}

/* Payment gateways */

.pg-Custom,
.pg-PayPalEmail,
.pg-Payza,
.pg-TwoCheckout,
.pg-Interkassa,
.pg-WebMoney,
.pg-LibertyReserve,
.pg-Skrill,
.pg-DineroMail{
    background-repeat: no-repeat;
    width: 135px;
    height: 70px;
    background-position: center center;
    text-indent: -999px;
    /* IE fix*/
    font-size: 0;
    display: inline-block;
    line-height: 0;
}
.pg-PayPalEmail { background-image: url(/themes/x3/images/gateways/PayPalEmail.png); }
.pg-Payza { background-image: url(/themes/x3/images/gateways/Payza.png); }
.pg-TwoCheckout { background-image: url(/themes/x3/images/gateways/TwoCheckout.png); }
.pg-WebMoney { background-image: url(/themes/x3/images/gateways/WebMoney.png); }
.pg-Custom { background-image: url(/themes/x3/images/gateways/Custom.png); }
.pg-Interkassa { background-image: url(/themes/x1/images/gateways/Interkassa.png); }
.pg-Skrill { background-image: url(/themes/x1/images/gateways/Skrill.png); }
.pg-LibertyReserve { background-image: url(/themes/x1/images/gateways/LibertyReserve.png); }
.pg-DineroMail { background-image: url(/themes/x1/images/gateways/DineroMail.png); }

/* Progress bar actions */
div.res-link {
    float: right;
}
div.action span.fail {
    background-image: url(/themes/x3/images/error.png);
    display: block;
    width: 16px;
    height: 16px;
}

.jeditor {
    width: 632px;
}

/* Public ticket form */
#api-public-ticket form {
    margin-top: 20px;
}

#api-public-ticket form fieldset {
    border: 0;
}

#api-public-ticket form legend {
    display: none;
}

#api-public-ticket form .api_input {
    margin: 10px 0;
}

#api-public-ticket form .api_input input,
#api-public-ticket form .api_input textarea{
    width: 200px;
}
#api-public-ticket form label {
    display: block;
    margin: 0 0 3px 0;
}
#api-public-ticket img.api_captcha {
    display: block;
}

.cont h1 {
	display:none;
}

ul#referrals-menu {
	display:block;
	width:100%;
	position:relative;
	float:left;
	padding-left:15px;
}

ul#referrals-menu li {
	width:auto;
	margin:0 10px;
	position:relative;
	display:block;
	float:left;
}

ul#referrals-menu li.first {
	margin-left:0;
}

table.banner-list td.title {
	width:120px;
	padding:10px;
}

table.banner-list td.content {
	text-align:left;
}

p.center {
    text-align:center;
}

.auto-width {
    display:inline;
    width:auto;
}


input#phone_cc {
    width:28px;
}
/*Auto Installer*/
.ai-software {
    display: block;
    float: left;
    width: 80px;
    height: 80px;
    padding: 15px 25px 35px 25px;
    margin: 16px;
    background-color: white;
    text-align: center;
    text-decoration: none !important;
    color: #666;
}
.ai-software-icon {
    width: 80px;
    height: 80px;
    border: 3px solid #3BC8F5; background: #F6FCFF;
    border-radius: 17px; -moz-border-radius: 17px; -webkit-border-radius: 17px;
    box-shadow:0px 2px 4px #ccc;
    background-color: #FFF;
    background-position: -1000px 0px;   
    background-image:url('/images/software/all.jpg');
    text-decoration: none !important;
}
.ai-software-label {
    margin: 4px 0px;
    line-height: 14px;
    text-decoration: none !important;
    color: #3BC8F5;
}
.ai-software-tooltip{
    display:none; 
    padding:2px 3px; 
    margin-left:-88px; 
    width:130px;
    text-decoration: none !important;
    color: #3BC8F5 !important;
    box-shadow:0px 2px 4px #ccc;
    border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;

}
.ai-software:hover .ai-software-tooltip{
    font-size: 11px;
    padding: 8px;
    width: 240px;
    text-align: left;
    display: inline;
    position: absolute;
    background: white;
    border: 1px solid #CCC;
    overflow: visible;
    z-index: 99999999;
    text-decoration: none !important;
}
/* Auto Installer Icons */
.ai-software-icon-wordpress {
 background-position: -0px 0px;
}
.ai-software-icon-joomla {
 background-position: -80px 0px;
}
.ai-software-icon-phpbb {
 background-position: -160px 0px;
}
.ai-software-icon-smf {
 background-position: -240px 0px;
}
.ai-software-icon-coppermine {
 background-position: -320px 0px;
}
.ai-software-icon-b2evolution {
 background-position: -400px 0px;
}
.ai-software-icon-mambo {
 background-position: -480px 0px;
}
.ai-software-icon-mybb {
 background-position: -560px 0px;
}
.ai-software-icon-oscommerce {
 background-position: -640px 0px;
}
.ai-software-icon-zencart {
 background-position: -720px 0px;
}
.ai-software-icon-concrete {
 background-position: -800px 0px;
}
.ai-software-icon-drupal {
 background-position: -880px 0px;
}
.ai-software-icon-jcow {
 background-position: -960px 0px;
}
.ai-software-icon-mediawiki {
 background-position: -1040px 0px;
}
.ai-software-icon-moodle {
 background-position: -1120px 0px;
}
.ai-software-icon-openblog {
 background-position: -1200px 0px;
}
.ai-software-icon-piwigo {
 background-position: -1280px 0px;
}
.ai-software-icon-piwik {
 background-position: -1360px 0px;
}
.ai-software-icon-prestashop {
 background-position: -1440px 0px;
}
.ai-software-icon-punbb {
 background-position: -1520px 0px;
}
.ai-software-icon-aef {
 background-position: -1600px 0px;
}
.ai-software-icon-buddypress {
 background-position: -1680px 0px;
}
.ai-software-icon-contao {
 background-position: -1760px 0px;
}
.ai-software-icon-dotclear {
 background-position: -1840px 0px;
}
.ai-software-icon-gallery3 {
 background-position: -1920px 0px;
}
.ai-software-icon-lazarusgb {
 background-position: -2000px 0px;
}
.ai-software-icon-osticket {
 background-position: -2080px 0px;
}
.ai-software-icon-pligg {
 background-position: -2160px 0px;
}
.ai-software-icon-sharetronix {
 background-position: -2240px 0px;
}
.ai-software-icon-zenphoto {
 background-position: -2320px 0px;
}
.ai-software-icon-cmsmadesimple {
 background-position: -2400px 0px;
}
.ai-software-icon-zikula {
 background-position: -2480px 0px;
}
.ai-software-icon-dokuwiki {
 background-position: -2560px 0px;
}
.ai-software-icon-tinywebgallery {
 background-position: -2640px 0px;
}
.ai-software-icon-limesurvey {
 background-position: -2720px 0px;
}
.ai-software-icon-glfusion {
 background-position: -2800px 0px;
}
.ai-software-icon-kplaylist {
 background-position: -2880px 0px;
}
.ai-software-icon-podcast {
 background-position: -2960px 0px;
}
.ai-software-icon-fengoffice {
 background-position: -3040px 0px;
}
.ai-software-icon-gregarius {
 background-position: -3120px 0px;
}
.ai-software-icon-pyrocms {
 background-position: -3200px 0px;
}
.ai-software-icon-boxbilling {
 background-position: -3280px 0px;
}
.ai-software-icon-chyrp {
 background-position: -3360px 0px;
}
.ai-software-icon-pixie {
 background-position: -3440px 0px;
}
.ai-software-icon-adaptcms {
 background-position: -3520px 0px;
}
.ai-software-icon-seopanel {
 background-position: -3600px 0px;
}
.ai-software-icon-websitebaker {
 background-position: -3680px 0px;
}
.ai-software-icon-imm {
 background-position: -3760px 0px;
}
.ai-software-icon-tikiwiki {
 background-position: -3840px 0px;
}
.ai-software-icon-pivotx {
 background-position: -3920px 0px;
}

.green-bar {
    height: 15px;
    border-radius: 15px; 
-moz-border-radius: 15px; 
-webkit-border-radius: 15px;
background: #bfd255; /* Old browsers */
background: -moz-linear-gradient(top,  #bfd255 0%, #8eb92a 96%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bfd255), color-stop(96%,#8eb92a)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #bfd255 0%,#8eb92a 96%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #bfd255 0%,#8eb92a 96%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #bfd255 0%,#8eb92a 96%); /* IE10+ */
background: linear-gradient(to bottom,  #bfd255 0%,#8eb92a 96%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfd255', endColorstr='#8eb92a',GradientType=0 ); /* IE6-9 */
min-width: 15px:
}
.yellow-bar {
    height: 15px;
    border-radius: 15px; 
-moz-border-radius: 15px; 
-webkit-border-radius: 15px;
background: #d6b566; /* Old browsers */
background: -moz-linear-gradient(top,  #d6b566 0%, #d0b830 96%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d6b566), color-stop(96%,#d0b830)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #d6b566 0%,#d0b830 96%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #d6b566 0%,#d0b830 96%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #d6b566 0%,#d0b830 96%); /* IE10+ */
background: linear-gradient(to bottom,  #d6b566 0%,#d0b830 96%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d6b566', endColorstr='#d0b830',GradientType=0 ); /* IE6-9 */
min-width: 15px:

}
.red-bar {
    height: 15px;
    border-radius: 15px; 
-moz-border-radius: 15px; 
-webkit-border-radius: 15px;
background: #d25463; /* Old browsers */
background: -moz-linear-gradient(top,  #d25463 0%, #ba2f2a 96%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d25463), color-stop(96%,#ba2f2a)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #d25463 0%,#ba2f2a 96%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #d25463 0%,#ba2f2a 96%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #d25463 0%,#ba2f2a 96%); /* IE10+ */
background: linear-gradient(to bottom,  #d25463 0%,#ba2f2a 96%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d25463', endColorstr='#ba2f2a',GradientType=0 ); /* IE6-9 */
min-width: 15px:
}
#diskUsageProgressBar {
    height: 15px;
    width: 95%;
    border: 1px solid #ccc;
    border-radius: 15px; 
-moz-border-radius: 15px; 
-webkit-border-radius: 15px;
background: #e5e5e5; /* Old browsers */
background: -moz-linear-gradient(top,  #e5e5e5 0%, #ffffff 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e5e5e5), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #e5e5e5 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #e5e5e5 0%,#ffffff 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #e5e5e5 0%,#ffffff 100%); /* IE10+ */
background: linear-gradient(to bottom,  #e5e5e5 0%,#ffffff 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e5e5', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */

}
#BandwidthProgressBar {
    height: 15px;
    width: 95%;
    border: 1px solid #ccc;
    border-radius: 15px; 
-moz-border-radius: 15px; 
-webkit-border-radius: 15px;
background: #e5e5e5; /* Old browsers */
background: -moz-linear-gradient(top,  #e5e5e5 0%, #ffffff 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e5e5e5), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #e5e5e5 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #e5e5e5 0%,#ffffff 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #e5e5e5 0%,#ffffff 100%); /* IE10+ */
background: linear-gradient(to bottom,  #e5e5e5 0%,#ffffff 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e5e5', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */

}

span.tree-element {
    display: inline-block;
    width: 16px;
    height: 11px;
    background-image: url(/themes/x3/images/tree_element.gif);
}
div.rateit
{
    display: -moz-inline-box;
    display: inline-block;
    position: relative;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -o-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
}

div.rateit div.rateit-range
{
    position: relative;
    display: -moz-inline-box;
    display: inline-block;
    background: url(images/star.gif);
    height: 16px;
}

/* for IE 6 */
* html div.rateit, * html div.rateit div.rateit-range
{
    display: inline;
}

/* for IE 7 */
* + html div.rateit, * + html div.rateit div.rateit-range
{
    display: inline;
}

div.rateit div.rateit-hover, div.rateit div.rateit-selected
{
    position: absolute;
    left: 0px;
}

div.rateit div.rateit-hover-rtl, div.rateit div.rateit-selected-rtl
{
    left: auto;
    right: 0px;
}

div.rateit div.rateit-hover
{
    background: url(images/star.gif) left -32px;
}

div.rateit div.rateit-hover-rtl
{
    background-position: right -32px;
}

div.rateit div.rateit-selected
{
    background: url(images/star.gif) left -16px;
}

div.rateit div.rateit-selected-rtl
{
    background-position: right -16px;
}

div.rateit div.rateit-preset
{
    background: url(images/star.gif) left -48px;
}

div.rateit div.rateit-preset-rtl
{
    background: url(images/star.gif) left -48px;
}

div.rateit div.rateit-reset
{
    background: url(images/del.gif) 0 0;
    width: 16px;
    height: 16px;
    display: -moz-inline-box;
    display: inline-block;
    float: left;
}

div.rateit div.rateit-reset:hover
{
    background-position: 0 -16px;
}

#clear_findInput {
    float:left; 
    margin: 6px 0px 0px -17px; 
    cursor: pointer; 
    display: none;
}
.invoice_details td {
    border: none !important;
}
.invoice_details {
    vertical-align: top;
    width: 50%;
    padding: 0px;
    margin: 0px;
}
/* Popup */
.jGrowl-notification .header{width: 210px; height: 70px; }</style>

<?php echo'<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>  <script type="text/javascript" src="/scripts/functions.js"></script>  <link href="/scripts/jgrowl/jquery.jgrowl.css" media="screen" rel="stylesheet" type="text/css" /> <script type="text/javascript" src="/scripts/jquery.progressbar/jquery.progressbar.min.js"></script>
</head>
<body>
<!-- Superbar -->
<div class="header">
<div class="superbar">    
<center>       
<table style="width: 90%;"><tr>
<td style="horizontal-align: left; text-align: left;"><input class="supersearch" id="findInput" type="text" placeholder="'.$placeholder.'"></td>
<td style="horizontal-align: center; text-align: center;"><div style="color:#3BC8F5; font-size: 34px; font-weight: 500; font-family: \'Raleway\', sans-serif; height: 40px; padding-top: 5px; padding-left: 3%;">cyandark</font></td>
<td style="color: #6B7078; horizontal-align: right; text-align: right;"><b>'.$name.'</b> - '.$mail.'</td>
<tr></table></center>
</div>

<div class="superbar" style="height: 40px;">
<center>
<table style="width: 90%;"><tr>
<td style="padding-top: 4px;"><table id="top-menu">
    <tr>
        <td class="ls"></td>

        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/profile" title="Editar mi perfil">'.$profile.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/switcher" title="Select account to manage">'.$hosting.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/domains-manager" title="Gestion de dominios">'.$domains.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/invoices" title="Facturas">'.$invoices.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/knowledgebase" title="FAQ">'.$faq.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/news" title="Noticias">'.$news.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/helpdesk" title="Ayuda">'.$help.'</a></td>
        <td class="sep "></td>


        <td class=""><a class=" " href="http://cpanel.'.$_SERVER['SERVER_NAME'].'/auth/logout" title="Cerrar sesión">'.$logout.'</a></td>
        <td class="sep "></td>

        <td class="rs"></td>
    </tr>
</table></td>
<td style="float: right;"><div class="selectdecorated" style=" margin-top: 4px; "><form class="jform_select" id="lang_selector_form" action="/public/set-language" method="post"><label for="lang_selector"><span>Elegir idioma</span></label><select name="lang" id="lang_selector">
    <option value="es" selected="selected">'.$current_lang.'</option>
</select></form></div></td>
<tr></table></center>
</div></div>
<!-- End Superbar -->

<center>

                
		<div class="container">  
                <div id="mid">
					<div id="side-1" style="margin-top: 10px; width: 920px;">
<div class="head" style=" margin-top: -20px; margin-bottom: 20px; margin-left: -20px; padding-right: 20px; width: 925px; ">Whois</div>

            '.$desc.'
                             			<br><br>';
                             			
			if($_GET['check'] == 'true'){
			echo'<iframe src="whois/example.php?query='.$_GET['web'].'&output=normal" style=" width: 100%; height: 710px; border-top-width: 0px; border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px; "></iframe>';
			echo $puta;
			}
			else{
			echo'<form method="GET" action="whois.php">
			<center>
			<table style="margin-left: -70px;"><tr>
			<td style="font-size: 15px; font-weight: bold;">Web:</td>
			<td><input type="text" name="web" id="web" placeholder="example.com" value="" style="margin-left: 10px; margin-top: 12px; width: 100%; font-size: 23px; font-weight: 200; height: 23px; padding: 10px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"></td>
			</tr></table>
			<input type="submit" name="submit" id="submit" value="'.$go.'"></center>
			<input type="text" name="check" id="check" style="display:none;" value="true">
			<input type="text" name="name" id="name" style="display:none;" value="'.$name.'">
			<input type="text" name="email" id="email" style="display:none;" value="'.$mail.'">
			</form>';}
			
                 					echo'</div>
            		</div>

            <div id="foot"><div id="bef-cop"><font color="#999999"><b>CyanDark,Inc. All Rights Reserved.</b></font></div></div>
            <div id="loading-mask" style="display:none;"><div class="loader"></div></div>
            <div id="mb" style="display:none;"><!-- modal box --></div>
	</div></center>


</body>
</html>';

?>