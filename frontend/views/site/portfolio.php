<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 21.06.2017
 * Time: 14:22
 */


use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = 'Portfolio';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <?php Pjax::begin(); ?>
    <div class="col-lg-2" >
        <div class="categories-post">
            <span class="categories-title">Categories:</span>
            <ul class="category-list">
                <li>
                    <?= Html::a(
                        'JAVA',
                        ['portfolio?filter=java']
                    ) ?>

                    <?php
                        if ($filter == 'java')
                            echo Html::a(
                                "<i class=\"fa fa-times\" aria-hidden=\"true\"></i>",
                                ['portfolio']
                            ) ?>
                </li>
                <li>
                    <?= Html::a(
                        'PHP',
                        ['portfolio?filter=php']
                    ) ?>
                    <?php
                        if ($filter == 'php')
                            echo Html::a(
                                "<i class=\"fa fa-times\" aria-hidden=\"true\"></i>",
                                ['portfolio']
                            ) ?>
                </li>
                <li>
                    <?= Html::a(
                        'Other',
                        ['portfolio?filter=other']
                    ) ?>
                    <?php
                        if ($filter == 'other')
                            echo Html::a(
                                "<i class=\"fa fa-times\" aria-hidden=\"true\"></i>",
                                ['portfolio']
                            ) ?>
                </li>
            </ul>

        </div>

    </div>
    <div class="col-lg-8" >
        <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">

            <!-- START: Post -->


                    <?php
                        if (count($posts) == 0)
                            echo " <div class=\"nk-isotope-item\"><div class=\"nk-blog-post\">".
                                    Yii::t('app', 'Нет данных'). "</div></div>";
                        else {
                            foreach ($posts as $post) {
                                echo " <div class=\"nk-isotope-item\"><div class=\"nk-blog-post\">";
                                header('Content-Type: text/html; charset=UTF-8');
                                echo "<h2 class=\"nk-post-title h4\">" . $post['title'] . "</h2>";
                                echo "<div class=\"nk-post-date\">";
                                // echo date('M d Y', strtotime($post['create_date']));
                                echo $post['create_date'];
                                echo " <a href='#'>" . $post['category'] . "</a>";
                                echo "</div>";
                                echo "<div class=\"nk-post-text\">";
                                $string = iconv('CP1251', 'UTF-8', file_get_contents($post['text']));
                                echo "<p>" . strstr($string, '</p>', true) . "</p>";
                                echo " <div class=\"nk-post-category\">";
                                echo Html::a(Yii::t('app', Yii::t('app', 'Читать далее')),
                                    ['post/article', 'idArticle' => $post['idPText']]);
                                echo " </div></div></div></div>";

                            }
                        }
                    ?>











        </div>
        <!-- END: Post -->
    </div>
    <?php Pjax::end(); ?>

</div>