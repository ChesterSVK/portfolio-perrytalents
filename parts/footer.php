<?php
global $_TEXT_DATA_;
global $_PERRY_;

$page_name = $_GET['current_page_name'];
$footer_page_data = $_TEXT_DATA_['section_contact'];
?>

<footer class="footer">
    <div class="footer-modal">
                <?php include_once 'contact-modal.php' ?>
    </div>
    <div class="footer-widgets">
        <div class="container-fluid max-width">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="widget widget-text">
                        <div id="logo" class="logo">
                            <a href="<?php echo get_current_url([], true); ?>" rel="home">
                                <img src="images/logos/svg/perry_white.svg?ver=1" alt="image">
                            </a>
                        </div><!-- /.logo -->
                        <ul class="flat-socials">
                            <li class="facebook">
                                <a rel="noopener" href="https://www.facebook.com/perrytalents" target="_blank">
                                    <i class="fa fa">
                                        <img src="icon/Facebook.svg" alt="" class="svg">
                                    </i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a rel="noopener" href="https://www.instagram.com/perrytalents/" target="_blank">
                                    <i class="fa fa">
                                        <img src="icon/Instagram.svg" alt="" class="svg">
                                    </i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a rel="noopener" href="https://www.linkedin.com/company/perry-talents/" target="_blank">
                                    <i class="fa fa">
                                        <img src="icon/LinkedIn.svg" alt="" class="svg">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.widget -->
                </div><!-- /.col-md-5 -->
                <div class="col-md-2 col-xs-12 col-sm-1">
                </div>
                <div class="col-md-3 col-xs-12 col-sm-5 upper">
                    <div class="widget contact-info footer-pages">
                        <h4 class="widget-title">Menu</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <?php list_page_links($page_name, 0, 2) ?>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <?php list_page_links($page_name, 3) ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-xs-12 col-sm-5 lower">
                    <div class="widget contact-info">
                        <h4 class="widget-title">
                            <?php
                            echo $footer_page_data['text']['header0']; ?>
                        </h4>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <h5 class="widget-subtitle">
                                    <?php echo $footer_page_data['text']['header3']; ?>
                                </h5>
                                <ul>
                                    <?php
                                    foreach ($footer_page_data['location'] as $index => $location) {
                                        if ($index == 0) continue;
                                        ?>
                                        <li class="footer-item">
                                            <?php echo $footer_page_data['location'][$index]; ?>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <h4 class="widget-subtitle">E-mail</h4>
                                <ul>
                                    <li class="footer-item">
                                        <?php
                                        $person_string = $footer_page_data['person'][0];
                                        $person = explode($_PERRY_['section_general']['string_splitter'], $person_string);
                                        ?>
                                        <a href="mailto:<?php echo $person[3]; ?>">
                                            <?php echo $person[3]; ?>
                                        </a>
                                        <?php
                                        $person_string2 = $footer_page_data['person'][1];
                                        $person2 = explode($_PERRY_['section_general']['string_splitter'], $person_string2);
                                        ?>
                                        <a href="mailto:<?php echo $person2[3]; ?>">
                                            <?php echo $person2[3]; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-widgets -->
</footer><!-- /footer -->

<!-- Go Top -->
<a class="go-top">
    <i class="fa"><img class="svg" src="../icon/Arrow/Up.svg" alt=""></i>
</a>