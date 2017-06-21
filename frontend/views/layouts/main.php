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
        ['label' => 'CV', 'url' => ['/site/about']],
        ['label' => Yii::t('app', 'Блог'), 'url' => ['/site/blog']],
        ['label' => Yii::t('app', 'Контакты'), 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
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
    }
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
