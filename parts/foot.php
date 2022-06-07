<!-- Responsive -->
<link  rel="stylesheet" type="text/css" href="/stylesheets/responsive.min.css?ver=6.66">
<!--[if lt IE 9]>
<script async defer src="javascript/html5shiv.js"></script>
<script async defer src="javascript/respond.min.js"></script>
<![endif]-->
<!-- Javascript -->
<script type="text/javascript" src="javascript/jquery.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
<script defer type="text/javascript" src="javascript/jquery.sticky.js"></script>
<script defer type="text/javascript" src="javascript/imagesloaded.min.js"></script>
<script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
<script defer type="text/javascript" src="javascript/jquery-waypoints.js"></script>
<script async defer type="text/javascript" src="javascript/jquery.cookie.js"></script>
<script type="text/javascript" src="javascript/main.min.js?ver=1.99"></script>


<!-- Global site tag (gtag.j    s) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155236772-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-155236772-1');
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-155236772-1', 'auto');
    ga('send', 'pageview');
</script>
<script>
    function sendGAClick(identificator){
        ga('send', 'event', 'Button', 'Click', identificator);
    }
</script>

<?php
$additional_scripts = $_GET['additional_scripts'];

if (isset($additional_scripts)){
    foreach ($additional_scripts as $additional_script){
        echo $additional_script;
    }
}

?>

</div><!-- .body-content -->

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '472383030261481',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v4.0'
        });
    };
</script>
<script rel="noopener" async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

<div id="fb-root"></div>
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="811253382399568"
     theme_color="#d9ae23"
     logged_in_greeting="Hello, if you have any questions, write us a message!"
     logged_out_greeting="Hello, if you have any questions, write us a message">
</div>

</body>
</html>