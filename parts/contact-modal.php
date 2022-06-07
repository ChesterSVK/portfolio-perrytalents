<!-- Modal -->
<?php
global $_TEXT_DATA_;
$page_data = $_TEXT_DATA_['section_general'];
?>

<style>
    .modal-holder .typeform-close-holder button{
        width: 100%;
        float: right;
        position: relative;
        z-index: 10;
    }
    button, input[type="button"], input[type="reset"], input[type="submit"] {
        font-family: "Poppins",sans-serif;
        font-weight: 700;
        color: #222;
        background-image: none;
        height: 50px;
        background-color: #ead123;
        line-height: 50px;
        padding: 0 60px 0 58px;
        cursor: pointer;
        white-space: nowrap;
        border: 0;
        z-index: 0;
        display: inline-block;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }
    .modal{
        z-index: 1000000000;
        margin-right: -17px;
    }
    .modal .modal-dialog{
        margin-top: 0;
        z-index: 1041;
    }
    .modal .modal-dialog .row,
    .modal .modal-dialog .col-xs-12{
        height: 100%;
    }
</style>
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document" style="height: 100vh;">
        <div class="row">
            <div class="col-xs-12 modal-holder">
                <div class="typeform-close-holder">
                    <button data-dismiss="modal" type="button">
                        <?php echo $page_data['close']; ?>
                    </button>
                </div>
                <?php include_once 'signup_form.php'?>
            </div>
        </div>
    </div>
</div>