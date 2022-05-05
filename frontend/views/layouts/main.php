<?php

/* @var $this \yii\web\View */
/* @var $content string */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use backend\models\Menu;
use backend\models\MenuSub;
use backend\models\MenuTitle;
use backend\models\Emblems;


$emblems = Emblems::find()->all();
// use yii\helpers\Html;

$menu = Menu::find()->all();
$menufooter = Menu::find()->all();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="google-site-verification" content="hDHi_XKyPV5AUmp0CSDZaF2heumBmu2C5FzhF2i88ZA" />
    <meta name="yandex-verification" content="c510b3bd86d9f50c" />
    <meta name="yandex-verification" content="fcc425185c5b3821" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../images/uzfi.ico" type="image/x-icon">
     <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <!--  <link rel="stylesheet" href="../newasset/css/plugins.css">
    <link rel="stylesheet" href="owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../newasset/css/style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- ALL CSS FILES -->
    <!-- <link href="css/materialize.css" rel="stylesheet"> -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet" /> -->
    <!-- <link href="css/style.css" rel="stylesheet" /> -->
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <!-- <link href="css/style-mob.css" rel="stylesheet" /> -->

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88488697, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88488697" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  
<?php $this->beginBody() ?>
  <style type="text/css">
    .emblem a {
      cursor: pointer;
      border-right: 1px solid grey;
      padding-right: 5px;
      margin-right: 5px;
    } .emblem a span {
      font-size: 12px;
      cursor: pointer;
    }
    .py-2 {
      padding: 0px;
    }
    .bg-primary {

    }
    .search-box {
      margin-top:-10px;
    }
    .input-search {
      margin-top: -10px;
    }


  </style>
 
   
    <!-- /header -->
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body">
          <!-- <img src="../../menu/images/uzfiopacity.png" height="200px; opacity"> -->
        </div>
      </div> <!-- .site-mobile-menu -->
      
      <div class="site-navbar-wrap js-sticky-header">
        <div class="site-navbar-top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-7">
                 <?
                foreach ($emblems as $emblems) {
                  if ($emblems->link_type == 1) {
                    ?>
                      <a style="margin-right: 10px;" href="<?=Url::to(["site/".$emblems->link, 'id'=>$emblems->id])?>">
                        <img src="../<?=$emblems->img?>" height="<?=$emblems->height?>px;" width="<?=$emblems->width?>px;">
                      </a>
                    <?
                  }else{
                    ?>
                      <a style="margin-right: 10px;" target="_blank" href="<?=$emblems->link?>">
                        <img src="../<?=$emblems->img?>" height="<?=$emblems->height?>px;" width="<?=$emblems->width?>px;">
                      </a>
                    <?
                  }
                }
                  ?>
                  <a target="_blank" style="margin-right: 10px;" class="emb" href="https://biz.mail.ru/login/uzfi.uz">
                    <i class="fa fa-envelope"></i>
                  </a>
              </div>
              <style type="text/css">
                .emb .fa-envelope{
                  font-size: 21px;
                }
              </style>
              <div class="col-5 text-right">
                <div class="mr-auto" style="float: right;">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto">

                    <a href="#" class="site-menu-toggle js-menu-toggle text-white text-right"><span class="icon-menu h3"></span></a>
                  </div>

                </div>
                
                 <span class="d-none d-none d-lg-block">
                   <?= MultiLanguageWidget::widget([
                    'addCurrentLang' => true, // add current lang
                    'calling_controller' => $this->context,
                    'image_type'  => 'rounded', // classic or rounded
                    'link_home'   => false, // true or false
                    'widget_type' => 'classic', // classic or selector
                    'width'       => '28'
                  ]); ?>
                 </span>
                
              </div>
            </div>
          </div>
        </div>
        <style type="text/css">
          .form-inline {
            float: right;
          }
        </style>
        <div class="site-navbar site-navbar-target d-none d-md-inline-block">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-1 d-none d-lg-block">
                <a href="<?=Url::home()?>"><img src="../../menu/images/uzfi.ico" height="65px;"></a>
              </div>
              <div class="col-2 d-none d-lg-block" style="padding: 0px; margin: 0px; line-height: 15px !important;">
                <span class="my-0 site-logo"><?=Yii::t('app',"SAMARQAND DAVLAT UNIVERSITETINING O'ZBEKISTON - FINLANDIYA PEDAGOGIKA INSTITUTI")?></span>
              </div>
              <div class="col-9">
                <nav class="site-navigation text-left" role="navigation">
                  <div class="container">
                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                      <li class="d-inline-block d-lg-none">
                        <?= MultiLanguageWidget::widget([
                          'addCurrentLang' => true, // add current lang
                          'calling_controller' => $this->context,
                          'image_type'  => 'rounded', // classic or rounded
                          'link_home'   => false, // true or false
                          'widget_type' => 'classic', // classic or selector
                          'width'       => '28'
                        ]); ?>
                      </li>
                      <li class="active"><a href="<?=Url::home()?>" class="nav-link"><?=Yii::t('app',"Bosh sahifa")?></a></li>
                      <?
                      $lang = Yii::$app->language;
                        foreach ($menu as $menu) {
                            if ($lang == 'uz') {
                              $menu_name = $menu->name_uz;
                            }elseif ($lang == 'en') {
                              $menu_name = $menu->name_en;
                            }elseif ($lang == 'ru') {
                              $menu_name = $menu->name_ru;
                            }
                          ?>
                            <li class="has-children">
                              <a href="#" class="nav-link"><?=$menu_name?></a>
                                <ul class="dropdown arrow-top">
                                  <?
                                  $lang = Yii::$app->language;
                                  $menutitle = MenuTitle::find()->Where(['menu_id'=>$menu->id])->all();
                                    foreach ($menutitle as $menutitle) {
                                      if ($lang == 'uz') {
                                        $menu_title = $menutitle->name_uz;
                                      }elseif ($lang == 'en') {
                                        $menu_title = $menutitle->name_en;
                                      }elseif ($lang == 'ru') {
                                        $menu_title = $menutitle->name_ru;
                                      }
                                      ?>
                                      <li class="has-children">
                                        <a href="#"><?=$menu_title?></a>
                                        <ul class="dropdown">
                                          <?
                                          $lang = Yii::$app->language;
                                          $menusub = MenuSub::find()->Where(['menu_title_id'=>$menutitle->id])->all();
                                            foreach ($menusub as $menusub) {
                                              if ($lang == 'uz') {
                                                $menu_sub = $menusub->name_uz;
                                              }elseif ($lang == 'en') {
                                                $menu_sub = $menusub->name_en;
                                              }elseif ($lang == 'ru') {
                                                $menu_sub = $menusub->name_ru;
                                              }
                                              ?>
                                              <?
                                                  if ($menusub->link_type == 1) {
                                                    ?>
                                                      <li style="display: block;min-width:250px !important;"><a href="<?=Url::to(["site/".$menusub->link, 'id'=>$menusub->id])?>"><?=$menu_sub?></a></li>
                                                    <?
                                                  }else {
                                                    ?>
                                                      <li><a href="<?=$menusub->link?>"><?=$menu_sub?></a></li>
                                                    <?
                                                  }
                                                ?>
                                              <?
                                            }
                                          ?>
                                        </ul>
                                      </li>
                                      <?
                                    }
                                  ?>
                                </ul>
                            </li>
                          <?
                        }
                      ?>
                      <li class="active"><a href="<?=Url::to(['site/aloqa'])?>" class="nav-link"><?=Yii::t('app',"Aloqa")?></a></li>

                    </ul>
                  </div>
                </nav>
              </div>
              
            </div>
          </div>
        </div>
      </div>
<!--  -->
    
    <!-- /section -->
  <!-- ##### Hero Area Start ##### -->


    <!-- ##### Hero Area End ##### -->
    <!--END HEADER SECTION-->
<?=$content?>
 <!-- FOOTER -->


 <div class="container">
    
</div>

<style type="text/css">
  .card-header {
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 0px solid rgba(0, 0, 0, 0.125);
    color: white;
    padding: 0.3rem 1.25rem;
  }
  .wed-hom-footer .container .wed-foot-link .col-md-3 .accordion .card {
    border: 0px;
    background-color: #002147;
    border-right: 1px groove #6a83a0;
  }
  .card-body{
    padding: 0px;
    color: white;
  }
  .wed-hom-footer .container .wed-foot-link .col-md-3 .accordion .card .card-header .card-title {
    margin: 0px !important;
    padding: 0px !important;
  }
  .wed-hom-footer .container .wed-foot-link .col-md-3 .accordion .card .card-body ul li {
    list-style-type: none;
    border-bottom: 1px groove #6a83a0;
  }
    .accordion .card-header:after {
    font-family: 'FontAwesome';  
    content: "\f068";
    float: right; 
    font-size: 12px;
    color: white;
}
.accordion .card-header.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\f067"; 
}
</style>
    <section class="wed-hom-footer">
        <div class="container">
            <div class="row wed-foot-link">
               <?
                $lang = Yii::$app->language;
                foreach ($menufooter as $menufooter_key) {
                    if ($lang == 'uz') {
                          $menufooter_key_all = $menufooter_key->name_uz;
                        }elseif ($lang == 'en') {
                          $menufooter_key_all = $menufooter_key->name_en;
                        }elseif ($lang == 'ru') {
                          $menufooter_key_all = $menufooter_key->name_ru;
                        }
                  ?>
                     <div class="col-md-3 foot-tc-mar-t-o">
                      <h4><?=$menufooter ? $menufooter_key_all : ''?></h4>
                      <div id="accordion" class="accordion">
                        <div class="card mb-0">
                        <?
                        $lang = Yii::$app->language;
                          $menutitlefooter = MenuTitle::find()->Where(['menu_id'=>$menufooter_key->id])->all();
                          foreach ($menutitlefooter as $menutitlefooter_key) {
                            if ($lang == 'uz') {
                                $menutitlefooter_all = $menutitlefooter_key->name_uz;
                              }elseif ($lang == 'en') {
                                $menutitlefooter_all = $menutitlefooter_key->name_en;
                              }elseif ($lang == 'ru') {
                                $menutitlefooter_all = $menutitlefooter_key->name_ru;
                              }
                            ?>
                              <div class="card-header collapsed" data-toggle="collapse" href="#collapse<?=$menutitlefooter_key->id?>">
                                <a class="card-title">
                                    <?=$menutitlefooter ? $menutitlefooter_all : ''?>
                                </a>
                              </div>
                              <div id="collapse<?=$menutitlefooter_key->id?>" class="card-body collapse" data-parent="#accordion" >
                                  <ul>
                                    <?
                                    $lang = Yii::$app->language;
                                      $menusubfooter = MenuSub::find()->Where(['menu_title_id'=>$menutitlefooter_key->id])->all();
                                      foreach ($menusubfooter as $menusubfooter_key) {
                                        if ($lang == 'uz') {
                                              $menusubfooter_all = $menusubfooter_key->name_uz;
                                            }elseif ($lang == 'en') {
                                              $menusubfooter_all = $menusubfooter_key->name_en;
                                            }elseif ($lang == 'ru') {
                                              $menusubfooter_all = $menusubfooter_key->name_ru;
                                            }
                                        if ($menusubfooter_key->link_type == 1) {
                                          ?>
                                            <li><a href="<?=Url::to(["site/".$menusubfooter_key->link, 'id'=>$menusubfooter_key->id])?>"><?=$menusubfooter ? $menusubfooter_all : ''?></a></li>
                                          <?
                                        }else{
                                          ?>
                                            <li><a href="<?=$menusubfooter_key->link?>"><?=$menusubfooter ? $menusubfooter_all : ''?></a></li>
                                          <?
                                        }
                                        
                                      }
                                    ?>
                                  </ul>
                              </div>
                            <?
                          }
                        ?>
                        </div>
                      </div>
                    </div>
                  <?
                }
               ?>
              
            </div>
            <div class="row wed-foot-link-1">
                <div class="col-md-3 foot-tc-mar-t-o">
                    <h4><?=Yii::t('app','Manzil')?></h4>
                    <p><?=Yii::t('app','Manzil')?>: Samarqand sh., Spitamen shoh ko‘chasi, 166-uy</p>
                    <p>Phone: <a href="#!">(66) 222-69-27</a></p>
                    <p>Email: <a href="#!">devonxona@uzfi.uz</a></p>
                </div>
                <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.0442617391855!2d66.92115311473631!3d39.67121890856542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d192d50c43d2d%3A0xb165c3020cfe3714!2sSamDU%20O&#39;zbekiston-Finlandiya%20Pedagogika%20instituti!5e0!3m2!1sen!2s!4v1635831688417!5m2!1sen!2s" width="80%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-3">
                    <h4><?=Yii::t('app', 'Bizning ijtimoiy tarmoqlar')?></h4>
                  <ul style="margin: 0px;padding: 0px;">
                    <li style="padding: 0px;">
                      <div class="block">
                          <i class="hovicon effect-8"><a href=""><span class="fa fa-facebook"></a></span></i>
                      </div>
                    </li>
                     <li style="padding: 0px;">
                      <div class="block">
                          <i class="hovicon effect-8"><a href=""><span class="fa fa-youtube"></a></span></i>
                      </div>
                    </li>
                    <li style="padding: 0px;">
                      <div class="block">
                          <i class="hovicon effect-8"><a href=""><span class="fa fa-twitter"></a></span></i>
                      </div>
                    </li>
                    <li style="padding: 0px;">
                      <div class="block">
                          <i class="hovicon effect-8"><a href=""><span class="fa fa-instagram"></a></span></i>
                      </div>
                    </li>
                  </ul><br>
                  <p>
                   <!-- START WWW.UZ TOP-RATING -->
                    <SCRIPT language="javascript" type="text/javascript">
                    <!--
                    top_js="1.0";top_r="id=46407&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
                    //-->
                    </SCRIPT>
                    <SCRIPT language="javascript1.1" type="text/javascript">
                    <!--
                    top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
                    //-->
                    </SCRIPT>
                    <SCRIPT language="javascript1.2" type="text/javascript">
                    <!--
                    top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
                    (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
                    //-->
                    </SCRIPT>
                    <SCRIPT language="javascript1.3" type="text/javascript">
                    <!--
                    top_js="1.3";
                    //-->
                    </SCRIPT>
                    <SCRIPT language="JavaScript" type="text/javascript">
                    <!--
                    top_rat="&col=0063AF&t=ffffff&p=DD7900";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/uz/res/visitor/index?id=46407" target=_top><img src="http://cnt0.www.uz/counter/collect?'+top_r+top_rat+'" width=88 height=31 border=0 alt="Топ рейтинг www.uz"></a>')//-->
                    </SCRIPT>
                    <NOSCRIPT><A href="http://www.uz/uz/res/visitor/index?id=46407" target=_top><IMG height=31 src="http://cnt0.www.uz/counter/collect?id=46407&pg=http%3A//uzinfocom.uz&&col=0063AF&amp;t=ffffff&amp;p=DD7900" width=88 border=0 alt="Топ рейтинг www.uz"></A>
                    </NOSCRIPT>
                    <!-- FINISH WWW.UZ TOP-RATING -->
                  </p>
                      
                </div>
            </div>
        </div>
    </section>

<style type="text/css">
.hovicon a span{
  position: absolute;
  top: 0px;
  margin-top: 8px;
  margin-left: -10px;
  font-size: 25px;
  color: white;
}
.hovicon:hover {
  cursor: pointer;
}

.hovicon {
    display: inline-block;
    font-size: 35px;
    line-height: 90px;
    cursor: pointer;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    position: relative;
    text-decoration: none;
    z-index: 2;
    color: #fff;
    margin-right: 5px;
}
.hovicon.small {
    font-size: 20px;
    line-height:45px;
    width:25px;
    height:25px;
    margin:7px;
}
.hovicon.mini {
    font-size: 15px;
    line-height:32px;
    width:30px;
    height:30px;
    margin:7px;
}
.hovicon.auto-width {
    width: auto;
    height: auto;
    padding: 15px;
}
.hovicon:after {
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    content:'';
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}
.hovicon:before {
    speak: none;
    font-size: 48px;
    line-height: 90px;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    display: block;
    -webkit-font-smoothing: antialiased;
}

/* Effect 8 */
 .hovicon.effect-8 {
    background: rgba(255, 255, 255, 0.1);
    -webkit-transition: -webkit-transform ease-out 0.1s, background 0.2s;
    -moz-transition: -moz-transform ease-out 0.1s, background 0.2s;
    transition: transform ease-out 0.1s, background 0.2s;
}
.hovicon.effect-8:after {
    top: 0;
    left: 0;
    padding: 0;
    z-index: -1;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1);
    opacity: 0;
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
}
.hovicon.effect-8:hover {
    background: rgba(255, 255, 255, 0.05);
    -webkit-transform: scale(0.93);
    -moz-transform: scale(0.93);
    -ms-transform: scale(0.93);
    transform: scale(0.93);
    color: #fff;
}
.hovicon.effect-8:hover i {
    color: #fff;
}
.hovicon.effect-8:hover {
    cursor: pointer;
}
.hovicon.effect-8:hover:after {
    -webkit-animation: sonarEffect 1.3s ease-out 75ms;
    -moz-animation: sonarEffect 1.3s ease-out 75ms;
    animation: sonarEffect 1.3s ease-out 75ms;
}
@-webkit-keyframes sonarEffect {
    0% {
        opacity: 0.3;
    }
    40% {
        opacity: 0.5;
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
    }
    100% {
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
        -webkit-transform: scale(1.5);
        opacity: 0;
    }
}
@-moz-keyframes sonarEffect {
    0% {
        opacity: 0.3;
    }
    40% {
        opacity: 0.5;
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
    }
    100% {
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
        -moz-transform: scale(1.5);
        opacity: 0;
    }
}
@keyframes sonarEffect {
    0% {
        opacity: 0.3;
    }
    40% {
        opacity: 0.5;
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
    }
    100% {
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
        transform: scale(1.5);
        opacity: 0;
    }
}
</style>
<div class="scrollup" href="#">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="30" height="30">
                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="145.9998" y1="256" x2="366.0002" y2="256">
                    <stop offset="0" style="stop-color:#ffffff"/>
                    <stop offset="0.0208" style="stop-color:#ffffff"/>
                    <stop offset="0.2931" style="stop-color:#ffffff"/>
                    <stop offset="0.5538" style="stop-color:#ffffff"/>
                    <stop offset="0.7956" style="stop-color:#ffffff"/>
                    <stop offset="1" style="stop-color:#ffffff"/>
                </linearGradient>
                <path style="fill:url(#SVGID_1_);" d="M346.001,114c-5.147,0-10.29-1.973-14.201-5.916l-61.653-62.162  C266.358,42.103,261.335,40,256,40s-10.358,2.103-14.146,5.922L180.2,108.084c-7.778,7.842-20.44,7.895-28.284,0.116  c-7.843-7.778-7.895-20.442-0.116-28.284l61.653-62.162C224.809,6.305,239.919,0,256,0s31.191,6.305,42.547,17.754L360.2,79.916  c7.778,7.842,7.727,20.506-0.116,28.284C356.185,112.068,351.091,114,346.001,114z M298.547,494.246l61.653-62.162  c7.778-7.842,7.727-20.506-0.116-28.284c-7.844-7.778-20.506-7.726-28.284,0.116l-61.653,62.162  C266.358,469.897,261.335,472,256,472s-10.358-2.103-14.146-5.922L180.2,403.916c-7.778-7.841-20.44-7.895-28.284-0.116  c-7.843,7.778-7.895,20.442-0.116,28.284l61.653,62.162C224.809,505.695,239.919,512,256,512S287.191,505.695,298.547,494.246z   M325,255c0-38.598-31.402-70-70-70s-70,31.402-70,70s31.402,70,70,70S325,293.598,325,255z M285,255c0,16.542-13.458,30-30,30  s-30-13.458-30-30s13.458-30,30-30S285,238.458,285,255z"/>
                </svg>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

