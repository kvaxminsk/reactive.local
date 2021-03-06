<?php
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\easyii\widgets\BrandsWidget;
use yii\grid\GridView;
$this->title = 'EasyiiCMS start page';
?>
<header class="header">
    <a href="#" class="icon-block">
        <img src="/img/reactive-logo.png">
    </a>
    <div class="header-menu">
        <ul>
            <li>
                <a href="#">Главная</a>
            </li>
            <li>
                <a href="#">Работы</a>
            </li>
            <li>
                <a href="#">Студия</a>
            </li>
            <li>
                <a href="#">Услуги</a>
            </li>
            <li>
                <a href="#">Контакты</a>
            </li>
        </ul>
    </div>
</header>
<div class="content">
    <div class="background-slider">
        <div class="background-slide">
            <div style="background-image: url(/img/main-page-image.png);" class="background-content"></div>
        </div>
        <div class="background-slide">
            <div style="background-image: url(/img/main-page-image-2.png);" class="background-content"></div>
        </div>
        <div class="background-slide">
            <div style="background-image: url(/img/main-page-image-3.png);" class="background-content"></div>
        </div>
        <div class="background-slide">
            <div style="background-image: url(/img/main-page-image-4.png);" class="background-content"></div>
        </div>
    </div>
    <div class="projects-slider">
        <div class="single-slide-block">
            <div class="slider-slide-content">
                <h1>NEW STUDIO</h1>
                <div class="information-line">
                    <div class="project-description">
                        <p>Разработка корпоративного сайта и Landing Page для салона итальянской мебели в Минске</p>
                    </div>
                    <div class="another-projects">
                        <div>
                            <span>02 апреля</span>
                            <a href="#">Landing & promo в портфолио</a>
                        </div>
                        <div>
                            <span>25 марта</span>
                            <a href="#">Обновляем портфолио</a>
                        </div>
                        <div>
                            <span>09 марта</span>
                            <a href="#">У нас новый офис</a>
                        </div>
                    </div>
                </div>
                <div class="buttons-line">
                    <a href="#" class="action-button">
                        <div class="action-line"></div>
                        <div class="bulb-circle">
                            <img src="/img/action-bulb.png">
                        </div>
                        <span>АКЦИЯ!</span>
                    </a>
                    <a class="more-button">ПОДРОБНЕЕ
                        <img src="/img/more-button-icon.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="single-slide-block">
            <div class="slider-slide-content">
                <h1>NEW STUDIO</h1>
                <div class="information-line">
                    <div class="project-description">
                        <p>Разработка корпоративного сайта и Landing Page для салона итальянской мебели в Минске</p>
                    </div>
                    <div class="another-projects">
                        <div>
                            <span>02 апреля</span>
                            <a href="#">Landing & promo в портфолио</a>
                        </div>
                        <div>
                            <span>25 марта</span>
                            <a href="#">Обновляем портфолио</a>
                        </div>
                        <div>
                            <span>09 марта</span>
                            <a href="#">У нас новый офис</a>
                        </div>
                    </div>
                </div>
                <div class="buttons-line">
                    <a href="#" class="action-button">
                        <div class="action-line"></div>
                        <div class="bulb-circle">
                            <img src="/img/action-bulb.png">
                        </div>
                        <span><?= Text::get('page-main-stock') ?></span>
                    </a>
                    <a class="more-button">ПОДРОБНЕЕ
                        <img src="/img/more-button-icon.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="single-slide-block">
            <div class="slider-slide-content">
                <h1>NEW STUDIO</h1>
                <div class="information-line">
                    <div class="project-description">
                        <p>Разработка корпоративного сайта и Landing Page для салона итальянской мебели в Минске</p>
                    </div>
                    <div class="another-projects">
                        <div>
                            <span>02 апреля</span>
                            <a href="#">Landing & promo в портфолио</a>
                        </div>
                        <div>
                            <span>25 марта</span>
                            <a href="#">Обновляем портфолио</a>
                        </div>
                        <div>
                            <span>09 марта</span>
                            <a href="#">У нас новый офис</a>
                        </div>
                    </div>
                </div>
                <div class="buttons-line">
                    <a href="#" class="action-button">
                        <div class="action-line"></div>
                        <div class="bulb-circle">
                            <img src="/img/action-bulb.png">
                        </div>
                        <span>АКЦИЯ!</span>
                    </a>
                    <a class="more-button">ПОДРОБНЕЕ
                        <img src="/img/more-button-icon.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="single-slide-block">
            <div class="slider-slide-content">
                <h1>NEW STUDIO</h1>
                <div class="information-line">
                    <div class="project-description">
                        <p>Разработка корпоративного сайта и Landing Page для салона итальянской мебели в Минске</p>
                    </div>
                    <div class="another-projects">
                        <div>
                            <span>02 апреля</span>
                            <a href="#">Landing & promo в портфолио</a>
                        </div>
                        <div>
                            <span>25 марта</span>
                            <a href="#">Обновляем портфолио</a>
                        </div>
                        <div>
                            <span>09 марта</span>
                            <a href="#">У нас новый офис</a>
                        </div>
                    </div>
                </div>
                <div class="buttons-line">
                    <a href="#" class="action-button">
                        <div class="action-line"></div>
                        <div class="bulb-circle">
                            <img src="/img/action-bulb.png">
                        </div>
                        <span>АКЦИЯ!</span>
                    </a>
                    <a class="more-button">ПОДРОБНЕЕ
                        <img src="/img/more-button-icon.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-navigation-slider">
        <div class="navigation-arrows">
            <div class="prev-arrow-container">
                <div style="background-image: url(/img/prev-arr.png);" class="prev-arrow"></div>
                <div style="background-image: url(/img/prev-arr-hover.png);" class="prev-arrow-hover"></div>
            </div>
            <div class="next-arrow-container">
                <div style="background-image: url(/img/next-arr.png);" class="next-arrow"></div>
                <div style="background-image: url(/img/next-arr-hover.png);" class="next-arrow-hover"></div>
            </div>
        </div>
        <div class="slider-body">
            <div class="project-slide">
                <div style="background-image: url(/img/project-object.png);" class="project-nav-slider-content"></div>
                <div class="project-nav-name">PIRS AUTO</div>
            </div>
            <div class="project-slide">
                <div style="background-image: url(/img/project-object-2.png);" class="project-nav-slider-content"></div>
                <div class="project-nav-name">print lux</div>
            </div>
            <div class="project-slide">
                <div style="background-image: url(/img/project-object-3.png);" class="project-nav-slider-content"></div>
                <div class="project-nav-name">pirs auto</div>
            </div>
            <div class="project-slide">
                <div style="background-image: url(/img/project-object-4.png);" class="project-nav-slider-content"></div>
                <div class="project-nav-name">print lux</div>
            </div>
        </div>
    </div>
    <div style="background-image: url(/img/background-line.png);" class="total-projects-information">
        <div class="number-block">

            <div class="animate-number">
                <?
                foreach($countProjects as $word){
                    ?>
                    <div class="single-number">
                        <div data-number="<?=$word;?>" class="number-container">
                            <h1>9</h1>
                            <h1>8</h1>
                            <h1>7</h1>
                            <h1>6</h1>
                            <h1>5</h1>
                            <h1>4</h1>
                            <h1>3</h1>
                            <h1>2</h1>
                            <h1>1</h1>
                            <h1>0</h1>
                            <h1></h1>
                        </div>
                    </div>
                <?}?>
            </div>
            <p><?
                foreach($projectsTitle as $word){
                    echo $word.' ';
                }
                ?></p>
        </div>
        <div class="number-block">
            <div class="animate-number">
                <?
                foreach($countExperienceYear as $word){
                    ?>
                    <div class="single-number">
                        <div data-number="<?=$word?>" class="number-container">
                            <h1>9</h1>
                            <h1>8</h1>
                            <h1>7</h1>
                            <h1>6</h1>
                            <h1>5</h1>
                            <h1>4</h1>
                            <h1>3</h1>
                            <h1>2</h1>
                            <h1>1</h1>
                            <h1>0</h1>
                            <h1></h1>
                        </div>
                    </div>

                <?}?>
            </div>
            <p><?
                foreach($experienceTitle as $word){
                    echo $word.' ';
                }
                ?>
            </p>
        </div>
        <div class="number-block">
            <div class="animate-number">
                <?
                foreach($countClients as $word){
                    ?>
                    <div class="single-number">
                        <div data-number="<?=$word?>" class="number-container">
                            <h1>9</h1>
                            <h1>8</h1>
                            <h1>7</h1>
                            <h1>6</h1>
                            <h1>5</h1>
                            <h1>4</h1>
                            <h1>3</h1>
                            <h1>2</h1>
                            <h1>1</h1>
                            <h1>0</h1>
                            <h1></h1>
                        </div>
                    </div>


                <?}?>

            </div>
            <p><?
                foreach($countClients as $word){
                    echo $word.' ';
                }
                ?></p>
        </div>
    </div>
    <div class="services-list">
        <div>
            <a href="#">Брендинг</a>
            <br>
            <a href="#">Создание сайтов</a>
            <br>
            <a href="#">E-commerce</a>
        </div>
        <div>
            <a href="#">Автоматизация</a>
            <br>
            <a href="#">Продвижение</a>
            <br>
            <a href="#">Мобильные решения</a>
        </div>
        <div>
            <a href="#">Поддержка</a>
            <br>
            <a href="#">1000</a>
        </div>
    </div>
    <div class="our-partners">
        <div class="prev-arrow-container">
            <div style="background-image: url(/img/prev-arr.png);" class="prev-arrow partners-prev-arrow"></div>
            <div style="background-image: url(/img/prev-arr-hover.png);" class="prev-arrow-hover partners-prev-arrow"></div>
        </div>
        <?=BrandsWidget::widget() ?>
        <div class="next-arrow-container">
            <div style="background-image: url(/img/next-arr.png);" class="next-arrow partners-next-arrow"></div>
            <div style="background-image: url(/img/next-arr-hover.png);" class="next-arrow-hover partners-next-arrow"></div>
        </div>
    </div>
    <div class="our-projects-container">
        <div class="our-projects">
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-2.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>ARUSNAVI</h1>
                                <p>Разработка сайта и Landing Page</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-3.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Разработка сайта и Landing Page</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-4.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>NEW STUDIO</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Брендинг, сайты</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-2.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>ARUSNAVI</h1>
                                <p>Разработка сайта и Landing Page</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-3.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Разработка сайта и Landing Page</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-4.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>NEW STUDIO</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Брендинг, сайты</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-2.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>ARUSNAVI</h1>
                                <p>Разработка сайта и Landing Page</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-3.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Разработка сайта и Landing Page</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-4.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>NEW STUDIO</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Брендинг, сайты</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
            <div class="single-project">
                <a href="#" class="single-project-content">
                    <div style="background-image: url(/img/project-img-1.png);" class="project-circle">
                        <div class="project-information">
                            <div class="project-information-content">
                                <h1>PRINT LUX</h1>
                                <p>Бренд-концепция и разработка сайта</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-type">
                        <p>Сайты, Lending & Promo</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div style="background-image: url(/img/background-line.png);" class="more-projects">
        <div class="more-projects-button">
            <img src="/img/points-icon.png">
            <p>ЕЩЁ РАБОТЫ</p>
        </div>
    </div>
    <div class="our-contacts">
        <div class="contacts-content">
            <div class="contacts-address">
                <h1>Наши контакты</h1>
                <p><?= Text::get('address')?></p>
            </div>
            <div class="contacts-phone-mail">
                <p>Эл. почта:
                    <a href="#" class="mail"><?= Text::get('main-email')?></a>
                </p>
                <div class="phone">
                    <p><?= Text::get('phone-city')?></p>
                    <p><?= Text::get('phone-mobile')?></p>
                </div>
            </div>
        </div>
    </div>
    <div id="map" class="footer-map">
        <div style="background-image: url(/img/map-wrap.png);" class="map-wrap"></div>
    </div>
</div>
<div class="right-menu">
    <div class="menu-icon-container">
        <div id="nav-icon3" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="menu-links">
        <div style="background-image: url(/img/main-page-icon.png);" class="menu-single-link">
            <a href="#">Главная</a>
        </div>
        <div style="background-image: url(/img/projects-icon.png);" class="menu-single-link">
            <a href="#">Работы</a>
        </div>
        <div style="background-image: url(/img/contacts-icon.png);" class="menu-single-link">
            <a href="#">Студия</a>
        </div>
        <div style="background-image: url(/img/feedback-icon.png);" class="menu-single-link">
            <a href="#">Контакты</a>
        </div>
    </div>
    <div class="menu-single-link skip-presentation-button">
        <span>>></span>
    </div>
    <div style="background-image: url(/img/go-to-up-icon.png);" class="menu-single-link up-page-button"></div>
</div>
<footer class="footer"></footer>