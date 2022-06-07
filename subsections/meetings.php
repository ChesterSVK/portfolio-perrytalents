<?php
global $_TEXT_DATA_;

$meetings_data = $_TEXT_DATA_['section_meetings'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row meetings-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-left">
                    <h6 class="title-1-psb-dy subheader-left">
                        <?php echo $meetings_data['subtitle'] ?>
                    </h6>
                    <h1 class="title-1-g-dg text-left">
                        <?php echo $meetings_data['title'] ?>
                    </h1>
                    <h1 class="description-pt-g text-left">
                        <?php echo $meetings_data['description'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="meetings-row">
                    <?php
                    foreach ($meetings_data['meetings'] as $index => $item) {
                        $item_data = explode(';', $item);
                        ?>
                        <div class="meeting-item <?php echo $index % 2 == 0 ? '' : 'inverted'?>">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 meeting-info <?php echo $index % 2 == 0 ? '' : 'pull-right'?>">
                                    <?php if (strlen($item_data[0])): ?>
                                        <h3 class="meeting-title">
                                            <?php echo $item_data[0] ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (strlen($item_data[1])): ?>
                                        <h3 class="meeting-description">
                                            <?php echo $item_data[1] ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (strlen($item_data[2])): ?>
                                        <h3 class="meeting-note">
                                            <?php echo $item_data[2] ?>
                                        </h3>
                                    <?php endif; ?>
                                </div>
                                <div class="col-xs-12 col-md-6 meeting-images <?php echo $index % 2 == 0 ? '' : 'pull-left'?>">
                                    <div class="row">
                                        <div class="col col-xs-8 <?php echo $index % 2 == 0 ? '' : 'pull-right'?>">
                                            <?php if (strlen($item_data[3])): ?>
                                                <div class="metting-image-1" style="background: url('<?php echo $item_data[3] ?>')">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col col-xs-4 <?php echo $index % 2 == 0 ? '' : 'pull-left'?>">
                                            <?php if (strlen($item_data[3])): ?>
                                                <div class="metting-image-2" style="background: url('<?php echo $item_data[3] ?>')">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
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