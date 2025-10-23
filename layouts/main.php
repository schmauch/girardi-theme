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


<header>
    <div class="container">
        <div id="logo">
        <?= Html::img($this->theme->getUrl('assets/images/Logo_GirardiSchreinerei.svg'), ['width' => '100%','height' => 'auto']); ?>
        </div>
        <div id="navBar">
            <?php
                echo Html::beginTag('form', ['id' => 'searchBox']);
                echo Html::input('text', 'search', '', ['pattern' => '.*\S.*', 'required' => 'required']);
                echo Html::button('suchen', ['type' => 'submit']);
                echo Html::endTag('form');
                
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
