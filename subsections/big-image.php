<?php
global $_TEXT_DATA_;

$big_image_data = $_TEXT_DATA_['section_big_image'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row big-image-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="image-wrapper" style="background: url('<?php echo $big_image_data['img']?>')">
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
    </div>
</section>