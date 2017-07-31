<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 10.06.2017
 * Time: 20:09
 */
/*
 * List of languages
 */
use yii\helpers\Html;

$language = Yii::$app->language; //current lang

if (Yii::$app->controller->action->id == 'article'){
    //this is php LOL
    //I know it is bad
    //Very-very bad
    //Don't look at this rows, please
    $array_lang = [
        'en' => Html::a('English', ['', 'lang' => 'en', 'idArticle' =>  $_GET['idArticle']-1]),
        'ru' => Html::a('Русский', ['', 'lang' => 'ru', 'idArticle' =>  $_GET['idArticle']+1]),
    ];
}
else {
    //normal array of languages
    $array_lang = [
        'en' => Html::a('English', ['', 'lang' => 'en']),
        'ru' => Html::a('Русский', ['', 'lang' => 'ru']),
    ];
}


//hide link of current language
if(isset($array_lang[$language])) unset($array_lang[$language]);
?>

<div class="languages">
    <?php foreach ($array_lang as $lang) {
        echo ' '.$lang.' ';
    } ?>
</div>
