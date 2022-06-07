<?php
global $_TEXT_DATA_;

$program_tabs_data = $_TEXT_DATA_['section_offices'];
?>


<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row offices-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center">
                    <h6 class="title-1-psb-dy">
                        <?php echo $program_tabs_data['subtitle'] ?>
                    </h6>
                    <h1 class="title-1-g-dg text-center">
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
                <div class="offices-row row">
                    <?php
                    foreach ($program_tabs_data['offices'] as $index => $item) {
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="office-image">
                                <img class="svg" src="<?php echo $item ?>" alt="office">
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