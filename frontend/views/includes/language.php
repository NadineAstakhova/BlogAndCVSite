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
//array of languages
$array_lang = [
    'en' => Html::a('English', ['', 'lang' => 'en']),
    'ru' => Html::a('Русский', ['', 'lang' => 'ru']),
];
//hide link of current language
if(isset($array_lang[$language])) unset($array_lang[$language]);
?>

<div class="languages">
    <?php foreach ($array_lang as $lang) {
        echo ' '.$lang.' ';
    } ?>
</div>
