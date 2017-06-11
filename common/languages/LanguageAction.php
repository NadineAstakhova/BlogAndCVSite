<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 10.06.2017
 * Time: 20:14
 */


namespace common\languages;

use Yii;
use common\languages\Languages;

class LanguageAction extends \yii\base\Action
{
 public function run(){
        $language = Yii::$app->request->get('lang');

        //prev page
       $url_referrer = Yii::$app->request->referrer;
     //  $url_referrer = 'http://portfolio/frontend/web/index.php?r=site%2Flogin';

        /*
         *  URL to  $match_arr
         * 0. http://portfolio/frontend/web/en/site/login
         * 1http://portfolio/frontend/web
         * 2. ru | en
         * 3. other
         */

      $list_languages = Languages::$url_language; //list of languages

        preg_match("#^(http:\/\/\w+\.\w+)/($list_languages)(.*)#",$url_referrer, $match_arr);

        // Replacement of the language identifier
        $match_arr[2] = '/'.$language;
        // create new URL
        $url = $match_arr[1].$match_arr[2].$match_arr[3];

        Yii::trace('url',$match_arr[3] );

        Yii::$app->response->redirect($url);
    }
}
