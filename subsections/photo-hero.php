<?php $hero_pictures_page_data = $_TEXT_DATA_['section_hero_pictures'];?>
<!----------------------------------------------------------------------------------------------------------------------    hamonograms part -->
<section class="flat-row photo-hero-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="hero-photo-item first" style="background: url('<?php echo $hero_pictures_page_data['img1']; ?>')">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-4 visible hidden-xs hidden-sm visible-md visible-lg">
                        <div class="hero-photo-item second" style="background: url('<?php echo $hero_pictures_page_data['img2']; ?>')">
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div>
</section>
