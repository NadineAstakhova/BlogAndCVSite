<?php

/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 10.06.2017
 * Time: 20:07
 */
namespace common\components;
use Yii;
//Добавляет указатель языка в ссылки на сайте

class UrlManager extends \yii\web\UrlManager {

  public function createUrl($params) {
        if (empty($params['lang'])) {
            $params['lang'] = Yii::$app->language;;
        }
        return parent::createUrl($params);
    }
}
