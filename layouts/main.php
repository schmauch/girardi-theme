<?php

use yii\helpers\Html;
use yii\helpers\Url;

use schmauch\accessibleMenu\AccessibleMenu;
use schmauch\girardi\assets\GirardiAssets;

$girardiAsset = GirardiAssets::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <noscript>
        <link rel="stylesheet" type="text/css" href="/css/no-js.css" />
    </noscript>
</head>
<body>
<?php $this->beginBody() ?>

<a class="skiplink" href="#main">
    Direkt zum Inhalt springen
</a>


<div id="jumbotron">
    &nbsp;
</div>

<header>
        <div id="logo">
        <svg
           width="4500"
           height="2400"
           viewBox="0 0 4500 2400"
           version="1.1"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:svg="http://www.w3.org/2000/svg">
          <path
             d="m 565.48014,602.325 a 702.5,702.5 0 1 1 0,1195.35 m 10.67586,19.1426 V 583.18238 Z"
             stroke="currentColor"
             stroke-width="45"
             fill="none"
             id="path2" />
          <path
             d="m 1632.156,1177.5 h -685 v 106 h 238.5728 c -36.7287,128.8614 -164.0236,209.9012 -296.28892,188.6492 C 757.17766,1450.8977 661.75776,1334.075 667.23019,1200.2015 672.70262,1066.3279 777.33909,957.68299 910.89455,947.29749 1044.4531,936.91175 1164.7089,1028.0709 1190.7976,1159.5 h 441.9877 c 1.2017,5.9851 -1.6746,11.9856 -0.6293,18 z"
             stroke="currentColor"
             stroke-width="45"
             fill="currentColor"
             id="path4"
             sodipodi:nodetypes="ccccsssccc" />
          <g
             aria-label="GIRARDI"
             id="text497"
             style="font-size:568.267px;letter-spacing:0px;word-spacing:0px"
             transform="translate(150)">
            <path
               d="m 1936.4347,1143.1715 h 250.0042 q -4.1621,94.6187 -61.3218,153.4432 -57.1597,58.547 -144.8415,58.547 -45.5058,0 -84.0747,-17.4808 -38.2914,-17.4809 -68.8136,-51.8877 -25.8051,-28.5798 -39.1238,-64.9289 -13.3188,-36.6266 -13.3188,-78.2477 0,-42.4536 16.0935,-80.4675 16.0935,-38.014 47.1706,-68.53616 29.4123,-29.41226 65.7614,-43.84091 36.3491,-14.70613 80.745,-14.70613 61.3218,0 107.3825,28.85731 46.3381,28.57984 69.9234,81.57739 h -72.1432 q -19.9782,-25.8051 -47.7256,-38.8464 -27.7474,-13.04126 -61.8767,-13.04126 -28.5799,0 -54.3849,10.82146 -25.8051,10.8215 -45.7833,31.3546 -20.8105,21.3655 -32.4645,49.6679 -11.6539,28.3023 -11.6539,57.7146 0,31.6321 10.544,59.9344 10.5441,28.0249 30.2447,48.558 20.8106,21.643 48.0031,33.5744 27.1924,11.9313 55.4948,11.9313 46.0607,0 81.2999,-24.4177 35.2392,-24.6952 57.9921,-72.6982 h -183.1329 z"
               style="fill:currentColor"
               id="path6566" />
            <path
               d="m 2299.0934,1347.115 h -58.5471 V 943.11265 h 58.5471 z"
               style="fill:currentColor"
               id="path6568" />
            <path
               d="m 2428.1188,1152.8831 h 29.9672 q 60.7669,0 90.4566,-19.7007 29.6897,-19.7006 29.6897,-59.9344 0,-39.1238 -25.5276,-57.4371 -25.5276,-18.31332 -80.7449,-18.31332 h -43.841 z m 0,194.2319 h -58.547 V 943.11265 h 116.5391 q 72.6983,0 110.9897,33.57437 38.2914,33.57438 38.2914,97.11598 0,49.3904 -32.187,82.6873 -31.9095,33.0194 -82.4098,35.5166 l 114.5968,155.1081 h -73.2532 l -134.02,-187.5725 z"
               style="fill:currentColor"
               id="path6570" />
            <path
               d="m 2880.9566,1172.5838 -56.8822,-153.4432 -57.9921,153.4432 z m -135.6849,56.8822 -45.5057,117.649 h -61.8768 L 2795.772,943.11265 h 56.8822 L 3010.537,1347.115 h -64.0965 l -44.3959,-117.649 z"
               style="fill:currentColor"
               id="path6572" />
            <path
               d="m 3091.282,1152.8831 h 29.9672 q 60.7668,0 90.4566,-19.7007 29.6897,-19.7006 29.6897,-59.9344 0,-39.1238 -25.5276,-57.4371 -25.5276,-18.31332 -80.745,-18.31332 h -43.8409 z m 0,194.2319 h -58.5471 V 943.11265 h 116.5392 q 72.6982,0 110.9896,33.57437 38.2915,33.57438 38.2915,97.11598 0,49.3904 -32.187,82.6873 -31.9096,33.0194 -82.4099,35.5166 l 114.5969,155.1081 h -73.2532 l -134.02,-187.5725 z"
               style="fill:currentColor"
               id="path6574" />
            <path
               d="m 3407.88,1293.0075 h 71.0334 q 67.4262,0 106.55,-39.1238 39.4014,-39.4013 39.4014,-106.8276 0,-69.9234 -41.6211,-109.3248 Q 3541.6225,998.33 3468.0919,998.33 H 3407.88 Z m 56.6047,54.1075 H 3350.9978 V 943.11265 h 130.1354 q 91.0115,0 146.7838,56.32725 56.0498,56.3272 56.0498,147.0613 0,51.6102 -21.0881,94.0637 -20.8105,42.4536 -60.2119,70.7559 -26.6375,19.1457 -56.8822,27.47 -30.2446,8.3242 -81.2999,8.3242 z"
               style="fill:currentColor"
               id="path6576" />
            <path
               d="m 3796.3438,1347.115 h -58.5471 V 943.11265 h 58.5471 z"
               style="fill:currentColor"
               id="path6578" />
          </g>
          <g
             aria-label="SCHREINEREI"
             id="text501"
             style="font-size:284.133px;letter-spacing:40px;word-spacing:0px"
             transform="translate(150)">
            <path
               d="m 1817.4808,1692.4649 h 19.1456 q 0.555,18.7295 10.544,29.8284 10.1278,11.099 26.4988,11.099 17.6195,0 27.8861,-10.9602 10.4052,-11.099 10.4052,-29.9672 0,-27.4699 -42.4534,-41.4823 -3.3297,-1.1099 -4.9946,-1.6648 -22.1979,-7.6305 -32.0482,-19.2844 -9.7115,-11.7927 -9.7115,-30.6609 0,-24.1402 14.9835,-39.54 15.1223,-15.3998 38.9851,-15.3998 22.7528,0 36.0715,14.0125 13.3188,14.0124 14.8449,39.4012 h -18.7295 q -1.5261,-16.5097 -9.8503,-25.3888 -8.3242,-9.0179 -22.3366,-9.0179 -14.9836,0 -24.5564,9.8503 -9.4341,9.7116 -9.4341,24.8339 0,7.908 2.7747,13.7349 2.9135,5.6882 9.1566,10.4053 6.3819,4.7171 24.4177,10.544 10.4053,3.3297 15.816,5.4107 19.7006,7.6306 28.3023,19.5619 8.7404,11.7927 8.7404,31.0771 0,29.4122 -16.0934,47.448 -15.9548,17.897 -42.4535,17.897 -24.6952,0 -40.095,-16.9259 -15.3997,-17.0646 -15.8159,-44.812 z"
               style="fill:currentColor"
               id="path6595" />
            <path
               d="m 2161.4531,1600.4824 q -13.5962,-18.8682 -30.3833,-27.7473 -16.7872,-8.8792 -38.2914,-8.8792 -33.7131,0 -57.7145,24.9726 -23.8628,24.9727 -23.8628,59.3794 0,36.6265 23.724,61.7379 23.8628,25.1113 57.8533,25.1113 20.9493,0 37.8751,-8.7404 16.9259,-8.7404 29.4123,-26.0825 h 23.5852 q -13.8737,25.805 -37.1815,39.9562 -23.3077,14.0124 -52.3037,14.0124 -44.5346,0 -74.363,-30.3834 -29.6896,-30.3833 -29.6896,-75.889 0,-21.2267 8.0467,-40.2337 8.0467,-19.0069 23.5852,-34.268 14.4287,-14.4286 32.3257,-21.7816 18.0358,-7.4918 38.9851,-7.4918 30.1059,0 54.1073,14.7061 24.1402,14.7061 38.1527,41.621 z"
               style="fill:currentColor"
               id="path6597" />
            <path
               d="m 2274.0125,1750.1794 h -19.9781 v -202.0008 h 19.9781 v 90.5952 h 96.0058 v -90.5952 h 19.8394 v 202.0008 h -19.8394 v -92.1212 h -96.0058 z"
               style="fill:currentColor"
               id="path6599" />
            <path
               d="m 2484.3812,1568.018 v 182.1614 h -19.5618 v -202.0008 h 54.2461 q 17.897,0 28.7185,2.7748 10.9602,2.636 19.8393,8.8791 12.0701,8.463 19.007,22.6141 7.0756,14.1512 7.0756,29.9672 0,23.4465 -14.0125,40.3724 -13.8736,16.9259 -34.8229,18.452 l 48.8354,78.9412 h -23.5853 l -59.9343,-97.3932 h 19.1457 q 19.1457,0 31.077,-11.2377 12.0701,-11.2377 12.0701,-28.8572 0,-10.6828 -3.7459,-19.4232 -3.6071,-8.7404 -10.8214,-15.261 -5.9657,-5.4108 -14.4287,-7.6306 -8.3242,-2.3585 -29.8284,-2.3585 z"
               style="fill:currentColor"
               id="path6601" />
            <path
               d="m 2685.5934,1638.7738 h 84.907 v 19.9781 h -84.907 v 71.8657 h 84.907 v 19.5618 h -104.8851 v -202.0008 h 104.8851 v 19.8394 h -84.907 z"
               style="fill:currentColor"
               id="path6603" />
            <path
               d="m 2867.7987,1750.1794 h -19.8394 v -202.0008 h 19.8394 z"
               style="fill:currentColor"
               id="path6605" />
            <path
               d="m 3079.5548,1726.0392 -2.3585,-177.8606 h 19.7006 v 202.0008 h -23.8627 l -110.8507,-178.138 2.2198,178.138 h -19.5619 v -202.0008 h 23.8627 z"
               style="fill:currentColor"
               id="path6607" />
            <path
               d="m 3194.889,1638.7738 h 84.9069 v 19.9781 h -84.9069 v 71.8657 h 84.9069 v 19.5618 h -104.885 v -202.0008 h 104.885 v 19.8394 h -84.9069 z"
               style="fill:currentColor"
               id="path6609" />
            <path
               d="m 3374.3195,1568.018 v 182.1614 h -19.5619 v -202.0008 h 54.2461 q 17.897,0 28.7185,2.7748 10.9602,2.636 19.8394,8.8791 12.0701,8.463 19.0069,22.6141 7.0756,14.1512 7.0756,29.9672 0,23.4465 -14.0124,40.3724 -13.8737,16.9259 -34.823,18.452 l 48.8354,78.9412 h -23.5853 l -59.9343,-97.3932 h 19.1457 q 19.1457,0 31.0771,-11.2377 12.0701,-11.2377 12.0701,-28.8572 0,-10.6828 -3.7459,-19.4232 -3.6072,-8.7404 -10.8215,-15.261 -5.9657,-5.4108 -14.4286,-7.6306 -8.3242,-2.3585 -29.8285,-2.3585 z"
               style="fill:currentColor"
               id="path6611" />
            <path
               d="m 3575.5317,1638.7738 h 84.9069 v 19.9781 h -84.9069 v 71.8657 h 84.9069 v 19.5618 h -104.885 v -202.0008 h 104.885 v 19.8394 h -84.9069 z"
               style="fill:currentColor"
               id="path6613" />
            <path
               d="m 3757.7369,1750.1794 h -19.8393 v -202.0008 h 19.8393 z"
               style="fill:currentColor"
               id="path6615" />
          </g>
        </svg>
    </div>
    <div class="container">
        <div id="navBar">
            <?php
                echo Html::beginTag('form', ['id' => 'searchBox']);
                echo Html::input('text', 'search', '', ['pattern' => '.*\S.*', 'required' => 'required']);
                echo Html::button('suchen', ['type' => 'submit']);
                echo Html::endTag('form');
                
                echo AccessibleMenu::widget([
                'id' => 'mainMenu',
                'items' => [
                    ['label' => 'Home', 'url' => ['/cms/site/render', 'url' => 'index']],
                    ['label' => 'Über uns', 'url' => ['/cms/site/render', 'url' => 'ueber-uns'], 'items' => [
                        ['label' => 'Philosophie', 'url' => ['/cms/site/render', 'url' => 'philosophie']]
                    ]],
                    ['label' => 'Produkte', 'url' => ['/cms/site/render', 'url' => 'produkte'], 'items' => [
                        ['label' => 'Küchen', ['/cms/site/render', 'url' => 'kuechen']],
                        ['label' => 'Badzimmer', 'url' => ['/cms/site/render', 'url' => 'badezimmer']],
                        ['label' => 'Möbel', 'url' => ['/cms/site/render', 'url' => 'moebel']],
                    ]],
                ],
                'activateParents' => true,
                'activateItems' => true,
                'options' => ['class' => 'slide'],
            ]);
            ?>
        </div>
    </div>
</header>

<main id="main" role="main">
    <div class="container">
        <?php //Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<footer>
    <div class="container">
        <a id="macher" href="https://www.schreiner.ch/" target="_blank">
            <?= Html::img($this->theme->getUrl('assets/images/macher.svg')) ?>
        </a>
        <div id="footer">
            <div class="footer-col">
                <span>Arthur Girardi AG</span>
                <span>Maienbrunnenstrasse 5</span>
                <span>8908 Hedingen</span>
            </div>
            <div class="footer-col">
                <span>Tel: <a href="tel:+41433226699">+41 43 322 66 99</a></span>
                <span>E-Mail: <a href="mailto:info@girardi.ch">info@girardi.ch</a></span>
                <span id="footer-som">
                    <a href="https://www.instagram.com/arthurgirardiag/" target="_blank">
                        <?php include $this->theme->getBasePath() .'/assets/images/instagram.svg'; ?>
                    </a>&nbsp;
                    <a href="https://www.pinterest.com/arthur_girardi_ag/" target="_blank">
                        <?php include $this->theme->getBasePath() .'/assets/images/pinterest.svg'; ?>
                    </a>&nbsp;
                    <a href="https://www.facebook.com/ArthurGirardiAG/" target="_blank">
                        <?php include $this->theme->getBasePath() . '/assets/images/facebook.svg'; ?>
                    </a>&nbsp;
                    <a href="https://www.linkedin.com/company/arthur-girardi-ag" target="_blank">
                        <?php include $this->theme->getBasePath() . '/assets/images/linkedin.svg'; ?>
                    </a>                
                </span>
            </div>
            <div class="footer-col">
                <span><a href="?gdpr=settings">Datenschutz</a></span>
                <span><a href="impressum">Impressum</a></span>
                <span><a href="sitemap">Sitemap</a></span>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
