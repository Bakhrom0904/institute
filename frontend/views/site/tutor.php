<?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
$lang = Yii::$app->language;
foreach ($menu_sub as $menu_sub) {
	if ($lang == 'uz') {
        $menu_sub_cm = $menu_sub->name_uz;
      }elseif ($lang == 'en') {
        $menu_sub_cm = $menu_sub->name_en;
      }elseif ($lang == 'ru') {
        $menu_sub_cm = $menu_sub->name_ru;
      }
}
$this->title = $menu_sub_cm;
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    // ['label' => 'Tutorlar', 'url' => ['site/tutor', 'id' => 13]],
                    $this->title,
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
.container .middle .row .col-md-6 .card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
 /*  background-clip: border-box; 
   border: 1px solid rgba(0, 0, 0, 0.125); */
  border-radius: 0.25rem;
}
  
  .container .middle .row .col-md-6 .card {
    position: relative;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
/*     flex-direction: column; 
     min-width: 0; 
     word-wrap: break-word;*/ 
    background-color: #f4f4f5;
   /*  background-clip: border-box; 
     border: 1px solid rgba(0, 0, 0, 0.125); 
     border-radius: 0.25rem; 
     box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px; */
    box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
}

  .container .middle .row .col-md-6 .card .card-body{
    background: #f4f4f5;
  }
 </style>
<div class="container mt-4">
		<div class="middle">
			<h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=Yii::t('app','Pedagogkika fakulteti')?></h3>
			<div class="row">
				<?
					$lang = Yii::$app->language;
					foreach ($tutor_info_faculty1 as $tutor_info_faculty1_item) {
						if ($lang == 'uz') {
					        $tutor_info_faculty1_name = $tutor_info_faculty1_item->name_uz;
					        $tutor_info_faculty1_biriktirilgan = $tutor_info_faculty1_item->biriktirilgan_uz;
					      }elseif ($lang == 'en') {
					        $tutor_info_faculty1_name = $tutor_info_faculty1_item->name_en;
					        $tutor_info_faculty1_biriktirilgan = $tutor_info_faculty1_item->biriktirilgan_en;
					      }elseif ($lang == 'ru') {
					        $tutor_info_faculty1_name = $tutor_info_faculty1_item->name_ru;
					        $tutor_info_faculty1_biriktirilgan = $tutor_info_faculty1_item->biriktirilgan_ru;
					      }
						?>
							<div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
				        <div class="card mb-5" style="width: 100%; text-align: center;">
								  <img src="../<?=$tutor_info_faculty1 ? $tutor_info_faculty1_item->img : ''?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title"><?=$tutor_info_faculty1 ? $tutor_info_faculty1_name : ''?></h5>
								    <p class="card-text"><?=$tutor_info_faculty1 ? $tutor_info_faculty1_biriktirilgan : ''?></p>
								    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
								    <a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_faculty1_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Batafsil')?></a>
								  </div>
								</div>
				      </div>
						<?
					}
				?>
			</div>

      <h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=Yii::t('app','Aniq tabiiy fanlar va jismoniy madaniyat fakulteti')?></h3>
      <div class="row">
        <?
          $lang = Yii::$app->language;
          foreach ($tutor_info_faculty2 as $tutor_info_faculty2_item) {
            if ($lang == 'uz') {
                  $tutor_info_faculty2_name = $tutor_info_faculty2_item->name_uz;
                  $tutor_info_faculty2_biriktirilgan = $tutor_info_faculty2_item->biriktirilgan_uz;
                }elseif ($lang == 'en') {
                  $tutor_info_faculty2_name = $tutor_info_faculty2_item->name_en;
                  $tutor_info_faculty2_biriktirilgan = $tutor_info_faculty2_item->biriktirilgan_en;
                }elseif ($lang == 'ru') {
                  $tutor_info_faculty2_name = $tutor_info_faculty2_item->name_ru;
                  $tutor_info_faculty2_biriktirilgan = $tutor_info_faculty2_item->biriktirilgan_ru;
                }
            ?>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                       <div class="card mb-5" style="width: 100%; text-align: center;">
                  <img src="../<?=$tutor_info_faculty2 ? $tutor_info_faculty2_item->img : ''?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?=$tutor_info_faculty2 ? $tutor_info_faculty2_name : ''?></h5>
                    <p class="card-text"><?=$tutor_info_faculty2 ? $tutor_info_faculty2_biriktirilgan : ''?></p>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_faculty2_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Batafsil')?></a>
                  </div>
                </div>
                    </div>
            <?
          }
        ?>
      </div>

      <h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=Yii::t('app','Xorijiy tillar va gumanitar fanlar fakulteti')?></h3>
      <div class="row">
        <?
          $lang = Yii::$app->language;
          foreach ($tutor_info_faculty3 as $tutor_info_faculty3_item) {
            if ($lang == 'uz') {
                  $tutor_info_faculty3_name = $tutor_info_faculty3_item->name_uz;
                  $tutor_info_faculty3_biriktirilgan = $tutor_info_faculty3_item->biriktirilgan_uz;
                }elseif ($lang == 'en') {
                  $tutor_info_faculty3_name = $tutor_info_faculty3_item->name_en;
                  $tutor_info_faculty3_biriktirilgan = $tutor_info_faculty3_item->biriktirilgan_en;
                }elseif ($lang == 'ru') {
                  $tutor_info_faculty3_name = $tutor_info_faculty3_item->name_ru;
                  $tutor_info_faculty3_biriktirilgan = $tutor_info_faculty3_item->biriktirilgan_ru;
                }
            ?>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                       <div class="card mb-5" style="width: 100%; text-align: center;">
                  <img src="../<?=$tutor_info_faculty3 ? $tutor_info_faculty3_item->img : ''?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?=$tutor_info_faculty3 ? $tutor_info_faculty3_name : ''?></h5>
                    <p class="card-text"><?=$tutor_info_faculty3 ? $tutor_info_faculty3_biriktirilgan : ''?></p>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_faculty3_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Batafsil')?></a>
                  </div>
                </div>
                    </div>
            <?
          }
        ?>
      </div>

      <h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=Yii::t('app',"Maktabgacha ta'lim fakulteti")?></h3>
      <div class="row">
        <?
          $lang = Yii::$app->language;
          foreach ($tutor_info_faculty4 as $tutor_info_faculty4_item) {
            if ($lang == 'uz') {
                  $tutor_info_faculty4_name = $tutor_info_faculty4_item->name_uz;
                  $tutor_info_faculty4_biriktirilgan = $tutor_info_faculty4_item->biriktirilgan_uz;
                }elseif ($lang == 'en') {
                  $tutor_info_faculty4_name = $tutor_info_faculty4_item->name_en;
                  $tutor_info_faculty4_biriktirilgan = $tutor_info_faculty4_item->biriktirilgan_en;
                }elseif ($lang == 'ru') {
                  $tutor_info_faculty4_name = $tutor_info_faculty4_item->name_ru;
                  $tutor_info_faculty4_biriktirilgan = $tutor_info_faculty4_item->biriktirilgan_ru;
                }
            ?>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                       <div class="card mb-5" style="width: 100%; text-align: center;">
                  <img src="../<?=$tutor_info_faculty4 ? $tutor_info_faculty4_item->img : ''?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?=$tutor_info_faculty4 ? $tutor_info_faculty4_name : ''?></h5>
                    <p class="card-text"><?=$tutor_info_faculty4 ? $tutor_info_faculty4_biriktirilgan : ''?></p>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_faculty4_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Batafsil')?></a>
                  </div>
                </div>
                    </div>
            <?
          }
        ?>
      </div>

      <h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=Yii::t('app',"San'atshunoslik fakulteti")?></h3>
      <div class="row">
        <?
          $lang = Yii::$app->language;
          foreach ($tutor_info_faculty5 as $tutor_info_faculty5_item) {
            if ($lang == 'uz') {
                  $tutor_info_faculty5_name = $tutor_info_faculty5_item->name_uz;
                  $tutor_info_faculty5_biriktirilgan = $tutor_info_faculty5_item->biriktirilgan_uz;
                }elseif ($lang == 'en') {
                  $tutor_info_faculty5_name = $tutor_info_faculty5_item->name_en;
                  $tutor_info_faculty5_biriktirilgan = $tutor_info_faculty5_item->biriktirilgan_en;
                }elseif ($lang == 'ru') {
                  $tutor_info_faculty5_name = $tutor_info_faculty5_item->name_ru;
                  $tutor_info_faculty5_biriktirilgan = $tutor_info_faculty5_item->biriktirilgan_ru;
                }
            ?>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                       <div class="card mb-5" style="width: 100%; text-align: center;">
                  <img src="../<?=$tutor_info_faculty5 ? $tutor_info_faculty5_item->img : ''?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?=$tutor_info_faculty5 ? $tutor_info_faculty5_name : ''?></h5>
                    <p class="card-text"><?=$tutor_info_faculty5 ? $tutor_info_faculty5_biriktirilgan : ''?></p>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?=Url::to(['site/tutor_profile', 'id'=>$tutor_info_faculty5_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Batafsil')?></a>
                  </div>
                </div>
                    </div>
            <?
          }
        ?>
      </div>








		</div>
</div>
<style type="text/css">
	.middle {
		background-color: white;
		border-radius: 10px;
		padding: 6%;
		/*box-shadow: 2px 10px 15px #888888;*/
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
		width: 99%;
		margin-bottom: 5%;
	}
	.card-text {
		text-align: center;
		color: black;
	}
	/*.card-img-top {
		height: 70%;
	}*/
	.card-body {
		padding: 10px !important;
	}
	.card-title {
		color: black;
		padding: 0px;
	}
	.card-text {
		margin-top: -10px;
		text-align: center;
	}

	   .pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}
.pagination li a, .pagination .disabled {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.pagination li a:hover {
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.pagination li a:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.pagination li a:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.pagination li:first-child a {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.pagination li:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination li.active a {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.pagination li.disabled a {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
} 
</style>

