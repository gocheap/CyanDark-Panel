 var text = $('.account-information').text();
		var pattern = /Información/;
		var exists = pattern.test(text);

		if(exists){

			$(document).ready(function(){
				var replaced = $('div[class="small-box bg-aqua"]').html().replace(/PHP Version/g,'Version de PHP');
				$('div[class="small-box bg-aqua"]').html(replaced);
				 
				var replaced = $('div[class="small-box bg-aqua"]').html().replace(/More info/g,'Mas informacion');
				$('div[class="small-box bg-aqua"]').html(replaced); 
				 
				var replaced = $('div[class="small-box bg-green"]').html().replace(/Bounce Rate/g,'Tasa de Rebote');
				$('div[class="small-box bg-green"]').html(replaced); 
				 
				var replaced = $('div[class="small-box bg-green"]').html().replace(/More info/g,'Mas informacion');
				$('div[class="small-box bg-green"]').html(replaced); 
				 
				var replaced = $('div[class="small-box bg-blue"]').html().replace(/Active Accounts/g,'Cuentas Activas');
				$('div[class="small-box bg-blue"]').html(replaced); 
				 
				var replaced = $('div[class="small-box bg-blue"]').html().replace(/More info/g,'Mas informacion');
				$('div[class="small-box bg-blue"]').html(replaced);
				 
				var replaced = $('div[class="small-box bg-red"]').html().replace(/Unique Visitors/g,'Visitantes Unicos');
				$('div[class="small-box bg-red"]').html(replaced); 
				 
				var replaced = $('div[class="small-box bg-red"]').html().replace(/More info/g,'Mas informacion');
				$('div[class="small-box bg-red"]').html(replaced); 
				
				var replaced = $('#dialog_upload_photo').html().replace(/Upload Photo/g,'Subir Imagen');
				$('#dialog_upload_photo').html(replaced);			
				
				var replaced = $('#cancel_modal_button').html().replace(/Cancel/g,'Cancelar');
				$('#cancel_modal_button').html(replaced);			
				
				var replaced = $('#upload_modal_button').html().replace(/Upload Image/g,'Subir');
				$('#upload_modal_button').html(replaced);			
				
				var replaced = $('#dialog_change_language').html().replace(/Change Language/g,'Cambiar Lenguaje');
				$('#dialog_change_language').html(replaced);			
				
				var replaced = $('#dialog_not_available').html().replace(/Not Available/g,'No Disponible');
				$('#dialog_not_available').html(replaced);			
				
				var replaced = $('#this_feature_not_available').html().replace(/This feature is not available to free users./g,'Esta función no esta disponible para usuarios gratuitos.');
				$('#this_feature_not_available').html(replaced);			

				var replaced = $('#visitors_label').html().replace(/Visitors/g,'Visitantes');
				$('#visitors_label').html(replaced);
				 
				var replaced = $('#statistics_label').html().replace(/Statistics/g,'Estadisticas');
				$('#statistics_label').html(replaced); 
			
				var replaced = $('#free_space_label').html().replace(/Free Space/g,'Espacio Libre');
				$('#free_space_label').html(replaced); 
				 
				var replaced = $('#bandwidth_consumption_label').html().replace(/Bandwidth Consumption/g,'Consumo de Ancho de Banda');
				$('#bandwidth_consumption_label').html(replaced); 
				 
				var replaced = $('#server_load_label').html().replace(/Server Load/g,'Carga del Servidor');
				$('#server_load_label').html(replaced); 
				 
				var replaced = $('#cpu_usage_label').html().replace(/CPU Usage/g,'Uso de CPU');
				$('#cpu_usage_label').html(replaced); 
				 
				var replaced = $('#mysql_load_label').html().replace(/MySQL Load/g,'Carga de MySQL');
				$('#mysql_load_label').html(replaced); 
				
				var replaced = $('#sent_from_label').html().replace(/Sent from:/g,'Enviado desde:');
				$('#sent_from_label').html(replaced); 
				
				var replaced = $('button[id="sendEmail"]').html().replace(/Send/g,'Enviar');
				$('button[id="sendEmail"]').html(replaced); 
				 
				var replaced = $('#calendar_label').html().replace(/Calendar/g,'Calendario');
				$('#calendar_label').html(replaced);

				var replaced = $('#apache_bandwidth').html().replace(/Apache Bandwidth/g,'Banda ancha Apache');
				$('#apache_bandwidth').html(replaced);
				 	 
				var replaced = $('#nginx_bandwidth').html().replace(/Nginx Bandwidth/g,'Banda ancha Nginx');
				$('#nginx_bandwidth').html(replaced);

				var replaced = $('#quick_links_label').html().replace(/Change Password/g,'Cambiar Contraseña');
				$('#quick_links_label').html(replaced);

				var replaced = $('#quick_links_label').html().replace(/Statistics/g,'Estadisticas');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/Backups/g,'Respaldos');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/File Manager/g,'Adm. de Archivos');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/FTP Accounts/g,'Cuentas FTP');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/Analyze Website/g,'Analizar Sitio');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/MySQL Databases/g,'Bases MySQL');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/SSH Console/g,'Consola SSH');
				$('#quick_links_label').html(replaced);
				 	 
				var replaced = $('#quick_links_label').html().replace(/Quick Links/g,'Enlaces Rapidos');
				$('#quick_links_label').html(replaced);

				var replaced = $('#menu_referrals').html().replace(/Referrals/g,'Referidos');
				$('#menu_referrals').html(replaced);
				 	 
				var replaced = $('#menu_news').html().replace(/News/g,'Noticias');
				$('#menu_news').html(replaced);
				 	 
				var replaced = $('#menu_faq').html().replace(/Frequently Asked Questions/g,'Preguntas Frecuentes');
				$('#menu_faq').html(replaced);
				 	 
				var replaced = $('#menu_domains').html().replace(/Domains/g,'Dominios');
				$('#menu_domains').html(replaced);
				 	 
				//var replaced = $('#menu_vps').html().replace(/VPS Servers/g,'Servidores VPS');
				//$('#menu_vps').html(replaced);
				
				var replaced = $('#menu_servers').html().replace(/Dedicated Servers/g,'Servidores Dedicados');
				$('#menu_servers').html(replaced);			
				
				var replaced = $('#menu_more').html().replace(/More/g,'Mas');
				$('#menu_more').html(replaced);			
				 	 
				var replaced = $('#billing_label').html().replace(/Billing/g,'Facturas');
				$('#billing_label').html(replaced);
				 	 
				var replaced = $('#tickets_label').html().replace(/Tickets/g,'Soporte');
				$('#tickets_label').html(replaced);
				 	 
				var replaced = $('#lang_label').html().replace(/Language/g,'Idioma');
				$('#lang_label').html(replaced);
				 	 
				var replaced = $('#profile_label').html().replace(/Profile/g,'Perfil');
				$('#profile_label').html(replaced);

				var replaced = $('#sign_out_label').html().replace(/Sign out/g,'Salir');
				$('#sign_out_label').html(replaced);

				var replaced = $('#title_1_menu').html().replace(/Account/g,'Cuenta');
				$('#title_1_menu').html(replaced);
				 	 
				var replaced = $('#1_menu').html().replace(/Details/g,'Detalles');
				$('#1_menu').html(replaced);
				 	 
				var replaced = $('#2_menu').html().replace(/Getting Started/g,'Primeros Pasos');
				$('#2_menu').html(replaced);
				 	 
				var replaced = $('#3_menu').html().replace(/Upgrade/g,'Mejorar');
				$('#3_menu').html(replaced);
				 	 
				var replaced = $('#4_menu').html().replace(/Change Password/g,'Cambiar Contraseña');
				$('#4_menu').html(replaced);
				 	 
				var replaced = $('#5_menu').html().replace(/Change Theme/g,'Cambiar Diseño');
				$('#5_menu').html(replaced);
				 	 
				var replaced = $('#6_menu').html().replace(/Change Language/g,'Cambiar Lenguaje');
				$('#6_menu').html(replaced);
				
				var replaced = $('#title_2_menu').html().replace(/Emails/g,'Correo Electronico');
				$('#title_2_menu').html(replaced);
				 	 
				var replaced = $('#7_menu').html().replace(/Manage Emails/g,'Administrar Correos');
				$('#7_menu').html(replaced);
				 	 
				var replaced = $('#8_menu').html().replace(/Manage Forwarders/g,'Administrar Redirecciones');
				$('#8_menu').html(replaced);
				 	 
				var replaced = $('#9_menu').html().replace(/Edit MX Record/g,'Editar Registro MX');
				$('#9_menu').html(replaced);
				 	 
				var replaced = $('#10_menu').html().replace(/Mail Service Control/g,'Control de Correo');
				$('#10_menu').html(replaced);
				 	 
				var replaced = $('#11_menu').html().replace(/Sent Mail Logs/g,'Registro de Correos Enviados');
				$('#11_menu').html(replaced);
				 	 
				var replaced = $('#title_3_menu').html().replace(/Domains/g,'Dominios');
				$('#title_3_menu').html(replaced);
				 	 
				var replaced = $('#12_menu').html().replace(/Domains/g,'Dominios');
				$('#12_menu').html(replaced);
				 	 
				var replaced = $('#13_menu').html().replace(/Subdomains/g,'Subdominios');
				$('#13_menu').html(replaced);
								 	 
				var replaced = $('#14_menu').html().replace(/Parked Domains/g,'Dominios Parqueados');
				$('#14_menu').html(replaced);
				 	 
				var replaced = $('#15_menu').html().replace(/Addon Domains/g,'Dominios Añadidos');
				$('#15_menu').html(replaced);
				 	 
				var replaced = $('#16_menu').html().replace(/Redirects/g,'Redirecciones');
				$('#16_menu').html(replaced);
								
				var replaced = $('#title_4_menu').html().replace(/Website/g,'Sitio Web');
				$('#title_4_menu').html(replaced);
				 	 
				var replaced = $('#17_menu').html().replace(/Import Website/g,'Importar Sitio');
				$('#17_menu').html(replaced);
				 	 
				var replaced = $('#18_menu').html().replace(/Import Database/g,'Importar Base de Datos');
				$('#18_menu').html(replaced);
				 	 
				var replaced = $('#19_menu').html().replace(/Website Builder/g,'Constructor Web');
				$('#19_menu').html(replaced);
				 	 
				var replaced = $('#20_menu').html().replace(/Auto Installer/g,'Instalador Automatico');
				$('#20_menu').html(replaced);
				 	 
				var replaced = $('#21_menu').html().replace(/Statistics/g,'Estadisticas');
				$('#21_menu').html(replaced);
				 	 
				var replaced = $('#22_menu').html().replace(/Latest Visitors/g,'Ultimos Visitantes');
				$('#22_menu').html(replaced);
				 	 
				var replaced = $('#23_menu').html().replace(/Error Pages/g,'Paginas de Error');
				$('#23_menu').html(replaced);
				 	 
				var replaced = $('#24_menu').html().replace(/Website Templates/g,'Plantillas Web');
				$('#24_menu').html(replaced);	
							 	 
				var replaced = $('#25_menu').html().replace(/Analyze Web/g,'Analizar Web');
				$('#25_menu').html(replaced);
				 	 
				var replaced = $('#title_5_menu').html().replace(/Files/g,'Archivos');
				$('#title_5_menu').html(replaced);
				 	 
				var replaced = $('#26_menu').html().replace(/FTP Access/g,'Acceso FTP');
				$('#26_menu').html(replaced);
				 	 
				var replaced = $('#27_menu').html().replace(/FTP Account/g,'Cuentas FTP');
				$('#27_menu').html(replaced);
				 	 
				var replaced = $('#28_menu').html().replace(/FTP Login History/g,'Reg. de Acceso FTP');
				$('#28_menu').html(replaced);
				 	 
				var replaced = $('#29_menu').html().replace(/FTP Cloud Client/g,'Cliente FTP');
				$('#29_menu').html(replaced);
				 	 
				var replaced = $('#30_menu').html().replace(/Backups/g,'Respaldos');
				$('#30_menu').html(replaced);
				 	 
				var replaced = $('#31_menu').html().replace(/Error Logs/g,'Registro de Errores');
				$('#31_menu').html(replaced);
				 	 
				var replaced = $('#32_menu').html().replace(/File Manager/g,'Adm. de Archivos');
				$('#32_menu').html(replaced);	 
				 	 
				var replaced = $('#title_6_menu').html().replace(/Advanced/g,'Avanzado');
				$('#title_6_menu').html(replaced);
				 	 
				var replaced = $('#33_menu').html().replace(/MySQL Databases/g,'Base de Datos MySQL');
				$('#33_menu').html(replaced);
				 	 
				var replaced = $('#35_menu').html().replace(/Cron Jobs/g,'Trabajos Programados');
				$('#35_menu').html(replaced);
				 	 
				var replaced = $('#36_menu').html().replace(/Advanced Cron Jobs/g,'Trabajos Prog. Avanzados');
				$('#36_menu').html(replaced);
				 	 
				var replaced = $('#37_menu').html().replace(/Cron Output/g,'Salida de Trabajos');
				$('#37_menu').html(replaced);
				 	 
				var replaced = $('#38_menu').html().replace(/SSH Console/g,'Consola SSH');
				$('#38_menu').html(replaced);
				 	 
				var replaced = $('#39_menu').html().replace(/DNS Zone Editor/g,'Editor DNS');
				$('#39_menu').html(replaced);
				 	 
				var replaced = $('#40_menu').html().replace(/PHP Info/g,'Informacion de PHP');
				$('#40_menu').html(replaced);
				 	 
				var replaced = $('#41_menu').html().replace(/PHP Configuration/g,'Configuracion PHP');
				$('#41_menu').html(replaced);
				
				var replaced = $('#title_7_menu').html().replace(/Other/g,'Otro');
				$('#title_7_menu').html(replaced);
				 	 
				var replaced = $('#42_menu').html().replace(/Password Protection Directories/g,'Proteccion de Directorios por Contraseña');
				$('#42_menu').html(replaced);
				 	 
				var replaced = $('#43_menu').html().replace(/IP Deny Manager/g,'IPs Denegadas');
				$('#43_menu').html(replaced);
				 	 
				var replaced = $('#44_menu').html().replace(/Hotlink Protection/g,'Proteccion Hotlink');
				$('#44_menu').html(replaced);
				 	 
				var replaced = $('#45_menu').html().replace(/Folder Index Manager/g,'Adm. de Indices de Carpetas');
				$('#45_menu').html(replaced);
				 	 
				var replaced = $('#46_menu').html().replace(/Fix File Ownership/g,'Reperar Permisos');
				$('#46_menu').html(replaced);
				 	 
				var replaced = $('#47_menu').html().replace(/Reload Account/g,'Reiniciar Cuenta');
				$('#47_menu').html(replaced);

				var replaced = $('#48_menu').html().replace(/Delete Account/g,'Eliminar Cuenta');
				$('#48_menu').html(replaced);
				
				var replaced = $('#title_8_menu').html().replace(/Professional Services/g,'Servicios Profesionales');
				$('#title_8_menu').html(replaced);
				
				var replaced = $('#49_menu').html().replace(/Web Design/g,'Diseño Web');
				$('#49_menu').html(replaced);
				 	 
				var replaced = $('#50_menu').html().replace(/App Development/g,'Desarrollo de Apps');
				$('#50_menu').html(replaced);

				var replaced = $('#51_menu').html().replace(/Graphic Design/g,'Diseño Grafico');
				$('#51_menu').html(replaced);
				
				var replaced = $('#title_9_menu').html().replace(/Tools/g,'Herramientas');
				$('#title_9_menu').html(replaced);
				
				var replaced = $('#52_menu').html().replace(/Support/g,'Soporte');
				$('#52_menu').html(replaced);
				 	 				 	 
				var replaced = $('#hello_msj').html().replace(/Hello/g,'Hola');
				$('#hello_msj').html(replaced);
				
				var replaced = $('#online_msj').html().replace(/Online/g,'En linea');
				$('#online_msj').html(replaced);
				
				var replaced = $('#home_msj').html().replace(/Home/g,'Inicio');
				$('#home_msj').html(replaced);
				
				var replaced = $('#inf_org_box').html().replace(/Information/g,'Informacion');
				$('#inf_org_box').html(replaced);
				
				var replaced = $('#reg_date_box').html().replace(/Registration Date:/g,'Fecha de Registro:');
				$('#reg_date_box').html(replaced);
				
				var replaced = $('#server_box').html().replace(/Server:/g,'Servidor:');
				$('#server_box').html(replaced);
				
				var replaced = $('#status_box').html().replace(/Status:/g,'Estado:');
				$('#status_box').html(replaced);
				
				$('input[placeholder="Search..."]').attr('placeholder', 'Buscar...');					            
				$('input[name="emailto"]').attr('placeholder', 'Para:');
				$('input[name="subject"]').attr('placeholder', 'Asunto');
				$('textarea[placeholder="Message"]').attr('placeholder', 'Mensaje');
					            
			});
		}