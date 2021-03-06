<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Nadine Astakhova',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => Yii::t('app', 'Главная') , 'url' => ['/site/index']],
        ['label' => 'CV', 'url' => ['/site/cv']],
        ['label' => Yii::t('app', 'Портфолио'), 'url' => ['/site/portfolio']],
    ];
    /*if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }*/
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

   <div class="container">
       <?= Breadcrumbs::widget([
           'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
       ]) ?>
       <?= Alert::widget() ?>
       <?= $content ?>
    </div>

</div>

<?php
$url = Yii::$app->request->url;
    if(strpos($url, "index") == false) {?>
    <div id="scroller" class="b-top" style="display: none;">
        <i class="fa fa-arrow-up" aria-hidden="true" id="b-top-but"></i>
    </div>
<?php }?>
<footer class="footer">
    <div class="container">
        <p class="pull-right" style="padding-top: 13px">
            <a href="https://www.facebook.com/nadine.astakhova"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/nadine-astakhova-015547b0/"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/NadineAstakhova"><i class="fa fa-github"></i></a>
        </p>
        <?= $this->render('//includes/language') ?>


        <p class="pull-left">&copy; Nadine Astakhova <?= date('Y') ?></p>



    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
