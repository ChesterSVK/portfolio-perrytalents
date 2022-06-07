<!----------------------------------------------------------------------------------------------------------------------    Introduction part-->
<section class="hero-wrapper" style="background-image: url('<?php echo $hero_data['img']; ?>')">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12 col-sm-8 text-column">
                <?php if (isset($hero_data['subtitle'])) {
                    ?>
                    <div class="subheader title-1-pts-dy subheader-left">
                        <?php echo $hero_data['subtitle']; ?>
                    </div>
                    <?php
                }?>

                <?php if (isset($hero_data['title'])) {
                    ?>
                    <div class="header title-1-ps-w">
                        <?php echo $hero_data['title']; ?>
                    </div>
                    <?php
                }?>

                <?php if (isset($hero_data['description'])) {
                    ?>
                    <div class="description">
                        <?php echo $hero_data['description']; ?>
                    </div>
                    <?php
                }?>

                <?php if (isset($hero_data['button'])) {
                    ?>
                    <div class="btn-holder">
                        <a id="Prihlaska_Yellow"  onclick="sendGAClick('Prihlaska_Yellow')" class="hero-btn sign-up-btn" data-link="<?php echo $_TEXT_DATA_['section_signup_link']['href'];?>" href="<?php echo $_TEXT_DATA_['section_signup_link']['href'];?>"><?php echo $_TEXT_DATA_['section_signup_link']['title']; ?></a>
                    </div>
                    <?php
                }?>
            </div>
            <div class="col-xs-12 col-sm-4">

<!--                --><?php //if (isset($hero_data['img'])) {
//                    ?>
<!--                    <div class="hero-photo-holder">-->
<!--                        <div class="hero-photo image-optimized-holder" >-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php
//                }?>
            </div>
        </div><!-- /.row -->
    </div>
</section>