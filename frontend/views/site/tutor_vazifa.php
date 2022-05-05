 <?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;

$lang = Yii::$app->language;
  foreach ($tutor_info as $tutor_info_item) {
     if ($lang == 'uz') {
        $tutor_info_name = $tutor_info_item->name_uz;
        $tutor_info_biriktirilgan = $tutor_info_item->biriktirilgan_uz;
        $tutor_info_vazifa = $tutor_info_item->tutor_duty_uz;
      }elseif ($lang == 'en') {
        $tutor_info_name = $tutor_info_item->name_en;
        $tutor_info_biriktirilgan = $tutor_info_item->biriktirilgan_en;
        $tutor_info_vazifa = $tutor_info_item->tutor_duty_en;
      }elseif ($lang == 'ru') {
        $tutor_info_name = $tutor_info_item->name_ru;
        $tutor_info_biriktirilgan = $tutor_info_item->biriktirilgan_ru;
        $tutor_info_vazifa = $tutor_info_item->tutor_duty_ru;
      }
  }
  $this->title = "Tutorlar profile";
 ?>
 <div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    ['label' => 'Tutorlar', 'url' => ['site/tutor', 'id' => 13]],
                    $this->title = "Tutorlar profile",
                ],
            ]); 
          ?>
        </div>
      </div>
    </div>
 </div>
 <style type="text/css">
   body {
      background-color: #f4f4f5;
    }
  .breadcrumb {
    background-color: rgba(0, 0, 0, 0.5) !important;
  }
  .breadcrumb .breadcrumb-item a {
    color: white !important;
  }
  .breadcrumb .breadcrumb-item:hover a{
    color: blue !important;
  }
  .breadcrumb-item::before {
      float: left;
      padding-right: 0.5rem;
      color: white;
      content: "/";
  }
  .breadcrumb-item.active {
      color: white;
      opacity: 0.6;
  }
   .heros {
        width: 100%;
        background: url("../../images/jpa.jpg");
        position: relative;
        padding: 150px 0 0 0;
      }
       .heros:after {
        content: "";
        position: absolute;
          /*background-color: #0e14a2;*/
          height: 100vh;
          background-size: cover;
          background-position: center;
          z-index: 10;
        }
  }
  }
  }
 </style>

<section class="orqarasm">
        <div class="pro-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                       <ul>
                            <li><a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_item->id])?>" class="pro-act"><?=Yii::t('app','Shaxsiy kabinet')?></a></li>
                            <li><a href="<?=Url::to(['site/tutor_info', 'id'=>$tutor_info_item->id])?>"><?=Yii::t('app',"Umumiy ma'lumot")?></a></li>
                            <li><a href="<?=Url::to(['site/tutor_vazifa', 'id'=>$tutor_info_item->id])?>"><?=Yii::t('app',"Tyutorlar vazifasi")?></a></li>
                            <li><a href="<?=Url::to(['site/tutor_dars_jadvali', 'id'=>$tutor_info_item->id])?>"><?=Yii::t('app','Kun tartibi')?></a></li>
                            <li><a href="<?=Url::to(['site/tutor_pupils', 'id'=>$tutor_info_item->id])?>"><?=Yii::t('app','Biriktirilgan talabalari')?></a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
</section>
<div class="container ortafon">
    <div class="row">
        <div class="col-md-3 col-12 mb-4">
            <div class="left_bar_tea">
                <img src="../<?=$tutor_info ? $tutor_info_item->img : ''?>" class="img_teacher">
              <h3 class="mt-3" style="text-align: center;"><?=$tutor_info ? $tutor_info_name : ''?></h3>
              <p style="text-align: center;"><?=$tutor_info ? $tutor_info_biriktirilgan : ''?></p>
              <hr style="margin: 0px; margin-bottom: 5%;">
              <p><i class="fa fa-telegram"></i><?=$tutor_info ? $tutor_info_item->telegram : ''?></p>
              <p><i class="fa fa-phone"></i> <?=$tutor_info ? $tutor_info_item->tel : ''?></p>
              <p><i class="fa fa-envelope"></i><?=$tutor_info ? $tutor_info_item->email : ''?></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
              <h4 style="color: black;"><img src="../../images/icon/duty.ico" alt="" /><?=Yii::t('app',"Tyutorlar vazifasi")?></h4>
               <hr style="margin: 0px; margin-bottom: 5%;">
               <?=$tutor_info ? $tutor_info_vazifa : ''?>
          </div>
        </div>
    </div>
</div>

<style type="text/css">
    p, li, a, span, table, tr, td, th, label {
         /*font-size: 18px;*/
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: none;
    }
    .row .col-md-9 .middle_bar_tea ul li{
         /*font-size: 18px;*/
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
    }
      ul li a {
      /*font-size: 18px;*/
    }
    .left_bar_tea p i {
        margin-right: 20px;
        /*font-size: 20px;*/
        /*font-size: 18px;*/
        color: black;
    } 
       .left_bar_tea p {
        padding: 0px 20px;
        /*font-size: 18px;*/
        color: black;
    } 
    .img_teacher {
        position: relative;
        width: 100%;
       /* border: 2px solid #fff;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        border: 1px solid #F3F2F2;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border-width: 3px 3px 3px;
        border-style: solid solid none;
        border-color: #F3F2F2 #F3F2F2 -moz-use-text-color;
        border-image: none;
        z-index: 2; 
    }
   .left_bar_tea {
        width: 98%;
        /*background-color: #fff;*/
        background-color: #f4f4f5;
        transform-style: preserve-3d;
        /*box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
        border: 1px solid #F3F2F2;
        max-height: 100% !important;
    }
    .middle_bar_tea {
        position: relative;
        width: 98%;
        padding: 5%;
        background-color: #fff;
        transform-style: preserve-3d;
        /*box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);*/
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border: 1px solid #F3F2F2;
        margin-bottom: 5%;
        margin-top: 5%;
    }
    .orqarasm {
        position: relative;
        display: inline-block;
        background-color: #f7f8f9;
        /*z-index: 1;*/
    }
    .ortafon {
        background-color: #fff;
         box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
         border: 1px solid #F3F2F2;
        transform-style: preserve-3d;
        margin-bottom: 5%;
    }
     .pro-menu{
     background: #3f78e0;
     box-shadow: 0px 4px 10px hsla(0, 0%, 0%, 0.08);
     position: relative;
     /*z-index: 0;*/
}
 .pro-menu ul{
     margin-bottom: 0px;
    /* margin: 0 auto;
     */
     display: table;
     /*margin-left: 25px;*/
}
 .pro-menu ul li{
     display: inline-block;
}
 .pro-act{
     color: #fff !important;
}
 .pro-menu ul li a{
     padding: 10px 14px;
     line-height: 40px;
     color: #fff;
     font-weight: 500;
     text-decoration: none;
     border-left: 1px solid #405d7d;
}
 .pro-menu ul li a:hover{
     background: #225fd0;
     color: #fff;
}
</style>

 
  
  