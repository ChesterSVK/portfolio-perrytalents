<?php
global $_TEXT_DATA_;

$intro_mentors_data = $_TEXT_DATA_['section_intro_mentors'];
?>
<!----------------------------------------------------------------------------------------------------------------------    Mentors Part-->
<section class="flat-row mentors-wrapper">
    <div class="background-right"></div>
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12">
<!--                <h6 class="title-1-psb-dy subheader-left">-->
<!--                    --><?php //echo $intro_mentors_data['subtitle'] ?>
<!--                </h6>-->
                <h1 class="title-1-g-w text-center" style="max-height: unset">
                    <?php echo $intro_mentors_data['title'] ?>
                </h1>
<!--                <h1 class="description-pt-g text-left">-->
<!--                    --><?php //echo $intro_mentors_data['description'] ?>
<!--                </h1>-->
            </div>
            <div class="col-xs-12">
                <div class="mentors-row row">
                    <?php

                    $max_index = 2;
                    $lectors = $intro_mentors_data['lectors'];
                    foreach ($lectors as $index => $lector_string) {
                        if ($index > $max_index) {
                            break;
                        }
                        $lector = explode($_PERRY_['section_general']['string_splitter'], $lector_string);
                        ?>
                        <div class="col-xs-12 col-sm-4 col-md-4">

                            <div class="mentor-item">
                                <div class="row">
                                    <div class="col-xs-12 image-section">
                                        <div class="image"
                                             style="background-image: url('images/lectors/<?php echo $lector[3] ?>')">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 text-section">
                                        <div class="title-section">
                                            <h6 class="name">
                                                <?php echo $lector[0] ?>
                                            </h6>
                                            <h5 class="company">
                                                <?php echo $lector[1] ?>
                                            </h5>
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
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="item-btn-holder">
                    <a href="/consultants" class="more-link">
                        All consultants <i class="fa"><img class="" src="./icon/Arrow/Right.svg" alt="Arrow right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>