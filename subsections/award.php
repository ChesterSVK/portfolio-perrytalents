<?php
global $_TEXT_DATA_;

$looking_for_data = $_TEXT_DATA_['section_award'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row award-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12 col-md-6 award-col">
                <div class="award-logo">
                    <img class="svg" src="<?php echo $looking_for_data['img'] ?>" alt="">
                </div>
                <h1 class="award-title title-1-g-dg text-left">
                    <?php echo $looking_for_data['title'] ?>
                </h1>
                <p class="award-description description-pt-g text-left">
                    <?php echo $looking_for_data['desc'] ?>
                </p>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="award-row row">
                    <div class="col-xs-12 col-md-6">
                        <div class="award-image-wrap">
                            <img class="award-image" src="<?php echo $looking_for_data['img2'] ?>" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>