<?php $harmonogram_page_data = $_TEXT_DATA_['section_harmonogram'];?>
<!----------------------------------------------------------------------------------------------------------------------    hamonograms part -->
<section id="harmonogram" class="flat-row hamonograms-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-section text-left">
                    <h4 class="title-1-psb-dy subheader-left">
                        <?php echo $harmonogram_page_data['subheader']; ?>
                    </h4>
                    <h2 class="title-1-g-db">
                        <?php echo $harmonogram_page_data['header']; ?>
                    </h2>
                </div>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="harmonograms">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="owl-carousel harmonogram-carousel owl-theme">
                                <?php
                                    $delimiter = $_PERRY_['section_general']['string_splitter'];
                                foreach ($harmonogram_page_data['harmonograms'] as $harmonogram){
                                    $harmonogram_data = explode($delimiter, $harmonogram);
                                    ?>
                                    <div class="harmonogram-item item">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h4 class="harmonogram-day">
                                                    <?php echo $harmonogram_data[0];?>
                                                </h4>
                                            </div>
                                            <div class="col-xs-9">
                                                <h5 class="harmonogram-month">
                                                    <?php echo $harmonogram_data[1];?>
                                                </h5>
                                                <h5 class="harmonogram-year">
                                                    <?php echo $harmonogram_data[2];?>
                                                </h5>
                                            </div>
                                        </div>
                                        <h3 class="harmonogram-title">
                                            <?php echo $harmonogram_data[3];?>
                                        </h3>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-10 -->
        </div><!-- /.row -->
    </div>
</section>
