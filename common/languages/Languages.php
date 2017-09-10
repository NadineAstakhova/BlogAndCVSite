<?php

/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 10.06.2017
 * Time: 20:08
 */
namespace common\languages;

use Yii;


class Languages
{
    static $url_language = 'ru|en';
    static $default_language = 'ru';

    public function run(){
        $url = Yii::$app->request->url;

        $list_languages = self::$url_language;
    //    http://portfolio/frontend/web/ru/site/login

        preg_match("#^/(\w+/\w+)/($list_languages)(.*)#", $url, $match_arr);

        Yii::trace('url', $url);
       // Yii::trace('urlmatch', $match_arr[2]);

        //if language doesn't exist, get default language
        if(count($match_arr) == 0){
            $selected_lang = Yii::$app->session->get('selected_language');
            Yii::trace('selected_lang', $selected_lang );
            if($selected_lang != null) {
                Yii::trace('urlmatch', $selected_lang);
                Yii::$app->language = $selected_lang;
                Yii::$app->formatter->locale = $selected_lang;
                Yii::$app->homeUrl = '/' . $selected_lang;
                Yii::trace('homeUrl', Yii::$app->homeUrl);
            }
        } //if language exists in url
        else if ($match_arr[2] && $match_arr[2] != '/') {
            //save it to app
            Yii::$app->language = $match_arr[2];
            Yii::$app->formatter->locale = $match_arr[2];
            Yii::$app->homeUrl = '/' . $match_arr[2];
            Yii::$app->session->set('selected_language', $match_arr[2] );
        }





          //  preg_match("#^/(\w+/\w+/\w+)/(\w+)(.*)#", $url, $match_arr);
            /*preg_match("#^/(\w+/\w+/\w+)/(\w+)(.*)#", $url, $match_arr);
            Yii::trace('urlmatch', $selected_lang );
            $lang = self::$default_language;

            Yii::$app->response->redirect(['site/'.$match_arr[2], 'lang' => $lang]);*/




    }
}
