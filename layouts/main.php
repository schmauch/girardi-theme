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
    <a id="logo" href="/">
    	<?php include(__DIR__ . '/../assets/images/Logo_GirardiSchreinerei.svg'); ?>
    </a>
    <div id="navBar">
        <?php
            echo Html::beginTag('form', ['id' => 'searchBox']);
            echo Html::input('text', 'search', '', ['pattern' => '.*\S.*', 'required' => 'required', 'id' => 'searchBoxInput']);
            echo Html::button('suchen', ['type' => 'submit']);
            echo Html::endTag('form');
            
            echo AccessibleMenu::widget([
            'id' => 'mainMenu',
            'items' => [
                ['label' => 'Aktuell', 'url' => ['/cms/site/render', 'url' => 'aktuell'], 'items' => [
                    ['label' => 'Girardi Lounge', 'url' => ['/cms/site/render', 'url' => 'lounge']],
                    ['label' => 'offene Stellen', 'url' => ['/cms/site/render', 'url' => 'offene-stellen']],
                    ['label' => 'Ausstellungsverkauf', 'url' => ['/cms/site/render', 'url' => 'ausstellungsverkauf']],
                ]],
                ['label' => 'Über uns', 'url' => ['/cms/site/render', 'url' => 'ueber-uns'], 'items' => [
                    ['label' => 'Philosophie', 'url' => ['/cms/site/render', 'url' => 'philosophie']],
                    ['label' => 'Team', 'url' => ['/cms/site/render', 'url' => 'team']],
                    ['label' => 'Ausstellung', 'url' => ['/cms/site/render', 'url' => 'ausstellung']],
                    ['label' => 'Partner', 'url' => ['/cms/site/render', 'url' => 'partner']],
                    ['label' => 'Firmengeschichte', 'url' => ['/cms/site/render', 'url' => 'firmengeschichte']],
                    ['label' => 'Sponsoring', 'url' => ['/cms/site/render', 'url' => 'sponsoring']],
                    ['label' => 'AGBs', 'url' => ['/cms/site/render', 'url' => 'allgemeine-geschaeftsbedingungen']],
                    ['label' => 'Über uns (ImageFilm)', 'url' => ['/cms/site/render', 'url' => 'imagefilm']],
                ]],
                ['label' => 'Produkte', 'url' => ['/cms/site/render', 'url' => 'produkte'], 'items' => [
                    ['label' => 'Küchen', 'url' => ['/cms/site/render', 'url' => 'kuechen']],
                    ['label' => 'Badezimmer', 'url' => ['/cms/site/render', 'url' => 'badezimmer']],
                    ['label' => 'Möbel', 'url' => ['/cms/site/render', 'url' => 'moebel']],
                    ['label' => 'Innenausbau', 'url' => ['/cms/site/render', 'url' => 'innenausbau']],
                    ['label' => 'allg. Schreinerarbeiten', 'url' => ['/cms/site/render', 'url' => 'allgemeine-schreinerarbeiten']],
                    ['label' => 'Reparaturen', 'url' => ['/cms/site/render', 'url' => 'reparaturen']],
                    ['label' => 'Apparate-Austausch', 'url' => ['/cms/site/render', 'url' => 'apparate-austausch']],
                    ['label' => 'Liftkabinen', 'url' => ['/cms/site/render', 'url' => 'liftkabinen']],
                    ['label' => 'Weinregale', 'url' => ['/cms/site/render', 'url' => 'http://www.weinregal.ch']],
                    ['label' => 'Insektenschutz', 'url' => ['/cms/site/render', 'url' => 'insektenschutz']],
                ]],
                ['label' => 'Planung', 'url' => ['/cms/site/render', 'url' => 'planung'], 'items' => [
                    ['label' => 'Innenarchitektur', 'url' => ['/cms/site/render', 'url' => 'innenarchitektur']],
                ]],
                ['label' => 'Referenzen', 'url' => ['/cms/site/render', 'url' => 'referenzen'], 'items' => [
                    ['label' => 'Küchen', 'url' => ['/cms/site/render', 'url' => 'referenzen-kuechen']],
                    ['label' => 'Badezimmer', 'url' => ['/cms/site/render', 'url' => 'referenzen-badezimmer']],
                    ['label' => 'Möbel', 'url' => ['/cms/site/render', 'url' => 'referenzen-moebel']],
                    ['label' => 'Innenausbau', 'url' => ['/cms/site/render', 'url' => 'referenzen-innenausbau']],
                    ['label' => 'allgemeine Schreinerarbeiten', 'url' => ['/cms/site/render', 'url' => 'referenzen-allgemeine-schreinerarbeiten']],
                    ['label' => 'Öffentliche Bauten', 'url' => ['/cms/site/render', 'url' => 'referenzen-oeffentliche-bauten']],
                    ['label' => 'Umbauten', 'url' => ['/cms/site/render', 'url' => 'referenzen-umbauten']],
                    ['label' => 'Liftkabinen', 'url' => ['/cms/site/render', 'url' => 'referenzen-liftkabinen']],
                    ['label' => 'Reparaturen', 'url' => ['/cms/site/render', 'url' => 'referenzen-reparaturen']],
                    ['label' => 'Garderoben', 'url' => ['/cms/site/render', 'url' => 'referenzen-garderoben']],
                ]],
                ['label' => 'Kontakt', 'url' => ['/cms/site/render', 'url' => 'kontakt'], 'items' => [
                    ['label' => 'Beratungstermin vereinbaren', 'url' => ['/cms/site/render', 'url' => 'termine']],
                    ['label' => 'Schreinerei Girardi weiterempfehlen', 'url' => ['/cms/site/render', 'url' => 'vermitteln']],
                ]],
            ],
            'activateParents' => true,
            'activateItems' => true,
            'options' => ['class' => 'slide'],
        ]);
        ?>
    </div>
</header>

<main id="main" role="main">
    <div class="wrapper">
        <?php //Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<footer>
    <div class="wrapper">
        <a id="macher" href="https://www.schreiner.ch/" target="_blank">
            <?= Html::img($this->theme->getUrl('assets/images/macher.svg')) ?>
        </a>
        <div id="footer">
            <div class="footer-col">
                <span><b style="font-family: avantgarde-semibold; font-weight: normal;">GIRARDI</b> SCHREINEREI AG</span>
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

<!-- script type="text/javascript" src="https://freihand.ch/utilities/ruler.min.js"></script -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
