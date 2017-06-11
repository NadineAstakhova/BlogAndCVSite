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
        //if language exists in url
        if ($match_arr[2] && $match_arr[2] != '/') {
            //save it to app
            Yii::$app->language = $match_arr[2];
            Yii::$app->formatter->locale = $match_arr[2];
            Yii::$app->homeUrl = '/' . $match_arr[2];
        }
        //if language doesn't exist, get default language
        else {
            preg_match("#^/(\w+/\w+/\w+)/(\w+)(.*)#", $url, $match_arr);
            Yii::trace('urlmatch', $match_arr[2]);
            $lang = self::$default_language;
           Yii::$app->response->redirect(['site/'.$match_arr[2], 'lang' => $lang]);
        }


    }
}
