//CyanDark Statistics v2
var panelurl = document.URL;
if(panelurl.match(/website/g) && panelurl.match(/stats/g)){ 
	$('.cony-wrap').hide();
	$('#charts').show();
	        $.get( "/website/stats", function( data ) {
	             var d = new Date();
                 var year = ''.concat(d.getFullYear());
                 var month = '0'.concat(d.getMonth() + 1);
                 var date_form = year.concat('-').concat(month).concat('-');
                 
                 var f1 = date_form.concat('1');
                 var f2 = date_form.concat('5');
                 var f3 = date_form.concat('10');
                 var f4 = date_form.concat('15');
                 var f5 = date_form.concat('20');
                 var f6 = date_form.concat('25');
                  
                 if(month == '02'){
                 var f7 = date_form.concat('28');}
                 else{ var f7 = date_form.concat('30'); }
                 
                 //Get Visitors
        		 var str = data;
    			 var n = (str.search(f1)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv1 = res.substring(0, n3);
    			 
    			 var n = (str.search(f2)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv2 = res.substring(0, n3);
    			 
    			 var n = (str.search(f3)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv3 = res.substring(0, n3);

    			 var n = (str.search(f4)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv4 = res.substring(0, n3);

    			 var n = (str.search(f5)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv5 = res.substring(0, n3);

    			 var n = (str.search(f6)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv6 = res.substring(0, n3);

    			 var n = (str.search(f7)+12);
    			 var n2 = (str.search("</html>") + 7);
    			 var res = str.substring(n, n2);
    			 var n3 = res.search("],");
    			 var uv7 = res.substring(0, n3);
    			 
    			 //Get Hits
    			 var str2 = str.substring((str.search('// Page Hits For This Month')+27), (str.search("</html>") + 7));
    			 var n = (str2.search(f1)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit1 = res.substring(0, n3);
    			 
    			 var n = (str2.search(f2)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit2 = res.substring(0, n3);
    			 
    			 var n = (str2.search(f3)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit3 = res.substring(0, n3);

    			 var n = (str2.search(f4)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit4 = res.substring(0, n3);

    			 var n = (str2.search(f5)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit5 = res.substring(0, n3);

    			 var n = (str2.search(f6)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit6 = res.substring(0, n3);

    			 var n = (str2.search(f7)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var hit7 = res.substring(0, n3);
    			 
    			  //Get Bandwidth
    			 var str2 = str.substring((str.search('// APACHE Bandwidth For This Month')+34), (str.search("</html>") + 7));
    			 var n = (str2.search(f1)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban1 = res.substring(0, n3);
    			 
    			 var n = (str2.search(f2)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban2 = res.substring(0, n3);
    			 
    			 var n = (str2.search(f3)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban3 = res.substring(0, n3);

    			 var n = (str2.search(f4)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban4 = res.substring(0, n3);

    			 var n = (str2.search(f5)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban5 = res.substring(0, n3);

    			 var n = (str2.search(f6)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban6 = res.substring(0, n3);

    			 var n = (str2.search(f7)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ban7 = res.substring(0, n3);
    			 
    			  //FTP Logins
    			 var str2 = str.substring((str.search('// FTP Logins For This Month')+28), (str.search("</html>") + 7));
    			 var n = (str2.search(f1)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp1 = res.substring(0, n3);
    			 
    			 var n = (str2.search(f2)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp2 = res.substring(0, n3);
    			 
    			 var n = (str2.search(f3)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp3 = res.substring(0, n3);

    			 var n = (str2.search(f4)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp4 = res.substring(0, n3);

    			 var n = (str2.search(f5)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp5 = res.substring(0, n3);

    			 var n = (str2.search(f6)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp6 = res.substring(0, n3);

    			 var n = (str2.search(f7)+12);
    			 var n2 = (str2.search("</html>") + 7);
    			 var res = str2.substring(n, n2);
    			 var n3 = res.search("],");
    			 var ftp7 = res.substring(0, n3);
    			 
				//Bandwidth Chart     
        var line = new Morris.Line({
        element: 'bandwidth_chart',
        resize: true,
        data: [
            {y: f1 , item1: ban1},
            {y: f2 , item1: ban2},
            {y: f3 , item1: ban3},
            {y: f4 , item1: ban4},
            {y: f5 , item1: ban5},
            {y: f6 , item1: ban6},
            {y: f7 , item1: ban7}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        lineColors: ['#00c0ef'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#ccc",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#00c0ef"],
        gridLineColor: "fdfdfd",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });
		//Visitors Chart     
        var line = new Morris.Line({
        element: 'visitors_chart',
        resize: true,
        data: [
            {y: f1 , item1: uv1},
            {y: f2 , item1: uv2},
            {y: f3 , item1: uv3},
            {y: f4 , item1: uv4},
            {y: f5 , item1: uv5},
            {y: f6 , item1: uv6},
            {y: f7 , item1: uv7}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        lineColors: ['#00c0ef'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#ccc",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#00c0ef"],
        gridLineColor: "fdfdfd",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });
		//Hits Chart     
        var line = new Morris.Line({
        element: 'hits_chart',
        resize: true,
        data: [
            {y: f1 , item1: hit1},
            {y: f2 , item1: hit2},
            {y: f3 , item1: hit3},
            {y: f4 , item1: hit4},
            {y: f5 , item1: hit5},
            {y: f6 , item1: hit6},
            {y: f7 , item1: hit7}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        lineColors: ['#00c0ef'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#ccc",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#00c0ef"],
        gridLineColor: "fdfdfd",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });
		//FTP Logins     
        var line = new Morris.Line({
        element: 'ftp_chart',
        resize: true,
        data: [
            {y: f1 , item1: ftp1},
            {y: f2 , item1: ftp2},
            {y: f3 , item1: ftp3},
            {y: f4 , item1: ftp4},
            {y: f5 , item1: ftp5},
            {y: f6 , item1: ftp6},
            {y: f7 , item1: ftp7}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        lineColors: ['#00c0ef'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#ccc",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#00c0ef"],
        gridLineColor: "fdfdfd",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });
});
                
}