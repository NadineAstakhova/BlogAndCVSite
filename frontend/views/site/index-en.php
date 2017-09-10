<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 27.06.2017
 * Time: 20:42
 */
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
                <p>Hello, my name is Nadine. I am Junior Developer</p>
                <p>The site was created with the purpose of additional practice</p>
                <p>Here you can see my portfolio</p>
                <p>If you have questions or offers, write me to nadine.astakhova@gmail.com</p>
            </div>
        </div>
    </div>
</div>
