<?php
global $_TEXT_DATA_;

$workshops_data = $_TEXT_DATA_['section_workshops'];
?>
<!----------------------------------------------------------------------------------------------------------------------    News Feed Part-->
<section class="flat-row workshops-wrapper">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-left">
                    <h6 class="title-1-psb-dy text-left subheader-left">
                        <?php echo $workshops_data['subtitle'] ?>
                    </h6>
                    <h1 class="title-1-g-dg text-left">
                        <?php echo $workshops_data['title'] ?>
                    </h1>
                    <h1 class="description-pt-g text-left">
                        <?php echo $workshops_data['description'] ?>
                    </h1>
                </div>
            </div><!-- /col-xs-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="workshops-row row">
                    <?php
                    foreach ($workshops_data['workshops'] as $index => $item) {
                        $item_data = explode(';', $item);
                        ?>
                        <div class="workshop-item">
                            <?php if (strlen($item_data[0])): ?>
                                <img class="workshop-mentor" src="<?= $item_data[0]; ?>" alt="Mentor">
                            <?php endif; ?>
                            <?php if (strlen($item_data[1])): ?>
                                <h3 class="workshop-title">
                                    <?= $item_data[1];?>
                                </h3>
                            <?php endif; ?>
                            <?php if (strlen($item_data[2])): ?>
                                <p class="workshop-subtitle">
                                    <?= $item_data[2];?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>