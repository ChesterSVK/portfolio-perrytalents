<?php
global $_TEXT_DATA_;

$looking_for_data = $_TEXT_DATA_['section_looking_for'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row looking-for-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-left">
                    <h6 class="title-1-psb-dy text-left subheader-left">
                        <?php echo $looking_for_data['subtitle'] ?>
                    </h6>
                    <h1 class="title-1-g-dg text-left">
                        <?php echo $looking_for_data['title'] ?>
                    </h1>
                    <h1 class="description-pt-g text-left">
                        <?php echo $looking_for_data['description'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="looking-for-items-row row">
                    <div class="col-xs-12">
                        <?php
                        foreach ($looking_for_data['cards'] as $index => $card) {
                            $card_data = explode(';', $card);
                            ?>
                            <div class="card-item">
                                <?php if (strlen($card_data[0])): ?>
                                    <div class="card-icon">
                                        <i class="icon">
                                            <img class="svg" src="<?php echo $card_data[0] ?>" alt="">
                                        </i>
                                    </div>
                                <?php endif; ?>
                                <?php if (strlen($card_data[1])): ?>
                                    <h3 class="card-header">
                                        <?php echo $card_data[1] ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if (strlen($card_data[2])): ?>
                                    <p class="card-desc">
                                        <?php echo $card_data[2] ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="looking-for-images-row row">
                    <div class="col">
                        <div class="front-image" style="background: url('<?php echo $looking_for_data['img'] ?>')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>