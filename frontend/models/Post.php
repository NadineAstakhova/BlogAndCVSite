<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 26.07.2017
 * Time: 19:21
 */

namespace frontend\models;


class Post extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%post}}';
    }

    public static function findIdentity($id)
    {
        return static::findOne(['idPost' => $id]);
    }



}