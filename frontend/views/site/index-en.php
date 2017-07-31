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
                <p>Hello, my name is Nadine. I am Junior Developer</p>
                <p>The site was created with the purpose of additional practice</p>
                <p>Here you can see my portfolio</p>
                <p>And also you can read my thoughts on different things</p>
            </div>
        </div>
    </div>
</div>
