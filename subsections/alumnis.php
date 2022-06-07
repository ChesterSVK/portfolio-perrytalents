<?php
global $_TEXT_DATA_;

$alumnis = $_TEXT_DATA_['section_page_alumni']['alumnis'];
$more_text = $_TEXT_DATA_['section_general']['more_project'];
?>

<!----------------------------------------------------------------------------------------------------------------------    Alumni part-->
<section class="flat-row alumni-wrapper">
    <div class="container-fluid max-width">
        <div class="alumnis row">
            <style>
                .alumni-img svg{
                    width: 100%;
                    height: 100%;
                }
            </style>
            <?php
            foreach ($alumnis as $index => $alumni_string) {
                $alumni = explode($_PERRY_['section_general']['string_splitter'], $alumni_string);
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3 alumni">
                    <a href="<?= $alumni[5]?>" target="_blank">
                        <div class="alumni-img">
                            <div style="display:table; height: 130px;">
                                <div style="display:table-cell; vertical-align: middle; padding: 1rem; height: 130px;">
                                    <img style="width: 100%" class="svg" src="<?= $alumni[2]?>" alt="Alumni">
                                </div>
                            </div>
                        </div>
                    </a>
                    <p class="alumni-title">
                        <?= $alumni[0]; ?>
                    </p>
                    <p class="alumni-year">
                        <?= $alumni[1]; ?>
                    </p>
                </div>
                <?php
            }
            ?>
        </div><!-- /row -->
    </div>
</section>