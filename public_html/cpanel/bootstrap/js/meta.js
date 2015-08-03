$.getScript("https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js", function(){
     $.getScript("//cyandark.com/cpanel/bootstrap/js/jquery.jgrowl.js", function(){
    function runner(id) {
        $.ajax({
        url: '//cpanel.cyandark.com/actions/info/format/json/id/' + id,
          dataType: 'json',
          global: false,
          error: function(XMLHttpRequest, textStatus, errorThrown){
            stopTimer(id);
          },
          success: function(data) {
            var percentage = data.percent;
            var msg = data.m;
            var reload = data.reload;
            var link = data.url;

            $("#progressbar_"+id).progressBar(percentage,
                {   max: 100,
                    stepDuration: 1,
                    boxImage: '//dashboard.cyandark.com/scripts/jquery.progressbar/images/progressbar.gif',
                    barImage: {
                                0:	'//dashboard.cyandark.com/scripts/jquery.progressbar/images/progressbg_red.gif',
                                30: '//dashboard.cyandark.com/scripts/jquery.progressbar/images/progressbg_orange.gif',
                                70: '//dashboard.cyandark.com/scripts/jquery.progressbar/images/progressbg_green.gif'
                               },
                    textFormat: 'percentage',
                    callback: function(data) {
                        if (data.running_value >= 100 || data.running_value == 0) {
                            stopTimer(id);
                            var gg = $('#'+data.id).parents('div.jGrowl-notification');
                            gg.find('div.header').text(msg);
                            if(link != '') {
                                var a = $('<a>').attr('href', link).text('Ver resultado');
                                gg.find('.action div.res-link').html(a);
                            }

                            if(data.running_value == 0) {
                                $("#progressbar_"+id).remove();
                                gg.find('.status').addClass('fail');
                            }
                        }
                    }
                }
            );
        }});
    }

    function stopTimer(id)
    {
        var tt = eval('timer_' + id);
        clearTimeout(tt);
    }

$(document).ready(function()  {

//    $.jGrowl.defaults.closeTemplate = '';
    $.jGrowl.defaults.closer = false;
    $.jGrowl.defaults.sticky = true;
    $.jGrowl.defaults.position = 'bottom-right';

        
});

});
});