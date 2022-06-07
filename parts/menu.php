<?php
global $_PERRY_;
global $_TEXT_DATA_;
$page_name = $_GET['current_page_name'];
?>
<div class="nav-wrap">
    <div class="btn-menu">
        <span></span>
        <span></span>
    </div><!-- //mobile menu button -->
    <nav id="mainnav" class="mainnav">
        <ul class="menu">
            <?php list_page_links($page_name); ?>
<!--                <li class="sign-up">-->
<!--                    <div class="sign-up-btn-menu">-->
<!--                        <a id="Prihlaska_NavBar"  onclick="sendGAClick('Prihlaska_NavBar')" class="sign-up-btn" data-link="--><?php //echo $_TEXT_DATA_['section_signup_link']['link'];?><!--" href="--><?php //echo $_TEXT_DATA_['section_signup_link']['href'];?><!--">--><?php //echo $_TEXT_DATA_['section_signup_link']['title']; ?><!--</a>-->
<!--                    </div>-->
<!--                </li>-->
            <?php include_once "languages.php"; ?>
        </ul><!-- /.menu -->
    </nav><!-- /.mainnav -->
</div><!-- /.nav-wrap -->




