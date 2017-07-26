<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 26.07.2017
 * Time: 19:25
 */

namespace frontend\controllers;


use frontend\models\ListPost;

class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $post = new ListPost();

        return $this->render('blog', [
            'posts' => $post->getPostsLang(),
        ]);

    }


}