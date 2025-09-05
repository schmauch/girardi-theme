<?php

use yii\helpers\Html;
use yii\helpers\Url;

//use schmauch\accessibleMenu\AccessibleMenu;


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
    Arthur Girardi AG
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?php //Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
&copy; Arthur Girardi AG
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
