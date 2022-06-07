<?php
global $_TEXT_DATA_;
$page_data = $_TEXT_DATA_['section_news'];
$news = $page_data['news_feed'];
$more_text = $_TEXT_DATA_['section_general']['more_lectors'];
$load_more_text = $_TEXT_DATA_['section_general']['load_more'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<style>
    .owl-prev img,
    .owl-next img {
        width: 20px;
    }
    .owl-prev:active,
    .owl-next:active,
    .owl-prev:focus,
    .owl-next:focus,
    .owl-prev:hover,
    .owl-next:hover{
        text-decoration: none;
    }
    .owl-prev,
    .owl-next,
    .owl-carousel .owl-dot {
        display: inline-block;
        margin-top: 2rem;
        padding: 10px;
        width: 40px;
        height: 40px;
    }


</style>
<section class="flat-row news-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-10">
                <div class="title-section">
                    <h1 class="title-1-g-dg">
                        <?php echo $page_data['header'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
            <div class="buttons-nav col-xs-12 col-sm-4 col-md-2">
                <a href="#" class="customPrevBtn owl-next">
                    <i class="fa"><img class="" src="./icon/Arrow/Left.svg" alt="Arrow right"></i>
                </a>
                <a href="#" class="customPrevBtn owl-prev">
                    <i class="fa"><img class="" src="./icon/Arrow/Right.svg" alt="Arrow right"></i>
                </a>
            </div>
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="news-row row">

                        <div class="news-carousel owl-carousel owl-carousel1 owl-theme">

                            <?php
                            foreach ($news as $index => $news_string) {
                                $one_news = explode(';', $news_string);
                                ?>
                                <div class="item">
                                    <div class="news-col">
                                        <a rel="noopener" href="<?php echo $one_news[6]; ?>" target="_blank"
                                           class="news-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-12">
                                                    <h2 class="news-header">
                                                        <?php echo $one_news[0]; ?>
                                                    </h2>
                                                    <span class="news-date"><?php echo $one_news[1]; ?></span>
                                                    <p class="news-excerpt">
                                                        <?php echo $one_news[2]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-12">
                                                    <?php
                                                    if ($one_news[5]) {
                                                        ?>
                                                        <div class="news-img-holder"
                                                             style="background: url('<?php echo $one_news[3]; ?>')">
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="news-video-holder">
                                                            <?php echo $one_news[3]; ?>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <div class="news-media-holder hidden"
                                                         style="background: url('<?php echo $one_news[4]; ?>')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>

                        </div>



                </div>
            </div>
        </div>
    </div>
</section>