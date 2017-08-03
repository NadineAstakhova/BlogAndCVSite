<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 17.06.2017
 * Time: 15:26
 */


use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Portfolio', 'url' => ['site/portfolio']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-lg-2" >
        <div class="categories-post">
            <span class="categories-title">Categories:</span>
            <ul class="category-list">
                <li>
                    <?= Html::a(
                        'JAVA',
                        ['site/portfolio?filter=java']
                    ) ?>

                </li>
                <li>
                    <?= Html::a(
                        'PHP',
                        ['site/portfolio?filter=php']
                    ) ?>
                </li>
                <li>
                    <?= Html::a(
                        'Other',
                        ['site/portfolio?filter=other']
                    ) ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-8">

        <!-- START: Post -->
        <div class="nk-blog-post nk-blog-post-single">

            <h1 class="display-4"><?php  echo $model->title; ?></h1>

            <div class="nk-post-meta">
                <div class="nk-post-date"><?php echo $model->date;?></div>
                <div class="nk-post-category"><?php echo $model->category;?></div>
                <div class="nk-post-comments-count"><?php echo $model->author;?></div>
            </div>


            <!-- START: Post Text -->
            <div class="nk-post-text">
                <?php
                    $article = iconv('CP1251', 'UTF-8', file_get_contents($model->text));
                    echo $article;
                ?>
            </div>

        </div>
        <!-- END: Post -->

    </div>
</div>
