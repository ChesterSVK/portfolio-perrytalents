<?php
global $_TEXT_DATA_;

$program_tabs_data = $_TEXT_DATA_['section_program_tabs'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row program-tabs-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center">
                    <h6 class="title-1-psb-dy">
                        <?php echo $program_tabs_data['subtitle'] ?>
                    </h6>
                    <h1 class="title-1-g-dg text-center" style="max-width: 800px">
                        <?php echo $program_tabs_data['title'] ?>
                    </h1>
                    <h1 class="description-pt-g text-center">
                        <?php echo $program_tabs_data['description'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="program-tabs-row row">
                    <?php
                    foreach ($program_tabs_data['tabs'] as $index => $item) {
                        $item_data = explode(';', $item);
                        ?>
                        <div class="tab-item">
                            <div class="tab">
                                <?php if (strlen($item_data[2])): ?>
                                    <div class="card-icon">
                                        <i class="icon">
                                            <img class="svg" src="<?php echo $item_data[2] ?>" alt="">
                                        </i>
                                    </div>
                                <?php endif; ?>
                                <?php if (strlen($item_data[0])): ?>
                                    <h3 class="item-header">
                                        <?php echo $item_data[0] ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if (strlen($item_data[1])): ?>
                                    <p class="item-desc">
                                        <?php echo $item_data[1] ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>