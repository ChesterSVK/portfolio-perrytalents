<?php
global $_TEXT_DATA_;

$timeline_tabs_data = $_TEXT_DATA_['section_timeline_tabs'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section id="timelineTabs" class="flat-row timeline-tabs-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-left">
                    <h1 class="title-1-g-db text-left subheader-left">
                        <?php echo $timeline_tabs_data['title'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-carousel timeline-carousel owl-theme">
                    <?php
                    foreach ($timeline_tabs_data['timelines'] as $index => $item) {
                        $item_data = explode(';', $item);
                        ?>
                        <div class="item timeline-item <?php echo (strtotime($item_data[0]) < time()) ? 'past' : 'future' ?>">
                            <div class="tab">
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