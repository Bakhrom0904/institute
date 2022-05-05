<?php

use yii\bootstrap4\Carousel;
use yii\helpers\Url;


/* @var $this yii\web\View */

$this->title = "SAMARQAND DAVLAT UNIVERSITETINING O'ZBEKISTON-FINLANDIYA PEDAGOGIKA INSTITUTI";
?>

   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/menu/images/rasmslider.jpg" class="d-block w-100 rasm" alt="...">
          </div>
       <?
        foreach ($slider as $slide) {
          ?>
             <div class="carousel-item">
                <img src="arguments/slider/<?=$slide->slider_img?>" class="d-block w-100 rasm" alt="...">
              </div>
          <?
        }
       ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <style type="text/css">
      /*section {
        background-color: grey;
        display: flex;
        min-height: 100vh;
        justify-content: center;
        align-items: center;
      }*/
      .rasm {
        position: relative;
        height: 100vh;
        width: 100vh;
        object-fit: cover;
        background-position: center;
      }
      .sect-title {
        text-align: center;
      }
      .sect-title .qwert{
        line-height: 104px !important;
        color: white;
        font-size: 3em;
        position: absolute;
        transform: translate(-50%, -50%);
      }
      .sect-title .qwert:nth-child(1){
        color: transparent;
        -webkit-text-stroke:1px #0d6efd;
      }
      .sect-title .qwert:nth-child(2){
        color: #0d6efd;
        animation: wave 2s infinite;

      }
      @keyframes wave{
        0%, 100% {
          clip-path: polygon(
            0% 45%,
            41% 44%,
            33% 50%,
            54% 60%,
            70% 61%,
            84% 59%,
            100% 52%,
            100% 100%,
            0% 100%
          );
        }
        50% {
          clip-path: polygon(
            0% 60%,
            15% 65%,
            34% 66%,
            51% 62%,
            67% 50%,
            84% 45%,
            100% 46%,
            100% 100%,
            0% 100%
          );  
        }
      }
      @media all and (max-width: 992px) {
        .sect-title .qwert {
          font-size: 1.7em;
          line-height: 25px !important;
        }
        .sticky-wrapper {
          height: 35.14px !important;
        }
        .natija1 {
          font-size: 25px;
        }
        .natija2 {
          font-size: 20px;
        }
        .pop-cour .container .row .col-md-3 i{
          font-size: 25px;
        }
        .vbox-overlay {
          position: relative;
          width: 100vh;
          width: 100vh;
          background-position: center;
        }
        .rasm {
          height: 100vh;
        width: 100vh;
            object-fit: cover;
        background-position: center;*/
        }
        .block_havola .box .name {
          font-size: 15px;
        }
       
      } 
     /* .tel-versiya {
        position: 
        width: 100vh;
        height: 100vh;
      }*/
    </style>
    <div class="orqafon1 tel-versiya" style="padding-top: 5%;">
      <div class="container" style="padding-bottom: 5%;">
          <section class="sect-title" data-aos="fade-up" style="margin-bottom: 6.7%;">
            <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
            <span class="qwert"><?=Yii::t('app','Tezkor ilovalar')?></span>
            <span class="qwert"><?=Yii::t('app','Tezkor ilovalar')?></span>
          </section>
        <div class="row">
          <?
          $lang = Yii::$app->language;
            foreach ($tezkor_havolalar as $tezkor_havola) {
              if ($lang == 'uz') {
                $tezkor_havolalar_name = $tezkor_havola->name_uz;
              }elseif ($lang == 'en') {
                $tezkor_havolalar_name = $tezkor_havola->name_en;
              }elseif ($lang == 'ru') {
                $tezkor_havolalar_name = $tezkor_havola->name_ru;
              }
              ?>
              <div class="col-md-4 col-12">
                <div class="block_havola">
                  <div class="box">
                      <?
                        if ($tezkor_havola->link_type == 1) {
                          ?>
                             <a href="<?=Url::to(["site/".$tezkor_havola->link, 'id'=>$tezkor_havola->tez_men__sub_id])?>" class="name"><?=$tezkor_havolalar ? $tezkor_havolalar_name : ''?></a>
                          <?
                        }else{
                          ?>
                             <a target="_blank" href="<?=$tezkor_havolalar ? $tezkor_havola->link : ''?>" class="name"><?=$tezkor_havolalar ? $tezkor_havolalar_name : ''?></a>
                          <?
                        }
                      ?>
                      <div class="circle"></div>
                      <img src="../<?=$tezkor_havola->img?>" class="product">
                  </div>
                </div>
              </div>
              <?
            }
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../images/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelector(".box"), {
        max: 25,
        speed: 400
    });
    
    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".box"));
    </script>
    <!-- End Services Section -->
  
    <!-- POPULAR COURSES -->
    <style type="text/css">
      .pop-cour{
        background-color: #3f78e0;
      }
      .pop-cour .container .row .col-md-3 p {
        color: white;
        font-size: 20px;
        font-weight: bold;
      }
      .natija1 {
        font-size: 35px !important;
      }
      .natija2 {
        font-size: 25px !important;
      }
      .pop-cour .container .row .col-md-3 i {
        color: white;
        font-size: 50px;
        margin-bottom: 15px;
      }
    </style>
    <section class="sect-title mb-5 mt-5" data-aos="fade-up">
      <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
      <span class="qwert"><?=Yii::t('app',"Asosiy ko'rsatkichlar")?></span>
      <span class="qwert"><?=Yii::t('app',"Asosiy ko'rsatkichlar")?></span>
    </section>
    <section class="pop-cour">
       <div class="container">
         <div class="row" style="text-align: center; padding: 25px;">
             <div class="col-md-3">
                 <i class="fa fa-graduation-cap"></i>
                 <p class="natija1 counter">5</p>
                 <p class="natija2"><?=Yii::t('app', 'Fakultetlar')?></p>
             </div>
             <div class="col-md-3">
                <i class="fas fa-users"></i>
                <p class="natija1 counter">3857</p>
                 <p class="natija2"><?=Yii::t('app','Talabalar')?></p>
             </div>
             <div class="col-md-3">
                 <i class="fas fa-chalkboard-teacher"></i>
                 <p class="natija1 counter">235</p>
                 <p class="natija2"><?=Yii::t('app', "O'qituvchilar")?></p>
             </div>
             <div class="col-md-3">
                 <i class="fa fa-briefcase" aria-hidden="true"></i>
                 <p class="natija1 counter">3</p>
                 <p class="natija2"><?=Yii::t('app','Hamkorlar')?></p>
             </div>
         </div>
       </div>
    </section>
  <!--  <div class="container">
     <div class="row">
       <div class="col-md-4">
        <div class="Bxblog">
          <div class="box">
              <img src="../images/ev-bg2.jpg" class="imgBx">
              <div class="contextBx">
                  <h2>salom aleykum dostlar</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 </p>
              </div>
          </div>
        </div>
       </div>
     </div>
   </div> -->
   <!--  <script type="text/javascript">
       VanillaTilt.init(document.querySelector(".Bxblog"), {
        max: 25,
        speed: 400
    });
    
    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".Bxblog"));
    </script> -->
 <!--    <style type="text/css">
  .Bxblog {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 50px 0px;
      transform-style: preserve-3d;
  }
  .Bxblog .box {
      position: relative;
      width: 350px !important;
      height: 280px !important;
      margin: 60px 0px;
      transform-style: preserve-3d;
    }
    .Bxblog .box .imgBx {
      position: absolute;
      top: 0px;
      left: 0px;
       width: 350px !important;
      height: 280px !important;
      border-right: 10px;
      background-color: #fff;
      border-radius: 20px;
      transform-style: preserve-3d;
    }
    .Bxblog .box:hover {
      box-shadow: 0 50px 80px rgba(0,0,0,0.2)
    }
    .Bxblog .box .contextBx {
      position: absolute;
      top: 70%;
      left: 50px;
      right: 50px;
      background-color: #fff;
      transform: translateZ(20px) scaleY(0);
      /*padding: 40px 25px;*/
      transform-origin: top;
      transition: 0.5s;
      transform-style: preserve-3d;
      background-color: #fff;
      border-radius: 20px;
    }
    .Bxblog .box:hover .contextBx {
      transform: translateZ(20px) scaleY(1);
    }
     
  .Bxblog {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 50px 0px;
      transform-style: preserve-3d;
  }
  .Bxblog .box {
    position: relative;
    width: 450px;
    height: 300px;
    margin: 60px 0px;
    transform-style: preserve-3d;
  }
  .Bxblog .box .imgBx {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 650px;
    height: 450px;
    border-right: 10px;
    background-color: #fff;
    border-radius: 20px;
    transform-style: preserve-3d;
  }
  .Bxblog .box:hover {
    box-shadow: 0 50px 80px rgba(0,0,0,0.2)
  }
  .Bxblog .box .contextBx {
    position: absolute;
    top: 50%;
    left: 50px;
    right: 50px;
    background-color: #fff;
    transform: translateZ(20px) scaleY(0);
    padding: 40px 25px;
    transform-origin: top;
    transition: 0.5s;
    transform-style: preserve-3d;
    background-color: #fff;
    border-radius: 20px;
  }
  .Bxblog .box:hover .contextBx {
    transform: translateZ(20px) scaleY(1);
  }
   

    </style> -->
    <!-- Yangiliklar -->
    <div class="">
      <section id="more-services" class="more-services orqafon1" style="padding-top: 2.5%; padding-bottom: 2.5%;">
        <div class="container">
          <section class="sect-title mb-5 mt-3" data-aos="fade-up" style="padding-bottom: 30px;">
            <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
            <span class="qwert"><?=Yii::t('app',"Yangiliklar")?></span>
            <span class="qwert"><?=Yii::t('app',"Yangiliklar")?></span>
          </section>
          <div class="row">
        <?
        $lang = Yii::$app->language;
          foreach ($news as $new) {
            if ($lang == 'uz') {
                $news_name = $new->name_uz;
              }elseif ($lang == 'en') {
                $news_name = $new->name_en;
              }elseif ($lang == 'ru') {
                $news_name = $new->name_ru;
              }
              ?>
                  <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="new_date">
                        <i class="fa fa-calendar"><?=$news ? $new->date : ''?></i>
                        <div><i class="fa fa-eye"><?=$news ? $new->views : ''?></i></div>
                      </div>
                      <div class="card" style='background-image: url("arguments/dr_sl_img/<?=$news ? $new->img : ''?>");' data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                          <a href="<?=Url::to(['site/pages', 'id'=>$new->id])?>" class="card-text"><?=yii\helpers\StringHelper::truncate($news ? $news_name : '', 60, '...')?></a>
                          <!-- <div class="read-more"><a href=""><i class="icofont-arrow-right"></i>Batafsil</a></div> -->
                        </div>
                      </div>
                  </div>
              <?
          }
        ?>
         </div>
         <div style="text-align: center; font-size: 20px; margin-top: 40px;">
           <a href="<?=Url::to(['site/allpages', 'id'=>3])?>" class="btn btn-sm btn-primary rounded-pill"><?=Yii::t('app','Barchasi')?></a>
         </div>
        </div>    
      </section>
    </div>
    <!-- End More Services Section -->

<style type="text/css">

  .back {
    background-color: blue;
    min-height: 700px;
  }
  .card-body a .card-text{
    line-height: 12px;
  }

</style>
<!-- little slider -->
 <section class="pop-cour">
       <div class="container">
          <div style="margin-top: 40px; margin-bottom: 20px;">
               <div class="row">
                   <?
                    $lang = Yii::$app->language;
                    foreach ($dr_slider_img as $dr_slider) {
                       if ($lang == 'uz') {
                          $dr_slider_img_name = $dr_slider->name_uz;
                          $dr_slider_img_content = $dr_slider->content_uz;
                          $dr_slider_img_field = $dr_slider->field_uz;
                        }elseif ($lang == 'en') {
                          $dr_slider_img_name = $dr_slider->name_en;
                          $dr_slider_img_content = $dr_slider->content_en;
                          $dr_slider_img_field = $dr_slider->field_en;
                        }elseif ($lang == 'ru') {
                          $dr_slider_img_name = $dr_slider->name_ru;
                          $dr_slider_img_content = $dr_slider->content_ru;
                          $dr_slider_img_field = $dr_slider->field_ru;
                        }
                        ?>
                            <div class="col-md-8 direktor_slider">
                          <?=$dr_slider_img ? $dr_slider_img_content : ''?>
                           <p style="font-size: 18px; color: white; float: right; font-weight: bold; margin-top: 20px;"><?=$dr_slider_img ? $dr_slider_img_name : ''?> <br><span style="font-size: 16px; color: white; float: right; font-weight: bold;"><?=$dr_slider_img ? $dr_slider_img_field : ''?></span></p>
                           </div>
                           <div class="col-md-4">
                                <img src="<?=$dr_slider_img ? $dr_slider->img : ''?>" style="border-radius: 50%;" height="200px;" width ="200px;">
                           </div>
                        <?
                    }
                   ?>
               </div>
          </div>
       </div>
    </section>

     <!-- Events -->
    <section id="more-services" class="more-services orqafon1" style="padding-top: 3%; padding-bottom: 3%;">
      <div class="container">
        <section class="sect-title mb-5 mt-3" data-aos="fade-up" style="padding-bottom: 30px;">
          <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
          <span class="qwert"><?=Yii::t('app',"E'lonlar")?></span>
          <span class="qwert"><?=Yii::t('app',"E'lonlar")?></span>
        </section>
        <div class="row">
    <?
    $lang = Yii::$app->language;
        foreach ($event as $events) {
           if ($lang == 'uz') {
              $event_name = $events->name_uz;
            }elseif ($lang == 'en') {
              $event_name = $events->name_en;
            }elseif ($lang == 'ru') {
              $event_name = $events->name_ru;
            }
            ?>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="new_date">
                      <i class="fa fa-calendar"><?=$event ? $events->date : ''?></i>
                      <div><i class="fa fa-eye"><?=$event ? $events->views : ''?></i></div>
                    </div>
                    <div class="card" style='background-image: url("arguments/dr_sl_img/<?=$event ? $events->img : ''?>");' data-aos="fade-up" data-aos-delay="100">
                      <div class="card-body">
                        <a href="<?=Url::to(['site/pages', 'id'=>$events->id])?>" class="card-text"><?=yii\helpers\StringHelper::truncate($event ? $event_name : '', 60, '...')?></a>
                      </div>
                    </div>
                </div>
            <?
        }
    ?>
        </div>
         <div style="text-align: center; font-size: 20px; margin-top: 40px;">
           <a href="<?=Url::to(['site/allpages', 'id'=>4])?>" class="btn btn-sm btn-primary rounded-pill"><?=Yii::t('app','Barchasi')?></a>
         </div>
      </div>
    </section>

   
 <!-- video -->
     <section class="orqafon" style="padding-top: 3%; padding-bottom: 1%;">
       <div class="container">
           <section class="sect-title mb-5" data-aos="fade-up" style="padding-bottom: 5px;">
            <span class="qwert"><?=Yii::t('app',"Video Lavha")?></span>
            <span class="qwert"><?=Yii::t('app',"Video Lavha")?></span>
          </section>
          <section class="hero--area section-padding-80 mb-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="tab-content">
                          <?
                            $i=1;
                            $lang = Yii::$app->language;
                            foreach ($video_gallery as $video_gallery_key) {
                              if ($lang == 'uz') {
                                $video_gallery_key_name = $video_gallery_key->name_uz;
                                $video_gallery_key_type = $video_gallery_key->type_uz;
                              }elseif ($lang == 'en') {
                                $video_gallery_key_name = $video_gallery_key->name_en;
                                $video_gallery_key_type = $video_gallery_key->type_en;
                              }elseif ($lang == 'ru') {
                                $video_gallery_key_name = $video_gallery_key->name_ru;
                                $video_gallery_key_type = $video_gallery_key->type_ru;
                              }
                              ?>
                                  <div class="tab-pane fade <?if($i==1){?> show active<?$i=2;}?>" id="post-<?=$video_gallery_key->id?>" role="tabpanel" aria-labelledby="post-<?=$video_gallery_key->id?>-tab">
                                <!-- Single Feature Post -->
                                    <div class="single-feature-post video-post bg-img" style="background-image: url(<?=$video_gallery_key->img?>);">
                                        <!-- Play Button -->
                                     
                                        <a class="venobox play-btn mb-4" data-autoplay="true" data-vbtype="video" href="<?=$video_gallery_key->link?>"></a>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-cata"><?=$video_gallery_key_type?></a>
                                            <a href="" class="post-title"><?=$video_gallery_key_name?></a>
                                        </div>

                                        <!-- Video Duration -->
                                        <span class="video-duration"><?=$video_gallery_key->video_duration?></span>
                                    </div>
                                  </div>
                              <?
                            }
                          ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 col-lg-4">
                        <ul class="nav" id="boxscroll" role="tablist">
                          <?
                            $i=1;
                            foreach ($video_gallery as $video_gallery_key) {
                              ?>
                                <li class="nav-item">
                                    <a class="nav-link<?if($i==1){?> active<?$i=2;}?>" id="post-<?=$video_gallery_key->id?>-tab" data-toggle="pill" href="#post-<?=$video_gallery_key->id?>" role="tab" aria-controls="post-<?=$video_gallery_key->id?>" aria-selected="true">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post style-2 d-flex align-items-center">
                                            <div class="post-thumbnail">
                                                <img src="<?=$video_gallery_key->img?>" alt="">
                                            </div>
                                            <div class="post-content">
                                                <span class="post-title"><?=yii\helpers\StringHelper::truncate($video_gallery ? $video_gallery_key->name_uz : '', 45, '...')?></span>
                                                <div class="post-meta d-flex justify-content-between">
                                                    <?=$video_gallery_key->type_uz?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                              <?
                            }
                          ?>
                        </ul>
                    </div>
                </div>
            </div>
          </section>    
       </div>
     </section>
     

    <style type="text/css">
      #boxscroll {
  position: relative;
  z-index: 1;
  background-color: #393c3d;
  width: 100%;
  height: 500px;
  overflow: auto; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    #boxscroll {
      height: 400px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    #boxscroll {
      height: 350px; } }
  @media only screen and (max-width: 767px) {
    #boxscroll {
      height: 300px; } }
  #boxscroll .nav-link {
    padding: 0;
    padding: 15px 20px;
    border-left: 4px solid transparent; }
    #boxscroll .nav-link.active {
      display: inline-block;
      
      background-color: #4d5051;
      border-left-color: #0d0dfd; }


.single-blog-post {
  position: relative;
  z-index: 1;
  margin-bottom: 20px; }
  .single-blog-post:last-child {
    margin-bottom: 0; }
  .single-blog-post .post-thumbnail {
    position: relative;
    z-index: 1;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100px;
    flex: 0 0 100px;
    max-width: 100px;
    width: 100px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-blog-post .post-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .single-blog-post .post-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px; } }
    @media only screen and (max-width: 767px) {
      .single-blog-post .post-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px; } }
    .single-blog-post .post-thumbnail img {
      width: 100%; }
  .single-blog-post .post-content {
    position: relative;
    z-index: 1;
    padding-left: 20px; }
    .single-blog-post .post-content .post-title {
      color: #ffffff;
      margin-bottom: 5px;
      display: block;
      /*font-size: 15px;*/
      font-weight: 700; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-blog-post .post-content .post-title {
          font-size: 12px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-blog-post .post-content .post-title {
          font-size: 10px; } }
      @media only screen and (max-width: 767px) {
        .single-blog-post .post-content .post-title {
          font-size: 10px; } }
      .single-blog-post .post-content .post-title:hover, .single-blog-post .post-content .post-title:hover {
        color: #db4437; }
    .single-blog-post .post-content .post-meta a {
      display: inline-block;
      color: #595959;
      font-size: 12px; }
      .single-blog-post .post-content .post-meta a:hover, .single-blog-post .post-content .post-meta a:hover {
        color: #ffffff; }
  .single-blog-post.style-2 {
    margin-bottom: 0; }
    .single-blog-post.style-2 .post-thumbnail {
      position: relative;
      z-index: 1;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 110px;
      flex: 0 0 110px;
      max-width: 110px;
      width: 110px; }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-blog-post.style-2 .post-thumbnail {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 80px;
          flex: 0 0 80px;
          max-width: 80px;
          width: 80px; } }
      @media only screen and (max-width: 767px) {
        .single-blog-post.style-2 .post-thumbnail {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 80px;
          flex: 0 0 80px;
          max-width: 80px;
          width: 80px; } }
      .single-blog-post.style-2 .post-thumbnail img {
        width: 100%; }
    .single-blog-post.style-2 .post-content {
      position: relative;
      z-index: 1;
      padding-left: 20px; }
      .single-blog-post.style-2 .post-content .post-title {
        color: #ffffff;
        margin-bottom: 10px;
        display: block;
        font-weight: 700;
        font-size: 13px;
        line-height: 1.5; }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .single-blog-post.style-2 .post-content .post-title {
            font-size: 14px; } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .single-blog-post.style-2 .post-content .post-title {
            font-size: 13px; } }
        @media only screen and (max-width: 767px) {
          .single-blog-post.style-2 .post-content .post-title {
            font-size: 13px; } }
      .single-blog-post.style-2 .post-content .post-meta span {
        display: inline-block;
        color: #a6a6a6;
        font-size: 12px; }
  .single-blog-post.style-3 {
    margin-bottom: 0; }
    .single-blog-post.style-3 .post-thumbnail {
      position: relative;
      z-index: 1;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 140px;
      flex: 0 0 140px;
      max-width: 140px;
      width: 140px; }
      @media only screen and (max-width: 767px) {
        .single-blog-post.style-3 .post-thumbnail {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 100px;
          flex: 0 0 100px;
          max-width: 100px;
          width: 100px; } }
    .single-blog-post.style-3 .post-content .post-title {
      color: #ffffff;
      margin-bottom: 15px;
      display: block;
      font-weight: 700;
      font-size: 16px;
      line-height: 1.5; }
      @media only screen and (max-width: 767px) {
        .single-blog-post.style-3 .post-content .post-title {
          font-size: 14px; } }
      .single-blog-post.style-3 .post-content .post-title:hover, .single-blog-post.style-3 .post-content .post-title:hover {
        color: white; }
    .single-blog-post.style-3 .post-content .post-meta span {
      display: inline-block;
      color: #a6a6a6;
      font-size: 12px; }

.single-feature-post.video-post {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 500px; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-feature-post.video-post {
      height: 400px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-feature-post.video-post {
      height: 350px; } }
  @media only screen and (max-width: 767px) {
    .single-feature-post.video-post {
      height: 320px; } }
  .single-feature-post.video-post::before {
    content: "";
    position: absolute;
    height: 50%;
    width: 100%;
    z-index: 5;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%); }
  .single-feature-post.video-post .play-btn {
    position: absolute;
    margin-top: -30px;
    margin-left: -30px;
    top: 50%;
    left: 50%;
    width: 60px;
    height: 60px;
    font-size: 24px;
    /*background-color: #db4437;*/
    border-radius: 50%;
    color: #ffffff;
    line-height: 60px;
    text-align: center;
    padding: 0 0 0 3px;
    z-index: 99; }
    @media only screen and (max-width: 767px) {
      .single-feature-post.video-post .play-btn {
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 20px; } }
  .single-feature-post.video-post .post-content {
    position: absolute;
    left: 30px;
    bottom: 30px;
    z-index: 59;
    width: 80%; }
    @media only screen and (max-width: 767px) {
      .single-feature-post.video-post .post-content {
        left: 15px;
        bottom: 15px; } }
    .single-feature-post.video-post .post-content .post-title {
      font-size: 20px;
      display: block;
      color: #ffffff;
      margin-bottom: 10px; }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-feature-post.video-post .post-content .post-title {
          font-size: 15px; } }
      @media only screen and (max-width: 767px) {
        .single-feature-post.video-post .post-content .post-title {
          font-size: 15px; } }
      .single-feature-post.video-post .post-content .post-title:hover, .single-feature-post.video-post .post-content .post-title:focus {
        color: white; }
    .single-feature-post.video-post .post-content .post-meta {
      position: relative;
      z-index: 1; }
      .single-feature-post.video-post .post-content .post-meta a {
        display: inline-block;
        margin-right: 30px;
        color: #ffffff; }
        .single-feature-post.video-post .post-content .post-meta a:hover, .single-feature-post.video-post .post-content .post-meta a:focus {
          color: #0d0dfd; }
  .single-feature-post.video-post .video-duration {
    display: inline-block;
    position: absolute;
    right: 30px;
    bottom: 30px;
    background-color: #0f1112;
    padding: 6px 12px;
    border-radius: 2px;
    font-size: 14px;
    color: #ffffff;
    line-height: 1;
    z-index: 79; }


.bg-img {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat; }

.bg-transparent {
  background-color: transparent !important; }


    </style>
   
   

  <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg orqafon1">

      <div class="container" data-aos="fade-up">
       <section class="sect-title mb-5" data-aos="fade-up" style="padding-bottom: 30px;">
        <!-- <h2 style="text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h2> -->
        <span class="qwert"><?=Yii::t('app',"Foydali saytlar")?></span>
        <span class="qwert"><?=Yii::t('app',"Foydali saytlar")?></span>
      </section>
        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <?
            foreach ($supporters as $supporter) {
              ?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="supporter-logo">
                    <a target="_blank" href="<?=$supporters ? $supporter->link : ''?>"><img src="<?=$supporters ? $supporter->img : ''?>" class="img-fluid" alt=""></a>
                  </div>
                </div>
              <?
            }
          ?>
        </div>
      </div>
    </section>
    <!-- End Sponsors Section -->

  <!-- <div id="preloader"></div> -->
  <style type="text/css">
    .direktor_slider p span>span {
      font-size: 20px;
      background-color: #3f78e0 !important;
      color: white;
      /*text-align: center !important;*/
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>