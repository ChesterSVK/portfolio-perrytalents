<?php $lectors = $_TEXT_DATA_['section_intro_mentors']['lectors'];
$more_text = $_TEXT_DATA_['section_general']['more_lectors'];
$load_more_text = $_TEXT_DATA_['section_general']['load_more'];
?>
<!----------------------------------------------------------------------------------------------------------------------    Lectors part-->
<style>
    #lectorsMore {
        display: none;
    }

    .item {
        display: block;
    }

    .item-copy {
        display: none;
    }
</style>
<section class="flat-row lectors-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
                <div id="lectorsHolder">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lectors portfolio-wrap">
                                <?php
                                foreach ($lectors as $lector_string) {
                                    $lector = explode($_PERRY_['section_general']['string_splitter'], $lector_string);
                                    ?>
                                    <div class="lector-hover-wrap item-copy  hidden">
                                        <div class="lector">
                                            <div class="lector-image-holder"
                                                 style="background-image: url('images/lectors/<?php echo $lector[3] ?>')">
                                            </div>
                                            <div class="lector-info-holder">
                                                <p class="lector-motto">
                                                    <?php echo $lector[2] ?>
                                                </p>
                                                <div class="lector-company">
                                                    <img src="<?php echo str_replace('lectors/b', 'lectors/', $lector[4]) ?>"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="lector-name">
                                            <?php echo $lector[0] ?>
                                        </h6>
                                        <h6 class="lector-title">
                                            <?php echo $lector[1] ?>
                                        </h6>
                                    </div>
                                <?php } ?>
                            </div><!-- /.portfolio-wrap -->
                        </div><!-- /.flat-portfolio -->
                        <div id="lectorsMore" class="col-xs-12 text-center">
                            <h2 style="color: #f1c40f; font-size: 20px; font-weight: bold">
                                <?php echo $more_text ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 button-holder">
                            <button id="lectorsCollapseBtn" class="porftolio-collapse-button">
                                <span class="button-text">
                                <?php echo $load_more_text; ?>
                                </span>
                                <i class="fa">
                                    <img src="../icon/Arrow/Down.svg" alt="Arrow right">
                                </i>
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
    </div>
</section>
