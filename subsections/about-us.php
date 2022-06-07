<?php
global $_TEXT_DATA_;

$about_us_data = $_TEXT_DATA_['section_intro_about'];
?>

<section class="flat-row about-us-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center">
                    <h6 class="title-1-psb-dy">
                        <?php echo $about_us_data['subtitle'] ?>
                    </h6>
                    <h1 class="title-1-g-dg text-center">
                        <?php echo $about_us_data['title'] ?>
                    </h1>
                    <h1 class="description-pt-g text-center">
                        <?php echo $about_us_data['description'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="about-items-row row">
                    <?php
                    foreach ($about_us_data['tab'] as $index => $item) {
                        $item_data = explode(';', $item);
                        ?>
                        <div class="about-item">
                            <?php if (strlen($item_data[0])): ?>
                                <div class="item-icon">
                                    <i class="card-icon icon">
                                        <img class="svg" src="<?php echo $item_data[0] ?>"  alt="">
                                    </i>
                                </div>
                            <?php endif; ?>
                            <?php if (strlen($item_data[1])): ?>
                                <h3 class="item-header">
                                    <?php echo $item_data[1] ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (strlen($item_data[2])): ?>
                                <p class="item-desc">
                                    <?php echo $item_data[2] ?>
                                </p>
                            <?php endif; ?>
                            <?php if (strlen($item_data[3])): ?>
                                <div class="item-btn-holder">
                                    <a href="<?php echo $item_data[4] ?>" class="more-link">
                                        <?php echo $item_data[3] ?>
                                        <i class="fa"><img class="" src="./icon/Arrow/Right.svg" alt="Arrow right"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>