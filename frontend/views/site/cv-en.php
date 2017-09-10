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
                    <div class="col-lg-2 col-xs-4 col-sm-2" >
                        <?php
                        $url = Yii::$app->request->url;
                        $list_languages = \common\languages\Languages::$url_language;
                        echo " <img src=\"https://nadineastalhova.000webhostapp.com/images/donetsk_nu_herb.gif\" alt=\"donnu\" class=\"nk-img-stretch\" >";
                        ?>
                    </div>
                    <div class="col-lg-9 col-xs-10 text_j">
                        <span class="cv-title">Donetsk National University | 2013-2017</span>
                        <br>Faculty of Physics & Technology
                        <br>Bachelor’s degree in Computer science (with honors)
                        <hr>
                        <span class="cv-title">Donetsk National University | 2017-2019</span>
                        <br>Faculty of Physics & Technology
                        <br>Master’s degree in Computer science and Information technology
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
                <p class="text_j">
                    Development extensive  <a href="https://github.com/NadineAstakhova/SystemOfIndividualWorks">web-system</a>,
                    that interacts with the database and where the <span style="text-decoration: underline;">MVC</span>
                    design pattern was used. Large stack of web technologies used in this system, including
                    <span style="text-decoration: underline;">JS</span>,
                    <span style="text-decoration: underline;">HTML5</span>,
                    <span style="text-decoration: underline;">CSS3</span> и
                    <span style="text-decoration: underline;">Bootstrap3</span>.
                    At this stage the project is in beta testing and in the future it is planned to work within the department
                </p>

                <span class="cv-title">JAVASCRIPT / NODE.JS</span>
                <p class="text_j">
                    Application of technologies in different tasks. Also I have a little experience in developing
                    <span style="text-decoration: underline;">RESTful API</span> server on
                    <span style="text-decoration: underline;">Node.js</span>.
                </p>

                <span class="cv-title">MYSQL</span>
                <p class="text_j">
                    Using MySQL in coursework and in smaller applications.
                </p>

                <span class="cv-title">CORE JAVA / JAVA SE / ANDROID SDK </span>
                <p class="text_j">
                    Development  <a href="https://github.com/NadineAstakhova/SystemClient">Android-application</a>
                    for a course project. The App is client for local server. This server works with the database server.
                </p>

                <span class="cv-title">C++ / QT / C# / WPF </span>
                <p class="text_j">
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
                        <a href="https://nadineastalhova.000webhostapp.com/cv/certificates_British_Council.pdf">
                            <?=Yii::t('app', 'Certificates')?></a>
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
                <span class="cv-title">Engineer-Developer</span> | Summer 2017 | Donetsk National University (Vinnytsia)
                <p class="text_j"> Heads of dean's office interested in my web-system. So, they offered me to finalize it. My responsibilities are such development
                   cycles: architecture, code, testing. Used PHP 5, Yii2, JavaScript, MySQL and GIT.</p>

            </div>
            <div  class="cv-but">
                <a href="https://nadineastalhova.000webhostapp.com/cv/CV_Nadine_Astakhova_Ru.pdf" class="download-cv">Скачать Русское CV</a>
                <a href="https://nadineastalhova.000webhostapp.com/cv/CV_Nadine_Astakhova.pdf" class="download-cv">Download English CV</a>
            </div>
        </div>
    </div>

</div>
