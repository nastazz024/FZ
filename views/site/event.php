<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->registerCssFile('@web/css/event.css');
$this->title = 'Event';
?>
<main class="main columns">
    <section class="column main-column">
        <a class="article first-article" href="#">
            <figure class="article-image is-4by3">
                <img src="https://i2.wp.com/fbbc.by/wp-content/uploads/2018/03/плакат_для-_бреста_3.jpg?resize=520%2C368&ssl=1" alt="">
            </figure>
            <div class="article-body">
                <h2 class="article-title">
                    ТУРНИР ПО БАДМИНТОНУ ПАМЯТИ КОНАХА В. А.
                </h2>
                <p class="article-content">
                    Турнир памяти Виктора Алексеевича Конаха пройдет в Бресте в третий раз и в этом году вновь на большой арене спорткомплекса «Виктория». Ждем в гости игроков со всей Беларуси, а также Польши, Литвы, Украины, России и Израиля. Отличный зал, широкая география, новые соперники и денежные призы для профессионалов — мы создадим максимум условий для хорошего турнира.
                    <br>Место проведения: Брест, спорткомплекс "Виктория"<br><br>

                    Время проведения: 16.06 10:00-21:00, 17.06 10:00-19:00<br><br>

                    Регистрация до: 12.06.2018<br><br>

                    Организатор: FBBC.BY, Управление спорта и туризма Брестского облисполкома, Брестская областная федерация бадминтона
                </p>
                <footer class="article-info">
                    <span>24.05.2018</span>
                </footer>
            </div>
        </a>

        <div class="columns">
            <div class="column nested-column">
                <a class="article" href="#">
                    <figure class="article-image is-16by9">
                        <img src="https://i2.wp.com/fbbc.by/wp-content/uploads/2018/03/MG_6859-1.jpg?resize=1024%2C683&ssl=1" alt="">
                    </figure>
                    <div class="article-body">
                        <h2 class="article-title">
                            РЕСПУБЛИКАНСКАЯ УНИВЕРСИАДА ПО БАДМИНТОНУ 2018
                        </h2>
                        <p class="article-content">
                            13-16 марта в Минске в зале Белорусской федерации бадминтона прошла третья республиканская универсиада. Это соревнования между университетами (в этот раз их было 16), в которых каждый студент, выступая в личных соревнованиях, приносит очки своему университету. Победители определялись во всех пяти категориях, а также в командном зачете, который и стал самым интригующим. С разницей всего в 3 очка в этом году кубок универсиады достался Белорусскому государственному университету информатики и радиотехники.

                        </p>
                        <footer class="article-info">

                            <span>30.04.2018</span>
                        </footer>
                    </div>
                </a>
            </div>

            <div class="column">
                <a class="article" href="#">
                    <figure class="article-image is-16by9">
                        <img src="https://i2.wp.com/fbbc.by/wp-content/uploads/2018/03/axWM-AVEeKg-e1519986317859.jpg?resize=520%2C520&ssl=1" alt="">
                    </figure>
                    <div class="article-body">
                        <h2 class="article-title">
                            AMBER CUP KALININGRAD INTERNATIONAL 2018
                        </h2>
                        <p class="article-content">
                            Место проведения: ФОК БФУ им. И. Канта, Калининград<br><br>

                            Организатор: Янтарный волан<br><br>

                            Контактное лицо: 89854581109
                        </p>
                        <footer class="article-info">
                            <span>12.02.2018</span>
                        </footer>
                    </div>
                </a>
               <!-- <a class="article" href="#">
                    <div class="article-body">
                        <h2 class="article-title">
                            Hello World
                        </h2>
                        <p class="article-content">
                            Lorem ipsum dolor sit amet.
                        </p>
                        <footer class="article-info">
                            <span>By Joe Smith</span>
                            <span>42 comments</span>
                        </footer>
                    </div>
                </a>-->
                <!--<a class="article" href="#">
                    <div class="article-body">
                        <h2 class="article-title">
                            Hello World
                        </h2>
                        <p class="article-content">
                            Lorem ipsum dolor sit amet feugiat facilisis.
                        </p>
                        <footer class="article-info">
                            <span>23.03.2017</span>
                        </footer>
                    </div>
                </a>-->
            </div>
        </div>
    </section>

    <section class="column">
        <a class="article" href="#">
            <figure class="article-image is-3by2">
                <img src="https://i0.wp.com/fbbc.by/wp-content/uploads/2017/12/-e1515495340910.jpg?w=2120&ssl=1" alt="">
            </figure>
            <div class="article-body">
                <h2 class="article-title">
                    КУБОК БЕЛАРУСИ
                </h2>
                <p class="article-content">
                    Место проведения: г.Минск<br><br>



                    Кубок Республики Беларусь — командные соревнования среди представителей разных областей и города Минска.<br><br>

                    Контактное лицо: +375 29 196 4982
                </p>
                <footer class="article-info">

                    <span>15.02.2018</span>
                </footer>
            </div>
        </a>
        <!--<a class="article" href="#">
            <div class="article-body">
                <h2 class="article-title">
                    Hello World
                </h2>
                <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                </footer>
            </div>
        </a>
        <a class="article" href="#">
            <div class="article-body">
                <h2 class="article-title">
                    Hello World
                </h2>
                <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                </footer>
            </div>
        </a>
        <a class="article" href="#">
            <div class="article-body">
                <h2 class="article-title">
                    Hello World
                </h2>
                <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <footer class="article-info">
                    <span>By Joe Smith</span>
                    <span>42 comments</span>
                </footer>
            </div>
        </a>-->
    </section>
</main>
