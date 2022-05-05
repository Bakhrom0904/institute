 <?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
$lang = Yii::$app->language;
foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
  if ($lang == 'uz') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_uz;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_uz;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_uz;
      }elseif ($lang == 'en') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_en;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_en;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_en;
      }elseif ($lang == 'ru') {
        $kafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_ru;
        $kafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_ru;
        $kafedra_oqituvchilari_daraja = $kafedra_oqituvchilari_item->darajasi_ru;
      }
}
 ?>

<div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    ['label' => "sdf", 'url' => ['site/allpages', 'id' => 1]],
                    $this->title,
                ],
            ]); 
          ?>
        </div>
      </div>
    </div>
 </div>
 <style type="text/css">
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
                            <li><a href="<?=Url::to(['site/kafedra', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>" class="pro-act"><?=Yii::t('app','Shaxsiy kabinet')?></a></li>
                            <li><a href="<?=Url::to(['site/kafedra_info', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>"><?=Yii::t('app',"Umumiy ma'lumot")?></a></li>
                            <li><a href="<?=Url::to(['site/kafedra_book', 'id'=>$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->id : ''])?>"><?=Yii::t('app','Ilmiy faoliyat')?></a></li>
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
              <img src="../<?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->img : ''?>" class="img_teacher">
              <h3 class="mt-3" style="text-align: center;"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_name : ''?></h3>
              <p style="text-align: center;"><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_lavozim : ''?>, <br><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_daraja : ''?></p>
              <hr style="margin: 0px; margin-bottom: 5%;">
              <p><i class="fa fa-telegram"></i><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->telegram : ''?></p>
              <p><i class="fa fa-facebook"></i> <?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->email : ''?></p>
              <p><i class="fa fa-instagram"></i><?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->tel : ''?></p>                  
            </div>
        </div>
        <div class="col-md-9 col-12">
          <div class="middle_bar_tea">
                     <h4 style="color: black;"><img src="../../images/icon/db2.png" alt="" /><?=Yii::t('app','Chop etilgan kitoblar')?></h4>
           <hr style="margin: 0px; margin-bottom: 5%;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?=Yii::t('app','Kitob nomi')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan joy')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan sana')?></th>
                </tr>
              </thead>
              <tbody>
                 <?
                 $lang = Yii::$app->language;
                  foreach ($books as $books_item) {
                      if ($lang == 'uz') {
                        $books_name = $books_item->name_uz;
                        $books_chop_etilgan_joy = $books_item->chop_etilgan_joy_uz;
                      }elseif ($lang == 'en') {
                        $books_name = $books_item->name_en;
                        $books_chop_etilgan_joy = $books_item->chop_etilgan_joy_en;
                      }elseif ($lang == 'ru') {
                        $books_name = $books_item->name_ru;
                        $books_chop_etilgan_joy = $books_item->chop_etilgan_joy_ru;
                      }
                    ?>
                      <tr>
                        <th scope="row"><?=$books ? $books_item->number : ''?></th>
                        <td><?=$books ? $books_name : ''?></td>
                        <td><?=$books ? $books_chop_etilgan_joy : ''?></td>
                        <td><?=$books ? $books_item->date : ''?></td>
                      </tr>
                    <?
                  }
                ?>
              </tbody>
            </table>
            <h4 style="color: black;"><img src="../../images/icon/article.ico" alt="" /><?=Yii::t('app','Maqolalar')?></h4>
           <hr style="margin: 0px; margin-bottom: 5%;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?=Yii::t('app','Maqola nomi')?></th>
                  <th scope="col"><?=Yii::t('app','Maqola darajasi')?></th>
                  <th scope="col"><?=Yii::t('app','Chop etilgan sana')?></th>
                </tr>
              </thead>
              <tbody>
                <?
                 $lang = Yii::$app->language;
                  foreach ($articles as $articles_item) {
                      if ($lang == 'uz') {
                        $articles_name = $articles_item->name_uz;
                        $articles_degree = $articles_item->article_degree_uz;
                      }elseif ($lang == 'en') {
                        $articles_name = $articles_item->name_en;
                        $articles_degree = $articles_item->article_degree_en;
                      }elseif ($lang == 'ru') {
                        $articles_name = $articles_item->name_ru;
                        $articles_degree = $articles_item->article_degree_ru;
                      }
                    ?>
                      <tr>
                        <th scope="row"><?=$articles ? $articles_item->number : ''?></th>
                        <td><?=$articles ? $articles_name : ''?></td>
                        <td><?=$articles ? $articles_degree : ''?></td>
                        <td><?=$articles ? $articles_item->date : ''?></td>
                      </tr>
                    <?
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
        </div>
    </div>
</div>


<style type="text/css">
   table, tr, td, th {
      /*font-size: 18px;*/
      color: black;
    }
    ul li a {
      /*font-size: 18px;*/
    } 
  .table thead tr th {
    font-weight: bold;
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
    body {
      background-color: #f4f4f5;
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
        transform-style: preserve-3d;
        background-color: #f4f4f5;
        box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
        border: 1px solid #F3F2F2;
        min-height: 96% !important;
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
        margin-bottom: 6%;
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


 
