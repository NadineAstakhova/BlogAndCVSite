<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 26.07.2017
 * Time: 19:21
 */

namespace frontend\models;


use Yii;
use yii\db\Query;

class Post extends \yii\db\ActiveRecord
{

    private $idPost;
    private $_article;

    public $text;
    public $date;
    public $author;
    public $title;
    public $category;

    public function __construct($article, $config = [])
    {
        $this->idPost = $article;
        $this->_article = self::findIdentity($article);
        parent::__construct($config);
    }

    public static function tableName()
    {
        return '{{%post_text}}';
    }

   public function init()
    {
        $this->idPost = $this->_article['idPText'];
        $this->title = $this->_article['title'];
        $this->author =  $this->_article['author'];
        $this->text = $this->_article['text'];
        $this->date = $this->_article['create_date'];
        $this->category = $this->_article['category'];
        parent::init();
    }



    public static function findIdentity($id)
    {
        $language = Yii::$app->language;
        $query =  new Query;
        $query -> select(['post_text.title', 'post_text.text', 'post_text.idPText',  'post_text.tags',
            'lang.name', 'post.create_date','post.update_date', 'categories.title AS category', 'users.name AS author'])
            ->from('post_text')
            ->join('LEFT OUTER JOIN', 'lang', 'post_text.fkLang = lang.idLang')
            ->join('LEFT OUTER JOIN', 'post', 'post_text.fkPost = post.idPost')
            ->join('LEFT OUTER JOIN', 'categories', 'post.fkCategory = categories.idCategory')
            ->join('LEFT OUTER JOIN', 'users', 'post.author = users.idUser')
            ->where(['post_text.idPText'=>$id])
            ->andWhere(['lang.name'=>$language]);

        $command = $query->createCommand();
        $post = $command->QueryOne();
        return $post;
    }


}