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
                //    http://portfolio/frontend/web/ru/site/login
                preg_match("#^/(\w+/\w+)/($list_languages)(.*)#", $url, $match_arr);

                Yii::trace('url', $url);
                // Yii::trace('urlmatch', $match_arr[2]);
                //if language exists in url
                if ($match_arr[2] && $match_arr[2] != '/') {
                    echo " <img src=\"../../images/profile-foto1.png\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
                }
                else
                    echo " <img src=\"../images/profile-foto1.png\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
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
