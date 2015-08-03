//Help URL
var helpurl = '//cyandark.com/cpanel/installatron.php?help=true&lang='+lang;


if(panelurl.match(/install/g) && panelurl.match(/software/g)){ $('.type-4').attr('style', ' margin-bottom: 0px; padding-top: 10px; padding-bottom: 10px; border-bottom-width: 0px;'); $('form .type-4').attr('style', ' border-bottom-width: 1px; border-top-width: 0px; margin-top: 0px; padding-top: 10px; padding-bottom: 10px; ');}
var text = $('.account-information').text();
	var pattern = /Información/;
	var exists = pattern.test(text);

	if(exists){
	var ininst = 'Disponible en Installatron';
	var exists = 'Esta aplicación se encuentra disponible en Installatron, Pulsa el boton Instalar para Ir a la instalación desde Installatron. <br> Si necesitas ayuda, puedes dar clic <a target="_blank" href="'+helpurl+'">aqui.</a>';
	var desc = 'Cualquiera o todas estas aplicaciones web pueden agregarse a su sitio web, incluyendo múltiples instalaciones de cada uno.<br>Software diseñado para administrar, mejorar o agregar funcionalidad a un sitio Web. Los ejemplos incluyen foros, blogs, foros, galerías de imágenes y sistemas de comercio electrónico.<br>a instalar una aplicación, seleccione el software de la lista y haga clic en el botón instalar.<br><br><b>CyanDark ofrece su propio instalador automático además de Installatron, seleccione un Software para instalar y usted puede elegir si desea instalarlo con el instalador automático CyanDark o Installatron.</b>';
	var lang = 'es';
	var instwithinst = 'Instalar con Installatron';
	var screensho = 'Capturas de Pantalla';
	var infobtn = 'Informacion';
	var demobtn = 'Demostracion';
	var helpbtn = 'Ayuda';
	} else {
	var ininst = 'Available in Installatron';
	var lang = 'en';
	var screensho = 'Screenshots';
	var instwithinst = 'Install with Installatron';
	var infobtn = 'Information';
	var demobtn = 'Demostration';
	var helpbtn = 'Help';
	var exists = 'This application is available in Installatron, press the install button to go to the installation from Installatron. <br>If you need help, you can click <a target="_blank" href="'+helpurl+'"> here.</a>';
	var desc = 'Any or all of these web applications can be added to your website, including multiple installs of each.<br>Software designed to manage, enhance, or add functionality to a website. Examples include blogs, guestbooks, forums, image galleries, and e-commerce systems.<br>To install an application; select the software from the list and click its install button.<br><br><b>CyanDark offers its own auto-installer besides Installatron, select a Software to install and you can choose whether to install it with CyanDark Auto Installer or Installatron.</b>';}

var panelurl = document.URL;
if(panelurl.match(/auto-installer/g) && !panelurl.match(/software/g)){
$(".cony-wrap").prepend('<div class="block blck2" style="border: 1px solid #00c0ef !important; padding-bottom: 10px; margin-bottom: 10px;"><h2 class="head icon-5" style="margin-top: 0px;"><span>Installatron</span></h2><div style=" margin-top: 20px; padding-left: 20px; "><img style=" margin-bottom: 10px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAAAeCAYAAABDj6ADAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MTM4QkQzRUY1MTg0MTFFMjkyNzFFOTJEQTc4NkYxQzgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MTM4QkQzRjA1MTg0MTFFMjkyNzFFOTJEQTc4NkYxQzgiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMzhCRDNFRDUxODQxMUUyOTI3MUU5MkRBNzg2RjFDOCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxMzhCRDNFRTUxODQxMUUyOTI3MUU5MkRBNzg2RjFDOCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhZZFjkAACSxSURBVHja5H0JeBPV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" /><br>'+desc+'<div class="clear"></div></div></div><hr style=" margin-top: 10px; margin-bottom: 10px; ">');
} else {
if(panelurl.match(/install/g) && panelurl.match(/software/g)){

var installatron_id = '404';
var imgtype;

if(panelurl.match("software/1") && !panelurl.match("software/17")){installatron_id = 'wordpress'; imgtype = 'png';}
if(panelurl.match("software/2") && !panelurl.match("software/21")){installatron_id = 'joomla'; imgtype = 'jpg';}
if(panelurl.match("software/3") && !panelurl.match("software/30") && !panelurl.match("software/37") ){installatron_id = 'phpbb'; imgtype = 'gif';}
if(panelurl.match("software/4") && !panelurl.match("software/45") && !panelurl.match("software/47") && !panelurl.match("software/46")){installatron_id = 'smf'; imgtype = 'jpg';}
if(panelurl.match("software/6")){installatron_id = 'coppermine'; imgtype = 'jpg';}
if(panelurl.match("software/7")){installatron_id = 'b2evolution'; imgtype = 'png';}
if(panelurl.match("software/48")){installatron_id = 'seopanel'; imgtype = 'png';}
if(panelurl.match("software/36")){installatron_id = 'limesurvey'; imgtype = 'jpg';}
if(panelurl.match("software/25")){installatron_id = 'dotclear'; imgtype = 'png';}
if(panelurl.match("software/19")){installatron_id = 'piwik'; imgtype = 'png';}
if(panelurl.match("software/52")){installatron_id = 'boxbilling'; imgtype = 'png';}
if(panelurl.match("software/40")){installatron_id = 'fengoffice'; imgtype = 'gif';}
if(panelurl.match("software/28")){installatron_id = 'osticket'; imgtype = 'png';}
if(panelurl.match("software/54")){installatron_id = 'pivot'; imgtype = 'gif';}
if(panelurl.match("software/8")){installatron_id = 'mambo'; imgtype = '404';}
if(panelurl.match("software/12")){installatron_id = 'concrete'; imgtype = 'jpg';} 
if(panelurl.match("software/13")){installatron_id = 'drupal'; imgtype = 'jpg';} 
if(panelurl.match("software/24")){installatron_id = 'contao'; imgtype = 'jpg';}
if(panelurl.match("software/29")){installatron_id = 'pligg'; imgtype = 'png';}
if(panelurl.match("software/32")){installatron_id = 'cmsmadesimple'; imgtype = 'png';}
if(panelurl.match("software/33")){installatron_id = 'zikula'; imgtype = 'png';}
if(panelurl.match("software/15")){installatron_id = 'mediawiki'; imgtype = 'gif';}
if(panelurl.match("software/43")){installatron_id = 'pyrocms'; imgtype = 'png';} 
if(panelurl.match("software/51")){installatron_id = 'tikiwiki'; imgtype = 'jpg';}
if(panelurl.match("software/53")){installatron_id = 'websitebaker'; imgtype = 'jpg';}
if(panelurl.match("software/10")){installatron_id = 'oscommerce'; imgtype = 'gif';}
if(panelurl.match("software/11")){installatron_id = 'zencart'; imgtype = 'gif';}
if(panelurl.match("software/20")){installatron_id = 'prestashop'; imgtype = 'jpg';} 
if(panelurl.match("software/16")){installatron_id = 'moodle'; imgtype = 'png';}
if(panelurl.match("software/9")){installatron_id = 'mybb'; imgtype = 'gif';}
if(panelurl.match("software/34")){installatron_id = 'dokuwiki'; imgtype = 'gif';}
if(panelurl.match("software/18")){installatron_id = 'piwigo'; imgtype = 'jpg';}
if(panelurl.match("software/26")){installatron_id = 'gallery'; imgtype = 'jpg';}
if(panelurl.match("software/31")){installatron_id = 'zenphoto'; imgtype = 'jpg';}
if(panelurl.match("software/42")){installatron_id = 'tinywebgallery'; imgtype = 'png';}
if(panelurl.match("software/27")){installatron_id = 'advancedguestbook'; imgtype = 'jpg';}

if(installatron_id == '404'){
}
else{
var demourl = 'https://secure.installatron.com/'+installatron_id+'/demo';
demourl = '//cyandark.com/cpanel/installatron.php?install=true&hash='+window.btoa(demourl);
var scren = '//secure.installatron.com/images/remote/ss1_'+installatron_id+'.'+imgtype;
var scren2 = '//secure.installatron.com/images/remote/ss2_'+installatron_id+'.'+imgtype;

var insturl = '//secure.installatron.com/apps#cmd=install&installer='+installatron_id;
insturl = '//cyandark.com/cpanel/installatron.php?install=true&hash='+window.btoa(insturl);

var infourl = '//cyandark.com/cpanel/installatron.php?script='+installatron_id;

if(installatron_id == 'pivot'){scren2 = '//secure.installatron.com/images/remote/ss2_'+installatron_id+'.jpg';}
if(installatron_id == 'zencart'){scren = '//secure.installatron.com/images/remote/ss1_'+installatron_id+'.jpg';}
if(installatron_id == 'moodle'){scren = '//secure.installatron.com/images/remote/ss1_'+installatron_id+'.gif';}

if(imgtype == '404'){scren = '//cdn.cyandark.com/images/image-not-found.png'; scren2 = '//cdn.cyandark.com/images/image-not-found.png';}

$(".cony-wrap").prepend('<div class="block blck2" style="border: 1px solid #00c0ef !important; padding-bottom: 10px; margin-bottom: 10px;"><h2 class="head icon-5" style="margin-top: 0px;"><span>'+ininst+'</span></h2><div style=" margin-top: 20px; padding-left: 20px; padding-right: 20px; ">'+exists+' <br><br><font style="font-weight: 100; font-size: 17px;">'+screensho+'</font> <hr style=" margin-top: 0px; margin-bottom: 10px; "> <table style="width: 100%;"><tr><td style=" padding-right: 5px; padding-left: 0px;"><img src="'+scren+'" style="width: 100%;"/></td><td style=" padding-left: 5px; "><img src="'+scren2+'" style="width: 100%;"/></td></tr></table> <hr> <table style=" margin-top: -10px; margin-bottom: 0px; margin-left: -10px; "><tr><td><a href="'+insturl+'"><button class="btn btn-danger btn-flat" style="background: #f56954 !important; ">'+instwithinst+'</button></a></td><td><a href="'+demourl+'" target="_new"><button class="btn btn-warning btn-flat" style="background: #e08e0b !important; ">'+demobtn+'</button></a></td><td><a href="'+infourl+'" target="_new" onClick="window.open(this.href, \'_blank\', \'width=1040,height=580\'); return false;"><button style="background: #85144b !important; margin-left: 0px; " class="btn bg-maroon btn-flat margin">'+infobtn+'</button></a></td><td><a href="'+helpurl+'" target="_new" onClick="window.open(this.href, \'_blank\', \'width=900,height=580\'); return false;"><button class="btn btn-info btn-flat" style="background: #00c0ef !important; margin-left: -10px;">'+helpbtn+'</button></a></td></tr></table> <div class="clear"></div></div></div>');
}

} 
}


//Softaculous

var panelurl = document.URL;
if(panelurl.match(/auto-installer/g) && panelurl.match(/softaculous/g)){
	$(".cony-wrap").hide();
	$("#softaculous").show();
	
	var text = $('.account-information').text();
	var pattern = /Información/;
	var exists = pattern.test(text);

	if(exists){
		var domain = $('.account-information td:contains("Dominio:")').next().text();
		var user = $('.account-information td:contains("Usuario:")').next().text();
		$("#soft_domain").val(domain);
		$("#soft_user").val(user);
	} else {
		var domain = $('.account-information td:contains("Domain:")').next().text();
		var user = $('.account-information td:contains("Username:")').next().text();
		$("#soft_domain").val(domain);
		$("#soft_user").val(user);
	}
	
	$('.insert_title').text('Softaculous Auto Installer');
    document.title = 'CyanDark, Inc. | Softaculous Auto Installer';
	
}


