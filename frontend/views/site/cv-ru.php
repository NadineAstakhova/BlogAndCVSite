<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 30.06.2017
 * Time: 18:33
 */
$this->title = 'CV';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-education">
                <div class="row">
                     <h4>ОБРАЗОВАНИЕ</h4>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-xs-4" >
                        <?php
                        $url = Yii::$app->request->url;

                        $list_languages = \common\languages\Languages::$url_language;
                        //    http://portfolio/frontend/web/ru/site/login
                        preg_match("#^/(\w+/\w+)/($list_languages)(.*)#", $url, $match_arr);

                        Yii::trace('url', $url);
                        // Yii::trace('urlmatch', $match_arr[2]);
                        //if language exists in url
                        if ($match_arr[2] && $match_arr[2] != '/') {
                            echo " <img src=\"../../images/donetsk_nu_herb.gif\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
                        }
                        else
                            echo " <img src=\"../images/donetsk_nu_herb.gif\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
                        ?>
                    </div>
                    <div class="col-lg-6" >
                        kjkjg
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
