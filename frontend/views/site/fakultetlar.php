<?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
$lang = Yii::$app->language;
	foreach ($menu_sub as $menu_sub_item) {
		if ($lang == 'uz') {
	      $cmmenu_sub = $menu_sub_item->name_uz;
	    }elseif ($lang == 'en') {
	    	$cmmenu_sub = $menu_sub_item->name_en;
	    }elseif ($lang == 'ru') {
	    	$cmmenu_sub = $menu_sub_item->name_ru;
	    }
	}
$lang = Yii::$app->language;
	foreach ($fakultet as $fakultet_item) {
		if ($lang == 'uz') {
	      $fakultet_name = $fakultet_item->name_uz;
	      $fakultet_faculty = $fakultet_item->faculty_uz;
	      $fakultet_rank = $fakultet_item->rank_uz;
	      $fakultet_date = $fakultet_item->qabul_date_uz;
	      $fakultet_adres = $fakultet_item->address_uz;
	      $cdfakultet_staff = $fakultet_item->staff_uz;
	      $fakultet_content = $fakultet_item->content_uz;
	    }elseif ($lang == 'en') {
	    	$fakultet_name = $fakultet_item->name_en;
	    	$fakultet_faculty = $fakultet_item->faculty_en;
	    	$fakultet_rank = $fakultet_item->rank_en;
	    	$fakultet_date = $fakultet_item->qabul_date_en;
	    	$fakultet_adres = $fakultet_item->address_en;
	    	$cdfakultet_staff = $fakultet_item->staff_en;
	    	$fakultet_content = $fakultet_item->content_en;
	    }elseif ($lang == 'ru') {
	    	$fakultet_name = $fakultet_item->name_ru;
	    	$fakultet_faculty = $fakultet_item->faculty_ru;
	    	$fakultet_rank = $fakultet_item->rank_ru;
	    	$fakultet_date = $fakultet_item->qabul_date_ru;
	    	$fakultet_adres = $fakultet_item->address_ru;
	    	$cdfakultet_staff = $fakultet_item->staff_ru;
	    	$fakultet_content = $fakultet_item->content_ru;
	    }
	}
$this->title = $cmmenu_sub;
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
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h4 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$menu_sub ? $cmmenu_sub : ''?></h4>
				<img src="../<?=$fakultet ? $fakultet_item->img : ''?>" style="display: block;
  					margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
  				<h6 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$fakultet ? $fakultet_name : ''?><br><i style="text-transform: capitalize;"><?=$fakultet ? $fakultet_faculty : ''?></i><br><i style="text-transform: lowercase;"><?=$fakultet ? $fakultet_rank : ''?></i></h6>
  			<?
				foreach ($fakultet_staff as $fakultet_staff_item) {
					if ($fakultet_staff_item->staff_name_uz==$fakultet_item->name_uz) {
						?>
						<div class="profile">
				  			<a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>">
						        <span></span>
						        <span></span>
						        <span></span>
						        <span></span>
						        <?=Yii::t('app',"Profilga o'tish")?>
						    </a>
				  		</div>
						<?
					}
				}
			?>
  			<hr style="margin: 0px;">
		  	<table class="table table-bordered mt-4" style="color: black;">
			  <tbody>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app', 'Qabul vaqti')?></th>
			      <td><?=$fakultet ? $fakultet_date : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Tel')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->tel : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app', 'Fax')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->fax : ''?></td>
			    </tr>
			    <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app', 'E-mail')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->email : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Telegram')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_item->telegram : ''?></td>
			    </tr>
			     <tr>
			      <th scope="row" class="table_first"><?=Yii::t('app','Manzil')?>:</th>
			      <td colspan="2"><?=$fakultet ? $fakultet_adres : ''?></td>
			    </tr>
			  </tbody>
			</table>
			<hr style="margin: 0px;">
			<h4 style="text-align: center;color: black; text-transform: uppercase;" class="mt-4"><?=$fakultet ? $cmmenu_sub : ''?> <?=$fakultet ? $cdfakultet_staff : ''?></h4>
			<hr style="margin: 0px;">
			<div class="row mb-5 mt-5">
					<?
					$lang = Yii::$app->language;
						foreach ($fakultet_staff as $fakultet_staff_item) {
							if ($lang == 'uz') {
						      $fakultet_staff_name = $fakultet_staff_item->staff_name_uz;
						      $fakultet_staff_rank = $fakultet_staff_item->staff_rank_uz;
						    }elseif ($lang == 'ru') {
						    	$fakultet_staff_name = $fakultet_staff_item->staff_name_ru;
						    	$fakultet_staff_rank = $fakultet_staff_item->staff_rank_ru;
						    }elseif ($lang == 'en') {
						    	$fakultet_staff_name = $fakultet_staff_item->staff_name_en;
						    	$fakultet_staff_rank = $fakultet_staff_item->staff_rank_en;
						    }
							if ($fakultet_staff_item->staff_name_uz!=$fakultet_item->name_uz) {
								?>
									<div class="col-md-6 d-flex align-items-stretch">
					                   <div class="card mb-5" style="width: 100%; text-align: center;">
										  <img src="<?=$fakultet_staff ? $fakultet_staff_item->staff_img : ''?>" class="card-img-top" alt="...">
										  <div class="card-body">
										    <h5 class="card-title"><?=$fakultet_staff ? $fakultet_staff_name : ''?></h5>
										    <p class="card-text"><?=$fakultet_staff ? $fakultet_staff_rank : ''?></p>
										    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										    <a href="<?=Url::to(['site/teacher', 'id'=>$fakultet_staff_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Shaxsiy kabinet')?></a>
										  </div>
										</div>
					                </div>
								<?
							}
						}
					?>
			</div>
			<hr style="margin: 0px;">
			<h4 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4"><?=$menu_sub ? $cmmenu_sub : ''?></h4>
 			<hr style="margin: 0px;">
 			<p class="mt-5"><?=$fakultet ? $fakultet_content : ''?></p>
			</div>
		</div>
		<?=include 'right_bar.php';?>
	</div>
</div>
<style type="text/css">
	body {
		background-color: #f4f4f5;
	}
	p, li, a, span, table, tr, td, th, label {
			   		 /*font-size: 18px;*/
			   		 color: black; 
			   		 font-weight: 400;
			   		line-height: 24px;
			    	list-style-type: none;
				}
	.fakultet_btn {
		padding: 5px;
		text-align: center;
		margin-left: 35%;

	}
	.row .col-md-8 .middle ul li{
         /*font-size: 18px;*/
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
    }
	.table-bordered>:not(caption)>*>* {
		padding: 8px;
	}
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
	}
	.table_first {
		font-weight: bold;
	}
	.card-body {
		padding: 10px !important;
	}
	.card-title {
		color: black;
		padding: 0px;
	}
	.card-text {
		text-align: center;
	}
	.profile a{
    position: relative;
    display: inline-block;
    padding: 10px 10px;
    color: blue;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 2px;
    overflow: hidden;
    /*margin-right: 50px;*/
   
}
.profile a:hover{
    background: #3f78e0;
    color: white;
    box-shadow: 0 0 5px #3f78e0,
                0 0 25px #3f78e0,
                0 0 30px #3f78e0,
                0 0 500px #3f78e0;
}
.profile a:nth-child(1){
    filter: hue-rotate(10deg);
}
.profile a:nth-child(2){
    filter: hue-rotate(10deg);
}
.profile a span{
    position: absolute;
    display: block;
}
.profile a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#3f78e0);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
.profile a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#3f78e0);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
.profile a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#3f78e0);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


.profile a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#03e9f4);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}

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
</style>

