<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 21.06.2017
 * Time: 14:22
 */
$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-2" >
        <div class="categories-post">
            <span class="categories-title">Categories:</span>
            <ul class="category-list">
                <li><a href="#">JAVA</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </div>

    </div>
    <div class="col-lg-8" >
        <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">



            <!-- START: Post -->
            <div class="nk-isotope-item" data-filter="Nature">
                <div class="nk-blog-post">
                    <?php
                    foreach ($posts as $post){
                        header('Content-Type: text/html; charset=UTF-8');
                        echo "<h2 class=\"nk-post-title h4\">". $post['title'] . "</h2>";
                        echo "<div class=\"nk-post-date\">";
                       // echo date('M d Y', strtotime($post['create_date']));
                        echo $post['create_date'];
                        echo " <a href='#'>".$post['category']."</a>";
                        echo "</div>";
                        echo "<div class=\"nk-post-text\">";
                        $string = iconv('CP1251', 'UTF-8', file_get_contents($post['text']));
                        echo "<p>".strstr($string, '</p>', true)."</p>";
                        echo " <div class=\"nk-post-category\"><a href=\"#\">".Yii::t('app','Читать далее')."</a></div>";
                        echo "</div>";

                    }
                    ?>








                </div>
            </div>

        </div>
        <!-- END: Post -->
    </div>


</div>