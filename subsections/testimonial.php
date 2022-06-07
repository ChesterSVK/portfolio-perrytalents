<?php
global $_TEXT_DATA_;
$page_data = $_TEXT_DATA_['section_testimonial'];
$testimonials = $page_data['testimonial_feed'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<style>
    .testimonial-wrapper {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .testimonial-wrapper .tst-row {
        margin-bottom: 50px;
    }

    .testimonial-wrapper .tst-row .desc {
        font-family: "PTSans-Regular", sans-serif;
        max-width: 808px;
        color: #4D4D4D;
        margin: 0 auto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 28px;
    }

    .testimonial-wrapper .tst-row .author {
        font-weight: bold;
        font-size: 20px;
        line-height: 26px;
        margin-top: 1em;
        color: #16243C;
    }


</style>
<section class="flat-row testimonial-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-section">
                    <h1 class="title-1-g-dg text-center">
                        <?php echo $page_data['header'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="tst-row row">

                    <div id="owl-demo" class="tst-carousel owl-carousel owl-theme">

                        <?php
                        foreach ($testimonials as $index => $tst_string) {
                            $one_tst = explode(';', $tst_string);
                            ?>
                            <div class="item">
                                <div class="testimonial-col text-center">
                                    <h2 class="desc">
                                        <?= $one_tst[0] ?>
                                    </h2>
                                    <h6 class="author">
                                        <?= $one_tst[1] ?>
                                    </h6>
                                </div>

                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="item-btn-holder">
                    <a href="/testimonials" class="more-link">
                        <?= $page_data['cta'] ?> <i class="fa"><img class="" src="./icon/Arrow/Right.svg"
                                                                    alt="Arrow right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>