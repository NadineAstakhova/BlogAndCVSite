<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 30.06.2017
 * Time: 18:33
 */
use yii\bootstrap\Html;

$this->title = 'CV';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row" id="cv-education">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-education">
                <div class="row">
                    <h4>EDUCATION</h4>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-xs-4" >
                        <?php
                        $url = Yii::$app->request->url;

                        $list_languages = \common\languages\Languages::$url_language;
                        //    http://portfolio/frontend/web/ru/site/login
                        preg_match("#^/(\w+/\w+)/($list_languages)(.*)#", $url, $match_arr);

                        Yii::trace('url', $url);
                        // Yii::trace('urlmatch', $match_arr[2]);
                        //if language exists in url
                        if ($match_arr[2] && $match_arr[2] != '/') {
                            echo " <img src=\"../../images/donetsk_nu_herb.gif\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
                        }
                        else
                            echo " <img src=\"../images/donetsk_nu_herb.gif\" alt=\"фото профайла\" class=\"nk-img-stretch\" >";
                        ?>
                    </div>
                    <div class="col-lg-6" >
                        <span class="cv-title">Donetsk National University </span>
                        <br>Bachelor’s degree  2013-2017
                        <br>Faculty of Physics & Technology
                        <br>Computer science
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" id="cv-skills">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-skills">
                <h4>TECHNICAL SKILLS</h4>
                <span class="cv-title">PHP / YII2</span>
                <p>
                    Development extensive  <a href="https://github.com/NadineAstakhova/SystemOfIndividualWorks">web-system</a>,
                    that interacts with the database and where the <span style="text-decoration: underline;">MVC</span>.
                    Вdesign pattern was used. Large stack of web technologies used in this system, including
                    <span style="text-decoration: underline;">JS</span>,
                    <span style="text-decoration: underline;">HTML5</span>,
                    <span style="text-decoration: underline;">CSS3</span> и
                    <span style="text-decoration: underline;">Bootstrap3</span>.
                    At this stage the project is in beta testing and in the future it is planned to work within the department
                </p>

                <span class="cv-title">JAVASCRIPT / NODE.JS</span>
                <p>
                    Application of technologies in different tasks. Also I have a little experience in developing
                    <span style="text-decoration: underline;">RESTful API</span> server on
                    <span style="text-decoration: underline;">Node.js</span>.
                </p>

                <span class="cv-title">MYSQL</span>
                <p>
                    Using MySQL in coursework and in smaller applications.
                </p>

                <span class="cv-title">CORE JAVA / JAVA SE / ANDROID SDK </span>
                <p>
                    Development  <a href="https://github.com/NadineAstakhova/SystemClient">Android-application</a>
                    for a course project. The App is client for local server. This server works with the database server.
                </p>

                <span class="cv-title">C++ / QT / C# / WPF </span>
                <p>
                    As part of several courses at my university to study these technologies.
                    So for now the main part of the practice is labs using
                    <span style="text-decoration: underline;">OOP</span>.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row"  id="cv-oskills">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-skills">
                <h4>SPECIAL SKILLS</h4>
                <span class="cv-title">Language skills: </span>
                <ul>
                    <li>Russian (Native)</li>
                    <li>Ukrainian (Native)</li>
                    <li>English (В1)
                        <?php
                            echo Html::a(Yii::t('app', 'Certificates'), ['download', 'name' => 'certificates_British_Council.pdf']);
                        ?>
                    </li>
                </ul>
                Also I can speak a little:
                <ul>
                    <li>French (А2)</li>
                    <li>Czech (А1)</li>
                    <li>Polish (А1)</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row" id="cv-exp">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-skills">
                <h4>WORK EXPERIENCE</h4>
                <span class="cv-title">Will be </span>
            </div>
            <div  class="cv-but">
                <?php
                    echo Html::a(Yii::t('app', 'Скачать Русское CV'), ['download', 'name' => 'CV_Nadine_Astakhova_Ru.pdf'],
                        ['class' =>'download-cv']);

                    echo Html::a(Yii::t('app', 'Download CV English'), ['download', 'name' => 'CV_Nadine_Astakhova.pdf'],
                        ['class' =>'download-cv']);
                ?>
            </div>
        </div>
    </div>

</div>
