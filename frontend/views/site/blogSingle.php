<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 17.06.2017
 * Time: 15:26
 */




?>

<div class="row">
    <div class="col-lg-8 offset-lg-2">

        <!-- START: Post -->
        <div class="nk-blog-post nk-blog-post-single">

            <h1 class="display-4">Title</h1>



            <div class="nk-post-meta">
                <div class="nk-post-date">August 14, 2016</div>
                <div class="nk-post-category"><a href="#">Tag</a></div>
                <div class="nk-post-comments-count">? Comments</div>
            </div>
            <div class="nk-gap-1"></div>

            <div class="nk-header-title nk-header-title-lg">
                <div class="bg-image">
                    <div style="background-image: url('../images/post-8-mid.jpg');"></div>

                </div>
                <div class="nk-header-table">
                    <div class="nk-header-table-cell">
                        <div class="container">
                        </div>
                    </div>
                </div>
            </div>


            <!-- START: Post Text -->
            <div class="nk-post-text">
                <?php
                echo file_get_contents(Yii::$app->basePath.'\views\site\\file.txt');
                ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus orci a purus lacinia consectetur. Vestibulum rutrum ex in odio placerat dictum. Morbi sit amet tortor mollis, tincidunt magna a, iaculis nisl. Cras varius odio a arcu rutrum, nec posuere lacus imperdiet. Proin iaculis, nibh eleifend elementum pulvinar, erat nisl consequat quam, ac ornare est sem nec libero. Fusce ac sagittis quam. Phasellus mattis, nunc a venenatis laoreet, est ipsum consectetur turpis, in ullam corper urna tortor eu purus.</p>
                <p>Quisque cursus risus id ante fermentum, in auctor quam consectetur. Vestibulum est nisi, tempus ac vehicula sit amet, blandit et sapien. Ut congue dui enim, at viverra nisl tempor a. Donec in enim nec massa lacinia porta. Nullam lobortis, enim aliquam congue bibendum, libero turpis tincidunt enim, vel dapibus justo lectus et risus. Proin eget mi a tortor laoreet dictum.</p>


                <p>Pellentesque viverra nisl a erat volutpat commodo. Etiam sem justo, pellentesque egestas finibus at, rutrum efficitur ex. Donec facilisis magna in mauris fermentum, sit amet porttitor lorem dictum. Donec in purus elementum, sagittis magna sit amet, auctor enim. Duis purus ex, interdum ac lacus in, ullamcorper vestibulum urna. Duis ornare nec purus ut laoreet.</p>

            </div>


        </div>
        <!-- END: Post -->



    </div>
</div>
