<?php

function page_title($page_title, $height, $color)
{
?>

    <style>
        .page-title {
            margin: 20px 20px 20px 20px;
        }

        .page-title-small h2 {
            font-size: 18px !important;
            padding-top: 0;
        }

        .page-title-small h2 i {
            font-size: 15px;
        }

        .page-title-small h2 a {
            padding-right: 20px;
        }
        .page-title .subtitle {
            font-size:16px;
        }
    </style>


    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-chevron-left"></i></a><?php echo $page_title; ?></h2>

        <?php if ($height > 70) { ?>
            <div class="row d-flex align-items-end" style="height:<?php echo $height - 70; ?>px;">
                <div class="col-9">
                    <div class="text-white subtitle">
                        Study Abroad is the Single Most Effective Way of Changing the Way We View the World<br>
                        <strong class="pt-2 d-block">Chantal Mitchell</strong>
                    </div>
                </div>
                <div class="col-3">
                    <p class="font-40 text-white text-center"><i class="fas fa-plane"></i></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="sdcustom-small card header-card shape-rounded" data-card-height="<?php echo $height; ?>">
        <div class="bgsd-<?php echo $color; ?> <?php echo ($color == 'gradient') ? '' : 'bgsd-circleimg' ; ?> card-overlay opacity-95"></div>
    </div>

<?php
}

function profil_title($page_title, $height, $color)
{
?>

    <style>
        .page-title {
            margin: 20px 20px 20px 20px;
        }

        .page-title-small h2 {
            font-size: 18px !important;
            padding-top: 0;
        }

        .page-title-small h2 i {
            font-size: 15px;
        }

        .page-title-small h2 a {
            padding-right: 20px;
        }
        .page-title .subtitle {
            font-size:16px;
        }
    </style>


    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-chevron-left"></i></a><?php echo $page_title; ?></h2>

        <?php if ($height > 70) { ?>
            <div class="row d-flex align-items-end" style="height:<?php echo $height - 70; ?>px;">
                
            </div>
        <?php } ?>
    </div>
    <div class="sdcustom-small card header-card shape-rounded" data-card-height="<?php echo $height; ?>">
        <div class="bgsd-<?php echo $color; ?> <?php echo ($color == 'gradient') ? '' : 'bgsd-circleimg' ; ?> card-overlay opacity-95"></div>
    </div>

<?php
}
