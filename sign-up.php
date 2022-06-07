<?php
require_once 'functions.php';
get_head();
get_header($_TEXT_DATA_['section_signup_link']['href']['/sign-up']);
?>
    <style type="text/css"> html {
            margin: 0;
            height: 100%;
            overflow: hidden;
        }
        iframe {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            border: 0;
        } </style>

    <section id="pagePrihlaska" class="page-content" style="height: 100vh;">
        <div class="typeform-holder"
             style="height: 80vh; position:absolute; top: 0; left: 0; width: 100%; z-index: 1000000000;">
            <iframe id="typeform-full" width="100%" height="100%" frameborder="0"
                    allow="camera; microphone; autoplay; encrypted-media;"
                    src="https://form.typeform.com/to/xbb0orF3?typeform-medium=embed-snippet"></iframe>
            <script type="text/javascript" src="https://embed.typeform.com/embed.js"></script>
        </div>
    </section>
<?php get_foot(); ?>