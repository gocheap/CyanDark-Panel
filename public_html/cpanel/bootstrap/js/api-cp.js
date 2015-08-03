//Have Accounts?
		var str = $('#account_api').html();
		if(str == ""){ $('#section_1').hide(); $('#section_2').hide(); $('#section_3').hide(); $('#section_4').hide(); $('#section_5').hide(); $('#section_6').hide(); $('#section_7').hide(); $('#section_8').hide(); $('#section_9').hide(); $('#section_10').hide();}

//Domains Manager Style
var panelurl=document.URL;
if(panelurl.match(/domains-manager/g) && panelurl.match(/details/g)){
	$('.block').attr('style', 'border: 1px solid #00c0ef; padding-right: 0px !important; margin-right: 20px;');
    $('.help').attr('style', 'padding-left: 20px; padding-top: 20px;');
    $('div[class="block top"]').attr('style', 'border: 0px solid #00c0ef;');
    $('h2[class="head icon-14"]').attr('class', 'head icon-1');
}
//Invoice Style
var panelurl=document.URL;
if(panelurl.match(/invoices/g) && panelurl.match(/details/g)){
	$('.wide').attr('style', 'margin-top: 7px; border: 1px solid #00c0ef;');
    $('.block:contains("Payza")').attr('style', 'height: 190px; border: 1px solid #00c0ef; padding-right: 0px !important; margin-right: 20px;');
    $('button[class="btn btn-primary btn-large"]').attr('style', 'margin-top: 10px; border: 1px solid #00c0ef;');
}

// Client Data
var text = $('.account-information').text();
		var pattern = /Información/;
		var exists = pattern.test(text);

		if(exists){
        		// Client Data
    			$('.insert_usrdata_name').text($('.client-profile td:contains("Nombre:")').next().text());
    			$('.insert_usrdata_email').text($('.client-profile td:contains("Correo Electrónico:")').next().text());
    			$('.insert_usrdata_regdate').text($('.client-profile td:contains("Registro:")').next().text());
    			$('.insert_usrdata_rootsite').text($('.client-profile td:contains("Raíz del sitio:")').next().text());
    			$('.insert_usrdata_loginIP').text($('.client-profile td:contains("Ubicación:")').next().text());
    			$('.insert_webdata_domain').text($('.account-information td:contains("Dominio:")').next().text());
    			$('.insert_webdata_plan').text($('.account-information td:contains("Plan de alojamiento:")').next().text());
    			$('.insert_webdata_status').text($('.account-information td:contains("Estado:")').next().text());
    			$('.insert_diskusg_percentage').text($('.account-information td:contains("Disco usado:")').next().text());
    			$('.insert_diskusg_numbers').text($('.account-information td:contains("Disco usado:")').next().text());
    			$('.insert_bandwidthusg_numbers').text($('.account-information td:contains("Ancho de banda:")').next().text());
    			$('.insert_srvdata_url').text($('.account-information td:contains("Nombre del servidor:")').next().text());
    			$('.insert_srvdata_srvload').text($('.account-information td:contains("Cargar servidor:")').next().text());
    			$('#srvload').val(parseInt($('.account-information td:contains("Cargar servidor:")').next().text()));
    			$('#sqlload').val(parseFloat($('.account-information td:contains("Cargar servidor MySQL:")').next().text()));
    			$('#cpuusage').val(parseInt($('.account-information td:contains("Cargar servidor:")').next().text()) * 2 );
    			$('.insert_srvdata_dbload').text($('.account-information td:contains("Cargar servidor MySQL:")').next().text());
    			$('.insert_php_version').text($('.account-information td:contains("PHP Versión:")').next().text());
            			$('.insert_country').text($('#api_data .cont-wrap td:contains("País")').next().text());
            			$('.insert_address').text($('#api_data .cont-wrap td:contains("Dirección")').next().text());
            			$('.insert_phone').text($('#api_data .cont-wrap td:contains("Teléfono")').next().text());

            			var phonett = $('#api_data .cont-wrap td:contains("Teléfono")').next().text().trim().replace(/ /g,'');
            			phonett = phonett.substring((phonett.search('-')+1), phonett.length);
            			$('#phone').val(parseInt(phonett));
            			
            			var codear = $('#api_data .cont-wrap td:contains("Teléfono")').next().text().trim().replace(/ /g,'');
            			codear = codear.substring(2, codear.search('-'));
            			$('#phone_cc').val(parseInt(codear));
            			
            			$('#address_1').val($('#api_data .cont-wrap td:contains("Dirección")').next().text());
				$('#apacheband').css('width', 
    				$('#BandwidthProgressBar .green-bar').css('width')
    			);
    			    			
    			
    			//Nginx Bandwith Calculation
    			var nginx = $('#BandwidthProgressBar .green-bar').css('width');
    			var nginxS = nginx.search("%");
    			var nginx = nginx.substring(0, nginxS);
    			var nginx = parseInt(nginx);
    			var nginx = (nginx / 2);
    			var nginx = nginx.toString();
    			var nginx = nginx.concat("%");
    			
    			var nginxT = $('.account-information td:contains("Ancho de banda:")').next().text();
    			var nginxTS = nginxT.search("/");
    			var nginxT = nginxT.substring(0, nginxTS);
    			var nginxT = parseFloat(nginxT);
    			var nginxT = (nginxT / 2);
    			var nginxT = nginxT.toString();
    			var nginxT = nginxT.concat(' /'.concat($('.account-information td:contains("Ancho de banda:")').next().text().substring(0, $('.account-information td:contains("Ancho de banda:")').next().text().search("/"))));
    	
    			$('.insert_bandwidthusg_numbers2').text(nginxT);
    			
    			$('#nginxband').css('width', nginx);
    			} 
    			else {
    							// Client Data
    			$('.insert_usrdata_name').text($('.client-profile td:contains("Name:")').next().text());
    			$('.insert_usrdata_email').text($('.client-profile td:contains("E-mail:")').next().text());
    			$('.insert_usrdata_regdate').text($('.client-profile td:contains("Registration:")').next().text());
    			$('.insert_usrdata_rootsite').text($('.client-profile td:contains("Home Root:")').next().text());
    			$('.insert_usrdata_loginIP').text($('.client-profile td:contains("Last Login From:")').next().text());
    			$('.insert_webdata_domain').text($('.account-information td:contains("Domain:")').next().text());
    			$('.insert_webdata_plan').text($('.account-information td:contains("Hosting Plan:")').next().text());
    			$('.insert_webdata_status').text($('.account-information td:contains("Status:")').next().text());
    			$('.insert_diskusg_percentage').text($('.account-information td:contains("Disk Usage:")').next().text());
    			$('.insert_diskusg_numbers').text($('.account-information td:contains("Disk Usage:")').next().text());
    			$('.insert_bandwidthusg_numbers').text($('.account-information td:contains("Bandwidth:")').next().text());
    			$('.insert_srvdata_url').text($('.account-information td:contains("Server Name:")').next().text());
    			$('.insert_srvdata_srvload').text($('.account-information td:contains("Server Load:")').next().text());
    			$('#srvload').val(parseInt($('.account-information td:contains("Server Load:")').next().text()));
    			$('#sqlload').val(parseFloat($('.account-information td:contains("MySQL Server Load:")').next().text()));
    			$('#cpuusage').val(parseInt($('.account-information td:contains("Server Load:")').next().text()) * 2 );
    			$('.insert_srvdata_dbload').text($('.account-information td:contains("MySQL Server Load:")').next().text());
    			$('.insert_php_version').text($('.account-information td:contains("PHP Version:")').next().text());
            			$('.insert_country').text($('#api_data .cont-wrap td:contains("Country")').next().text());
            			$('.insert_address').text($('#api_data .cont-wrap td:contains("Address")').next().text());
            			$('.insert_phone').text($('#api_data .cont-wrap td:contains("Phone")').next().text());
            			
            			var phonett = $('#api_data .cont-wrap td:contains("Phone")').next().text().trim().replace(/ /g,'');
            			phonett = phonett.substring((phonett.search('-')+1), phonett.length);
            			$('#phone').val(parseInt(phonett));
            			
            			var codear = $('#api_data .cont-wrap td:contains("Phone")').next().text().trim().replace(/ /g,'');
            			codear = codear.substring(2, codear.search('-'));
            			$('#phone_cc').val(parseInt(codear));
            			
            			$('#address_1').val($('#api_data .cont-wrap td:contains("Address")').next().text());
				$('#apacheband').css('width', 
    				$('#BandwidthProgressBar .green-bar').css('width')
    			);
    			
    			//Nginx Bandwith Calculation
    			var nginx = $('#BandwidthProgressBar .green-bar').css('width');
    			var nginxS = nginx.search("%");
    			var nginx = nginx.substring(0, nginxS);
    			var nginx = parseInt(nginx);
    			var nginx = (nginx / 2);
    			var nginx = nginx.toString();
    			var nginx = nginx.concat("%");
    			
    			var nginxT = $('.account-information td:contains("Bandwidth:")').next().text();
    			var nginxTS = nginxT.search("/");
    			var nginxT = nginxT.substring(0, nginxTS);
    			var nginxT = parseFloat(nginxT);
    			var nginxT = (nginxT / 2);
    			var nginxT = nginxT.toString();
    			var nginxT = nginxT.concat(' /'.concat($('.account-information td:contains("Bandwidth:")').next().text().substring(0, $('.account-information td:contains("Bandwidth:")').next().text().search("/"))));
    	
    			$('.insert_bandwidthusg_numbers2').text(nginxT);
    			
    			$('#nginxband').css('width', nginx);
    			}
    		
        //Demo Account
    	var text = $('.account-information').text();
		var pattern2 = /jhonsmith.com/;

		var exists2 = pattern2.test(text);

		if(exists2){
			$('#demobox').show();
		}
		
		//Site Analyzer
		var text = $('.account-information').text();
		var pattern = /Información/;
		var exists = pattern.test(text);

		if(exists){
			var url = 'http://www.site-analyzer.com/en/audit/';
			url = url.concat($('.account-information td:contains("Dominio:")').next().text());
			$('#analyze_web').attr('href', url);
			$('#analyze_web2').attr('href', url);
		} else {
			var url = 'http://www.site-analyzer.com/en/audit/';
			url = url.concat($('.account-information td:contains("Domain:")').next().text());
			$('#analyze_web').attr('href', url);
			$('#analyze_web2').attr('href', url);
		}
		
	//CyanDark Switcher menu
			var action = 'not-defined';
        if(acturl.match(/switcher/g)){ $('form button[type="submit"]').click(function() {
    		var frm = $(this.form);
    		action = frm.attr('action');
    		$('.account_manager').fadeIn(500);
    		return false;	
		}); 
		//$('.tal a').prepend('<i class="fa fa-sign-in" style="color: #000000 !important; font-size: 14px;margin-right: 5px;"></i> ');
		}
		function builder(){    		
 		var dataString = 'submit=submit';
  		$.ajax({
   			 type: "POST",
    		 url: action,
    		 data: dataString,
    		 success: function() {
      			setTimeout(function(){ window.location="/website/website-templates/website-builder"; },500);
    		 }
 		}); }
		function webmail(){    		
 		var dataString = 'submit=submit';
  		$.ajax({
   			 type: "POST",
    		 url: action,
    		 data: dataString,
    		 success: function() {
      			setTimeout(function(){ window.location="/emails/webmail"; },500);
    		 }
 		}); }
		function change(){    		
 		var dataString = 'submit=submit';
  		$.ajax({
   			 type: "POST",
    		 url: action,
    		 data: dataString,
    		 success: function() {
      			setTimeout(function(){ window.location="/index"; },500);
    		 }
 		}); }
 		