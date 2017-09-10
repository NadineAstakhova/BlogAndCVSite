<?php

/* @var $this yii\web\View */

$this->title = 'Nadine Astakhova';
?>
<div class="row">
    <div class="info-all">
        <div class="col-lg-4">
            <?php
                $url = Yii::$app->request->url;
                $list_languages = \common\languages\Languages::$url_language;
                echo " <img src=\"https://nadineastalhova.000webhostapp.com/images/profile-foto1.png\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
            ?>

        </div>
        <div class="col-lg-6">
            <div class="info">
                <p>Привет, Я Надя, начинающий программист</p>
                <p>Сайт создан с целью дополнительной практики</p>
                <p>Здесь вы можете увидеть моё портфолио</p>
                <p>Если у Вас есть вопросы или предложения, пишите nadine.astakhova@gmail.com</p>
            </div>
        </div>
    </div>
</div>
