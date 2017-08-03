<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 26.07.2017
 * Time: 19:32
 */

namespace frontend\models;


use Yii;
use yii\db\Query;

class ListPost extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%post_text}}';
    }

    public function getPosts(){
        return $this->find()->all();
    }

    public  function getPostsLang(){
        $language = Yii::$app->language;
        $query =  new Query;
        $query -> select(['post_text.title', 'post_text.text', 'post_text.idPText',  'post_text.tags',
            'lang.name', 'post.create_date','post.update_date', 'categories.title AS category'])
            ->from('post_text')
            ->join('LEFT OUTER JOIN', 'lang', 'post_text.fkLang = lang.idLang')
            ->join('LEFT OUTER JOIN', 'post', 'post_text.fkPost = post.idPost')
            ->join('LEFT OUTER JOIN', 'categories', 'post.fkCategory = categories.idCategory')
            ->where(['lang.name'=>$language])
            ->andWhere(['post.blOrPort'=> '2']);

        $command = $query->createCommand();
        $posts = $command->QueryAll();
        \Yii::trace( $posts , "posts");
        return $posts;
    }

    public function getDataPosts(){
        $language = Yii::$app->language;
        $data_lang = $this->where(['fkLang'=>$language])->one();
        return $data_lang;
    }

    public  function getPostsByFilter($filter){
        $language = Yii::$app->language;
        $query =  new Query;
        $query -> select(['post_text.title', 'post_text.text', 'post_text.idPText',  'post_text.tags',
            'lang.name', 'post.create_date','post.update_date', 'categories.title AS category'])
            ->from('post_text')
            ->join('LEFT OUTER JOIN', 'lang', 'post_text.fkLang = lang.idLang')
            ->join('LEFT OUTER JOIN', 'post', 'post_text.fkPost = post.idPost')
            ->join('LEFT OUTER JOIN', 'categories', 'post.fkCategory = categories.idCategory')
            ->where(['lang.name'=>$language])
            ->andWhere(['post.blOrPort'=> '2'])
            ->andWhere(['categories.title'=>$filter]);

        $command = $query->createCommand();
        $posts = $command->QueryAll();
        return $posts;
    }




}