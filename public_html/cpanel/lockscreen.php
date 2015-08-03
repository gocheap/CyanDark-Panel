<?php
if($_GET['tk'] == 'br25sPLXwfJwv657mCPA'){
echo'<!DOCTYPE html>
<html class="lockscreen" style="background: #000000 url(bootstrap/img/blur-background0'.rand(8, 13).'.jpg) !important; background-size: 100% 100% !important; background-repeat: no-repeat !important;">
    <head>
        <meta charset="UTF-8">
        <title>CyanDark, Inc. | Lockscreen</title>
        <meta content=\'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\' name=\'viewport\'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="bootstrap/css/panel.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Automatic element centering using js -->
        <div class="center">
            <div class="headline text-center" id="time">
                <!-- Time auto generated by js -->
            </div><!-- /.headline -->

            <!-- User name -->
            <div class="lockscreen-name" style="color: #ffffff !important; text-shadow: 1px 3px 5px rgba(0, 0, 0, 0.5);">'.$_GET['name'].'</div>

            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    <img src="profile/profile.php?tk=fRedre8hAYuduC2uRecr4bRUguvazEra&id='.$_GET['id'].'" alt="user image"/>
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <div class="lockscreen-credentials">

                    <div class="input-group">
                    <form action="//dashboard.'.$_SERVER['SERVER_NAME'].'/auth" method="post" enctype="application/x-www-form-urlencoded">
                        <table><tr>
                        <td><input type="password" name="password" class="form-control" placeholder="password" />
                        <input type="text" name="email" value="'.$_GET['mail'].'" style="display: none;" /></td>
                        <td><div class="input-group-btn">
                            <button class="btn btn-flat"><i class="fa fa-arrow-right text-muted"></i></button>
                        </div></td></tr></table></form>
                    </div>
                </div><!-- /.lockscreen credentials -->

            </div><!-- /.lockscreen-item -->

            <div class="lockscreen-link" style="color: #ffffff !important;">
                <a href="http://dashboard.'.$_SERVER['SERVER_NAME'].'/auth/logout" style="color: #ffffff !important; text-shadow: 1px 3px 5px rgba(0, 0, 0, 0.5);">Or sign in as a different user</a>
            </div>
        </div><!-- /.center -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                startTime();
                $(".center").center();
                $(window).resize(function() {
                    $(".center").center();
                });
            });

            /*  */
            function startTime()
            {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();

                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);

                //Check for PM and AM
                var day_or_night = (h > 11) ? "PM" : "AM";

                //Convert to 12 hours system
                if (h > 12)
                    h -= 12;

                //Add time to the headline and update every 500 milliseconds
                $(\'#time\').html(h + ":" + m + ":" + s + " " + day_or_night);
                setTimeout(function() {
                    startTime()
                }, 500);
            }

            function checkTime(i)
            {
                if (i < 10)
                {
                    i = "0" + i;
                }
                return i;
            }

            /* CENTER ELEMENTS IN THE SCREEN */
            jQuery.fn.center = function() {
                this.css("position", "absolute");
                this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
                        $(window).scrollTop()) - 30 + "px");
                this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
                        $(window).scrollLeft()) + "px");
                return this;
            }
        </script>
    </body>
</html>';}
?>