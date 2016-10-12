<?php
use yii\easyii\modules\text\api\Text;
//use yii\widgets\ActiveForm;
//use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->title = 'Контакты';
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
                <a href="#">Контакты</a>
            </li>
        </ul>
    </div>
</header>
<div class="content">
    <div class="contacts-main-container">
        <div class="contacts-map-information-line">
            <div class="contacts-map-information">
                <div class="map-information">
                    <h1><?=Text::get('distance-to-office')?></h1>
                    <p><?=Text::get('distance-from')?></p>
                </div>
                <div class="map-information-lines">
                    <div class="map-information-line">
                        <div class="map-information-line-img">
                            <img src="/img/map-information-line-img-1.png">
                        </div>
                        <span><?=Text::get('time-on-foot')?></span>
                    </div>
                    <div class="map-information-line">
                        <div class="map-information-line-img">
                            <img src="/img/map-information-line-img-2.png">
                        </div>
                        <span><?=Text::get('time-on-car')?></span>
                    </div>
                    <div class="map-information-line">
                        <div class="map-information-line-img">
                            <img src="/img/map-information-line-img-3.png">
                        </div>
                        <span><?=Text::get('time-on-bike')?></span>
                    </div>
                </div>
            </div>
            <div class="contacts-map-show-button">
                <img src="/img/map-show-button.png">
            </div>
        </div>
        <div id="map" class="contacts-map">
            <div class="contacts-map-masc"></div>
            <div class="contacts-map-close">
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="contacts-path-image">
            <img src="/img/test-path.png">
            <span class="path-image-first-span"><?=Text::get('name-from-to-office')?></span>
            <span class="path-image-second-span"><?=Text::get('name-build-office')?></span>
            <div class="path-image-show-photo">
                <img src="/img/path-image-show-photo.png">
            </div>
        </div>
        <div class="contacts-information">
            <div class="contacts-text-blocks">
                <div class="contacts-phones">
                    <img src="/img/contacts-phone.png">
                    <div class="contacts-information-lines">
                        <div class="contacts-information-line">
                            <p><?=Text::get('phone-city')?></p>
                            <span>(гор.)</span>
                        </div>
                        <div class="contacts-information-line">
                            <p><?=Text::get('phone-fax')?></p>
                            <span>(факс)</span>
                        </div>
                        <div class="contacts-information-line">
                            <p><?=Text::get('phone-mobile')?></p>
                            <span>(vel.)</span>
                        </div>
                    </div>
                </div>
                <div class="contacts-location">
                    <img src="/img/contacts-location.png">
                    <p><?=Text::get('address')?></p>
                </div>
            </div>
            <div class="contacts-links-blocks">
                <a href="mailto:<?=Text::get('main-email')?>" class="contacts-link"><?=Text::get('main-email')?></a>
                <a href="<?=Text::get('link-email')?>" class="contacts-facebook-icon">
                    <i aria-hidden="true" class="fa fa-facebook"></i>
                </a>
                <div class="feedback-open-button">
                    <img src="/img/feedback-button.png">
                    <img src="/img/feedback-close.png">
                </div>
            </div>
        </div>
        <div class="contacts-feedback">

            <h1>написать нам</h1>
            <?php $form = ActiveForm::begin(['options'=>['id' => 'form-contacts','action' => '/', ],
            ]); ?>
                <div class="feedback-inputs">
                    <div class="input-line">
<!--                        <input type="text">-->
                        <?= $form->field($contactForm, 'name' )->textInput( ['id'=> 'name','maxlength' => 255, 'required'=>true, 'autocomplete'=>"off"])->label(false); ?>
                        <span>Представьтесь, пожалуйста</span>
                    </div>
                    <div class="input-line">
<!--                        <input type="phone">-->
                        <?= $form->field($contactForm, 'phone' )->textInput( ['id'=> 'phone','maxlength' => 15,'autocomplete'=>"off",'required'=>true])->label(false); ?>
                        <span>Ваш контактный телефон</span>
                    </div>
                    <div class="input-line">
<!--                        <input type="text">-->
                        <?= $form->field($contactForm, 'email' )->textInput( ['id'=> 'email','maxlength' => 255, 'type'=>'email','autocomplete'=>"off",'required'=>true])->label(false); ?>
                        <span>Ваш email</span>
                    </div>
                    <div class="input-line">
<!--                        <textarea></textarea>-->
                        <?= $form->field($contactForm, 'message' )->textarea( ['id'=> 'message','required'=>true ])->label(false); ?>
                        <span>По какому вопросу</span>
                    </div>
                    <div class="answer_from_server">
                    </div>
                </div>

                <div class="button">
                    <p><?= Html::submitButton('отправить', ['id'=> 'submit_button']); ?></p>

                    <div class="button-arrow">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            <?php $form = ActiveForm::end(); ?>
        </div>
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
