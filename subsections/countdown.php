<?php
$countdown_page_data = $_TEXT_DATA_['section_countdown']
?>
<!------------------------------------------------------------------------------------------------------------------    Launching part-->
<style>
    .section-launching{
        max-width: 1000px;
        margin: 0 auto 15px auto;
        padding: 0 15px 100px 15px;
    }
    .section-launching .column{
        margin-top: -220px;
        background: linear-gradient(214.51deg,#ead123 0,#d7a923 100%);
        padding: 30px 15px;
        text-align: center;
        box-shadow: 0 2px 10px -2px rgba(0,0,0,0.8);
    }
    .section-launching .column .title-section h2{
        margin: 0 auto;
        text-align: center !important;
    }
    #countdownHeader{
        font: bold 200px arial, sans-serif !important;
        transition: .2s ease-in-out;
        font-size: 100px !important;
        line-height: 100px !important;
        margin: 40px 0 10px 0 !important;
        text-shadow: 2px 2px rgba(0,0,0,0.15);
        color: #2f3f58 !important;
    }
    .section-launching .column .title-section h6 span{
        color: #fff;
        margin: 0 25px;
        text-align: center;
        font-family: "PierSans-Regular";
        font-size: 23px;
        font-weight: 400;
        line-height: 28px;
    }
    .join-us-wrapper{
        overflow: visible !important;
    }
    @media only screen and (min-width: 767px) and (max-width: 991px){
        .section-launching{
            padding: 0 15px 100px 15px;
        }
        .section-launching .column{
            margin-top: -210px;
        }
        #countdownHeader{
            text-align: center !important;
            font-size: 90px !important;
            line-height: 90px !important;
        }
        .section-launching .column .title-section h6 span{
            color: #fff;
            margin: 0 25px;
            font-size: 22px;
            line-height: 27px;
        }
    }
    @media only screen and (min-width: 416px) and (max-width: 767px){
        .section-launching{
            padding: 0 15px 100px 15px;
        }
        .section-launching .column{
            margin-top: -200px;
        }
        #countdownHeader{
            text-align: center !important;
            font-size: 50px !important;
            line-height: 50px !important;
        }
        .section-launching .column .title-section h6 span{
            color: #fff;
            margin: 0 10px;
            font-size: 22px;
            line-height: 25px;
        }
    }
    @media only screen and (max-width: 416px){
        .section-launching{
            padding: 0 15px 100px 15px;
        }
        .section-launching .column{
            margin-top: -200px;
        }
        #countdownHeader{
            text-align: center !important;
            font-size: 40px !important;
            line-height: 35px !important;
        }
        .section-launching .column .title-section h6 span{
            color: #fff;
            margin: 0 5px;
            font-size: 20px;
            line-height: 20px;
        }
    }
</style>
<section class="section-launching">
    <div class="container-fluid max-width">
        <div class="row">
            <div class="col-xs-12 column">
                <div class="title-section">
                    <h2 class="title-1-ps-w text-center">
                        <?php echo $countdown_page_data['header'] ?>
                    </h2>
                    <h1 id="countdownHeader" class="title-1-g-db">
                    </h1>
                    <h6>
                        <span>
                            <?php echo $countdown_page_data['days'] ?>
                        </span>
                        <span>
                            <?php echo $countdown_page_data['hours'] ?>
                        </span>
                        <span>
                            <?php echo $countdown_page_data['minutes'] ?>
                        </span>
                        <span>
                            <?php echo $countdown_page_data['seconds'] ?>
                        </span>
                    </h6>
                    <h6 style="margin: 15px auto; color: #fff; max-width: 500px;">
                        Vzhledem na kritický stav, způsobený šířením onemocnění COVID-19 posouváme deadline pro zaslání přihlášky a začátek akcelerátoru.  Pokud by nastaly další změny, budeme vás informovat na této webové stránce.
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>