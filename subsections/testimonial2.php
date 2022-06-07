<?php
global $_TEXT_DATA_;
$page_data = $_TEXT_DATA_['section_page_testimonials'];
$s_testimonials = $page_data['testimonials1'];
$m_testimonials = $page_data['testimonials2'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row testimonials-list-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12" style="margin-bottom: 5rem">

                <h3 class="testimonial-header title-1-g-dg"  style="margin-bottom: 3rem">
                    Startups
                </h3>

                <div class="testimonials-row row">
                    <?php
                    foreach ($s_testimonials as $index => $tst_string) {
                        $one_tst = explode(';', $tst_string);
                        ?>
                        <div class="col-xs-12 col-md-6">
                            <div class="testimonial">
                                <h2 class="description-pt-g">
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

                <div class="item-btn-holder">
                    <a href="/portfolio" class="more-link">
                        List of startups <i class="fa"><img class="" src="./icon/Arrow/Right.svg"
                                                                    alt="Arrow right"></i>
                    </a>
                </div>
            </div>

            <div class="col-xs-12">

                <h3 class="testimonial-header  title-1-g-dg" style="margin-bottom: 4rem">
                    Mentors
                </h3>


                <div class="testimonials-row row">
                    <?php
                    foreach ($m_testimonials as $index => $tst_string) {
                        $one_tst = explode(';', $tst_string);
                        ?>
                        <div class="col-xs-12 col-md-6">
                            <div class="testimonial">
                                <h2 class="description-pt-g">
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

                <div class="item-btn-holder">
                    <a href="/consultants" class="more-link">
                        List of mentors <i class="fa"><img class="" src="./icon/Arrow/Right.svg"
                                                            alt="Arrow right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>