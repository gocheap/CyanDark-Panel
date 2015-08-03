var userLang = navigator.language || navigator.userLanguage; 

if(userLang.match(/es/g) || userLang.match(/ES/g)){
	$('#lang').val('es');
} else {
	//Ingles
	$('#lang').val('en');
	var replaced = $('#title').html().replace(/Hola./g,'Hello.');
		$('#title').html(replaced);
		var replaced = $('#sub_title').html().replace(/Nos alegra volver a verte por aqui./g,'We are happy to see you here.');
		$('#sub_title').html(replaced);
		$('#signin').text('Sign In');
		$('#email').attr('placeholder', 'User');
		$('#password').attr('placeholder', 'Password');
		
	//Frances
	if(userLang.match(/fr/g) || userLang.match(/FR/g)){
		var replaced = $('#title').html().replace(/Hola./g,'Salut.');
		$('#title').html(replaced);
		var replaced = $('#sub_title').html().replace(/Nos alegra volver a verte por aqui./g,'Nous sommes heureux de vous voir ici.');
		$('#sub_title').html(replaced);
		$('#signin').text('Connectez-vous');
		$('#email').attr('placeholder', 'L\'utilisateur');
		$('#password').attr('placeholder', 'Mot de passe');
	}
	
	//Italiano
	if(userLang.match(/it/g) || userLang.match(/IT/g)){
		var replaced = $('#title').html().replace(/Hola./g,'Ciao.');
		$('#title').html(replaced);
		var replaced = $('#sub_title').html().replace(/Nos alegra volver a verte por aqui./g,'Siamo felici di vedervi qui.');
		$('#sub_title').html(replaced);
		$('#signin').text('Accedi');
		$('#email').attr('placeholder', 'Utente');
		$('#password').attr('placeholder', 'Password');
	}
	
}

//Detect App iOS
var standalone = window.navigator.standalone,
    userAgent = window.navigator.userAgent.toLowerCase(),
    safari = /safari/.test( userAgent ),
    ios = /iphone|ipod|ipad/.test( userAgent );

if( ios ) {
    if ( !standalone && safari ) {
        //browser
        $('#dialog_loading').attr('style', 'display: none; width: 100%; height: 100%; min-height: 100%; position: absolute; background: rgba(255, 255, 255, 0.4); z-index: 1;');
    } else if ( standalone && !safari ) {
        //standalone
        $('#dialog_loading').attr('style', 'display: none; width: 100%; height: 100%; min-height: 100%; position: absolute; background: rgba(255, 255, 255, 0.4); z-index: 1;');
    } else if ( !standalone && !safari ) {
        //uiwebview
         $('#dialog_loading').attr('style', 'display: none; width: 100%; height: 100%; min-height: 100%; position: absolute; background: rgba(255, 255, 255, 0.4); z-index: 1;');
    };
} else {
    //not iOS
};

//Detect Internet Connecction
function doesConnectionExist() {
    var xhr = new XMLHttpRequest();
    var file = "https://cyandark.com/live.php";
    var randomNum = Math.round(Math.random() * 10000);
    var url = file + "?rand=" + randomNum;
     
    xhr.open('HEAD', file + "?rand=" + randomNum, false);
     
    try {
        xhr.send();
         
        if (xhr.status >= 200 && xhr.status < 304) {
            return true;
        } else {
            return false;
        }
    } catch (e) {
        return false;
    }
}

function concheck(){
window.setInterval(function (){
	if(doesConnectionExist()){
		$('#form').attr('style', '-webkit-filter: none;');
		$('#dialog').fadeOut(1000);
	} else {
		$('#form').attr('style', '-webkit-filter: blur(8px);');
		$('#dialog').fadeIn(1000);
		$('#dialogbox').text('No Internet.');
	}
},3000);
}

window.onload = function start() {
    concheck();
}

//Send Login Data
 $("#signin").click(function(){
 		$('#form').attr('style', '-webkit-filter: blur(8px);');
		$('#dialog_login').fadeIn(1000);
});

//window.history.go(-(window.history.length-1));

// Mobile Safari in standalone mode
if(("standalone" in window.navigator) && window.navigator.standalone){
 
	// If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
	var noddy, remotes = false;
	
	document.addEventListener('click', function(event) {
		
		noddy = event.target;
		
		// Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
		while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
	        noddy = noddy.parentNode;
	    }
		
		if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
		{
			event.preventDefault();
			document.location.href = noddy.href;
		}
	
	},false);
}