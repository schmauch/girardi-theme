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
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <?= Html::img($this->theme->getUrl('assets/images/Logo_GirardiSchreinerei.svg'), ['width' => 400, 'height' => 'auto']); ?>
        <?php
            echo AccessibleMenu::widget([
            'id' => 'mainMenu',
            'items' => [
                ['label' => 'Home', 'url' => ['site/index']],
                ['label' => 'Über uns', 'url' => ['site/about'], 'items' => [
                    ['label' => 'Philosophie', 'url' => ['site/philosophy']]
                ]],
                ['label' => 'Produkte', 'url' => ['site/products'], 'items' => [
                    ['label' => 'Küchen', 'url' => ['/foo']],
                    ['label' => 'Badzimmer', 'url' => ['/bar']],
                    ['label' => 'Möbel', 'url' => ['/baz']],
                ]],
            ],
            'activateParents' => true,
            'activateItems' => true,
            'options' => ['class' => 'slide'],
        ]);
        ?>
    </div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?php //Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<footer>
    <div class="container" style="position: relative;">
        <a id="macher" href="https://www.schreiner.ch/" target="_blank">
            <?= Html::img($this->theme->getUrl('assets/images/macher.svg')) ?>
        </a>
        <div id="footer" class="row g-5">
            
            <div class="footer-col col-12 col-md-5 col-xl-4 my-3">
                <span>Arthur Girardi AG</span>
                <span>Maienbrunnenstrasse 5</span>
                <span>8908 Hedingen</span>
            </div>
            <div class="footer-col col-6 col-md-4 col-xl-5 my-3">
                <span>Tel: <a href="tel:+41433226699">+41 43 322 66 99</a></span>
                <span>E-Mail: <a href="mailto:info@girardi.ch">info@girardi.ch</a></span>
                <span>
                    <a href="https://www.instagram.com/arthurgirardiag/" target="_blank" style="display: inline-block; width: 1em; height: auto; color: white;">
                        <?php include $this->theme->getBasePath() .'/assets/images/instagram.svg'; ?>
                    </a>&nbsp;
                    <a href="https://www.pinterest.com/arthur_girardi_ag/" target="_blank" style="display: inline-block; width: 1em; height: auto; color: white;">
                        <?php include $this->theme->getBasePath() .'/assets/images/pinterest.svg'; ?>
                    </a>&nbsp;
                    <a href="https://www.facebook.com/ArthurGirardiAG/" target="_blank" style="display: inline-block; width: 1em; height: auto; color: white;">
                        <?php include $this->theme->getBasePath() . '/assets/images/facebook.svg'; ?>
                    </a>&nbsp;
                    <a href="https://www.linkedin.com/company/arthur-girardi-ag" target="_blank" style="display: inline-block; width: 1em; height: auto; color: white;">
                        <?php include $this->theme->getBasePath() . '/assets/images/linkedin.svg'; ?>
                    </a>                
                </span>
            </div>
            <div class="footer-col col-6 col-md-3 col-xl-3 my-3">
                <span><a href="?gdpr=settings">Datenschutz</a></span>
                <span>Impressum</span>
                <span>Sitemap</span>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
