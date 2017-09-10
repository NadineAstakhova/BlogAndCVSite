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
                     <h4>ОБРАЗОВАНИЕ</h4>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-xs-4 col-sm-2" >
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
                    <div class="col-lg-9 col-xs-10 text_j">
                        <span class="cv-title">Донецкий Национальнй Университет | 2013-2017</span>
                        <br>Физико-технический факультет
                        <br>Степень Бакалавра Компьютерных наук (с отличием)
                        <hr>
                        <span class="cv-title">Донецкий Национальнй Университет | 2017-2019</span>
                        <br>Физико-технический факультет
                        <br>Степень Магистра Компьютерных наук и информационных технологий
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"  id="cv-skills">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-skills">
                <h4>УМЕНИЯ И НАВЫКИ</h4>
                <span class="cv-title">PHP / YII2</span>
                <p class="text_j">
                    Разработка обширной <a href="https://github.com/NadineAstakhova/SystemOfIndividualWorks">веб-системы</a>
                    в рамках курсового проекта, которая взаимодействует с базой данных
                    и где используется шаблон проектирования <span style="text-decoration: underline;">MVC</span>.
                    В этой системы использован большой стек веб-технологий,
                    в том числе и <span style="text-decoration: underline;">JS</span>,
                    <span style="text-decoration: underline;">HTML5</span>,
                    <span style="text-decoration: underline;">CSS3</span> и
                    <span style="text-decoration: underline;">Bootstrap3</span>. На данном этапе проект находится
                    в бета-тестировании и в будущем планируется его работа в рамках кафедры.
                </p>

                <span class="cv-title">JAVASCRIPT / NODE.JS</span>
                <p class="text_j">
                    Применение технологий в разных по сложностям заданиях. В том числе небольшой опыт разработки
                    <span style="text-decoration: underline;">RESTful API</span> сервера на
                    <span style="text-decoration: underline;">Node.js</span>.
                </p>

                <span class="cv-title">MYSQL</span>
                <p class="text_j">
                    Использование MySQL в курсовых работах и в более мелких приложениях.
                </p>

                <span class="cv-title">CORE JAVA / JAVA SE / ANDROID SDK </span>
                <p class="text_j">
                    Разработка <a href="https://github.com/NadineAstakhova/SystemClient">Android-приложения</a> для курсового проекта, где приложение является клиентом для локального сервера,
                    который в свою очередь работает с сервером базы данных.
                </p>

                <span class="cv-title">C++ / QT / C# / WPF </span>
                <p class="text_j">
                    В рамках нескольких курсов в моём университете изучаются эти технологии,
                    поэтому пока что основная часть практики — это лабораторные работы с использованием
                    <span style="text-decoration: underline;">ООП</span>,
                    а в некоторых и паттерна проектирования
                    <span style="text-decoration: underline;">MVVM</span>.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row"  id="cv-oskills">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-skills">
                <h4>ДРУГИЕ НАВЫКИ</h4>
                <span class="cv-title">Языки: </span>
                <ul>
                    <li>Русский язык (Родной)</li>
                    <li>Украинский язык (Родной)</li>
                    <li>Английский язык (В1)
                        <?php
                            echo Html::a(Yii::t('app', 'Сертификаты'), ['download', 'name' => 'certificates_British_Council.pdf']);
                        ?>
                    </li>
                </ul>
                Также могу немного говорить на:
                <ul>
                    <li>Французский язык (А2)</li>
                    <li>Чешский язык (А1)</li>
                    <li>Польский язык (А1)</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row" id="cv-exp">
    <div class="info-cv">
        <div class="col-lg-8" >
            <div class="cv-skills">
                <h4>ОПЫТ РАБОТЫ</h4>
                <span class="cv-title">Инженер-Разработчик</span> | Лето-осень 2017 | Донецкий Национальный Университет (Винница)
                <p class="text_j">Руководителей кафедры заинтересовала мой курсовой проект, и они предложили доработать его для них. Мои
                обязанности включают: разработка архитектуры, код, тестирование и немного дизайн. Я использовала PHP 5, Yii2,
                    JavaScript, MySQL and GIT.</p>
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
