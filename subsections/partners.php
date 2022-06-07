<?php $partners_page_data = $_TEXT_DATA_['section_partners_headers'];?>
<!----------------------------------------------------------------------------------------------------------------------    Partners part -->
<section class="flat-row partners-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-section text-left">
                    <h4 class="title-1-psb-dy subheader-left">
                        <?php echo $partners_page_data['subheader']; ?>
                    </h4>
                    <h2 class="title-1-g-db">
                        <?php echo $partners_page_data['header']; ?>
                    </h2>
                </div>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="partners">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php get_partners_logos(); ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-10 -->
        </div><!-- /.row -->
    </div>
</section>
