<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 26.07.2017
 * Time: 19:25
 */

namespace frontend\controllers;


use frontend\models\ListPost;
use frontend\models\Post;
use yii\web\NotFoundHttpException;

class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $post = new ListPost();

        return $this->render('blog', [
            'posts' => $post->getPostsLang(),
        ]);

    }

    public function actionArticle($idArticle){
        $model = new Post($idArticle);
        return $this->render('article', [
             'model' => $model,
        ]);
    }




}