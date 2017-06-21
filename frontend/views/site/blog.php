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

                    <h2 class="nk-post-title h4"><a href="blog-single.html">Something I need to tell you</a></h2>

                    <div class="nk-post-date">
                        September 18, 2016 <a href="#">Java</a>
                    </div>
                    <div class="nk-post-thumb">
                        <a href="blog-single.html">
                            <img src="../../images/partner-logo-6-dark.png" alt="" class="nk-img-stretch">
                        </a>

                    </div>

                    <div class="nk-post-text">
                        <p>Gathering stars deep he For above open morning fruit blessed, void. Sea seed fruit were don't, days man second. In day isn't own Whales also evening it together.</p>
                        <div class="nk-post-category"><a href="#"><?php echo Yii::t('app','Читать далее');?></a></div>

                    </div>
                </div>
            </div>
            <div class="nk-isotope-item" data-filter="Nature">
                <div class="nk-blog-post">

                    <h2 class="nk-post-title h4"><a href="blog-single.html">Something I need to tell you</a></h2>

                    <div class="nk-post-date">
                        September 18, 2016 Other
                    </div>
                    <div class="nk-post-thumb">
                        <a href="blog-single.html">
                            <img src="../../images/partner-logo-6-dark.png" alt="" class="nk-img-stretch">
                        </a>

                    </div>

                    <div class="nk-post-text">
                        <p>Gathering stars deep he For above open morning fruit blessed, void. Sea seed fruit were don't, days man second. In day isn't own Whales also evening it together.</p>
                        <div class="nk-post-category"><a href="#"><?php echo Yii::t('app','Читать далее');?></a></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post -->
    </div>


</div>