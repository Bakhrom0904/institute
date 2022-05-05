<?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
$lang = Yii::$app->language;
	foreach ($kafedralar as $kafedralar_item) {
		if ($lang == 'uz') {
          $cmkafedralar = $kafedralar_item->name_uz;
        }elseif ($lang == 'en') {
          $cmkafedralar = $kafedralar_item->name_en;
        }elseif ($lang == 'ru') {
          $cmkafedralar = $kafedralar_item->name_ru;
        }
	}
$lang = Yii::$app->language;
	foreach ($com_kafedra as $com_kafedra_item) {
		if ($lang == 'uz') {
          $cmcom_kafedra_name = $com_kafedra_item->name_uz;
          $cmcom_kafedra_lavozim = $com_kafedra_item->lavozim_uz;
          $cmcom_kafedra_daraja = $com_kafedra_item->darajasi_uz;
          $cmcom_kafedra_qabul = $com_kafedra_item->qabul_uz;
          $cmcom_kafedra_manzil = $com_kafedra_item->manzil_uz;
          $cmcom_kafedra_hodim = $com_kafedra_item->kafedra_hodim_uz;
          $cmcom_kafedra_content = $com_kafedra_item->content_uz;
        }elseif ($lang == 'en') {
          $cmcom_kafedra_name = $com_kafedra_item->name_en;
          $cmcom_kafedra_lavozim = $com_kafedra_item->lavozim_en;
          $cmcom_kafedra_daraja = $com_kafedra_item->darajasi_en;
          $cmcom_kafedra_qabul = $com_kafedra_item->qabul_en;
          $cmcom_kafedra_manzil = $com_kafedra_item->manzil_en;
          $cmcom_kafedra_hodim = $com_kafedra_item->kafedra_hodim_en;
          $cmcom_kafedra_content = $com_kafedra_item->content_en;
        }elseif ($lang == 'ru') {
          $cmcom_kafedra_name = $com_kafedra_item->name_ru;
          $cmcom_kafedra_lavozim = $com_kafedra_item->lavozim_ru;
          $cmcom_kafedra_daraja = $com_kafedra_item->darajasi_ru;
          $cmcom_kafedra_qabul = $com_kafedra_item->qabul_ru;
          $cmcom_kafedra_manzil = $com_kafedra_item->manzil_ru;
          $cmcom_kafedra_hodim = $com_kafedra_item->kafedra_hodim_ru;
          $cmcom_kafedra_content = $com_kafedra_item->content_ru;
        }
	}

$this->title = "sad";
$this->params['breadcrumbs'][] = $this->title;
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
<div class="container">
	<div class="row" style="padding: 30px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h4 class="mb-2 text-center" style="color: black; text-transform: uppercase;"><?=$kafedralar ? $cmkafedralar : ''?></h4>
 				<hr style="margin: 0px; margin-bottom: 20px;">
 				<img src="../<?=$com_kafedra ? $com_kafedra_item->img : ''?>" style="display: block;
  				margin-left: auto;margin-right: auto;border-radius: 20px; width: 100%;">
	  			<h5 style="text-align: center; color: black; text-transform: uppercase;" class="mt-4">
	  				<?=$com_kafedra ? $cmcom_kafedra_name : ''?><br>
	  			</h5>
	  			<p style="text-align: center;"><i><?=$com_kafedra ? $cmcom_kafedra_lavozim : ''?></i><br><i><?=$com_kafedra ? $cmcom_kafedra_daraja : ''?></i></p>
	  			<?
	  			
					foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
						if ($kafedra_oqituvchilari_item->name_uz==$com_kafedra_item->name_uz) {
							?>
							<div class="profile">
					  			<a href="<?=Url::to(['site/kafedra', 'id'=>$kafedra_oqituvchilari_item->id])?>">
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
				      <td><?=$com_kafedra ? $cmcom_kafedra_qabul : ''?></td>
				    </tr>
				    <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app','E-mail')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->email_uz : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Tel')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->tel : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Telegram')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $com_kafedra_item->telegram : ''?></td>
				    </tr>
				     <tr>
				      <th scope="row" class="table_first"><?=Yii::t('app', 'Manzil')?>:</th>
				      <td colspan="2"><?=$com_kafedra ? $cmcom_kafedra_manzil : ''?></td>
				    </tr>
				  </tbody>
				</table>
				<h4 style="text-align: center; text-transform: uppercase;"><?=$com_kafedra ? $cmcom_kafedra_hodim : ''?></h4>
				<hr style="margin: 0px;">
				<div class="row">
				<?
				$lang = Yii::$app->language;
					foreach ($kafedra_oqituvchilari as $kafedra_oqituvchilari_item) {
						if ($lang == 'uz') {
				          $cmkafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_uz;
				          $cmkafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_uz;
				        }elseif ($lang == 'en') {
				          $cmkafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_en;
				          $cmkafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_en;
				        }elseif ($lang == 'ru') {
				          $cmkafedra_oqituvchilari_name = $kafedra_oqituvchilari_item->name_ru;
				          $cmkafedra_oqituvchilari_lavozim = $kafedra_oqituvchilari_item->lavozimi_ru;
				        }
						
						if ($kafedra_oqituvchilari_item->name_uz!=$com_kafedra_item->name_uz) {
							?>
								<div class="col-md-6 mt-5 d-flex align-items-stretch">
				                   <div class="card" style="width: 100%; text-align: center;">
									  <img src="<?=$kafedra_oqituvchilari ? $kafedra_oqituvchilari_item->img : ''?>" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title"><?=$kafedra_oqituvchilari ? $cmkafedra_oqituvchilari_name : ''?></h5>
									    <p class="card-text"><?=$kafedra_oqituvchilari ? $cmkafedra_oqituvchilari_lavozim : ''?></p>
									    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
									    <a href="<?=Url::to(['site/kafedra', 'id'=>$kafedra_oqituvchilari_item->id])?>" class="btn btn-sm btn-primary rounded-pill btnmak"><?=Yii::t('app', 'Shaxsiy kabinet')?></a>
									  </div>
									</div>
				                </div>
							<?
						}
					}
				?>
				</div>
				<h4 style="text-align: center; text-transform: uppercase; margin-top: 20px;"><?=Yii::t('app', 'kafedra tarixi haqida')?></h4>
				<hr style="margin: 0px; margin-bottom: 20px;">
				<p><?=$com_kafedra ? $cmcom_kafedra_content : ''?></p>
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
		text-transform: uppercase;
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