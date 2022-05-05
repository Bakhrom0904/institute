<?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;

$lang = Yii::$app->language;
foreach ($emblems as $emblems_item) {
	if ($lang == 'uz') {
      $cmemblems_name = $emblems_item->name_uz;
      $cmemblems_content = $emblems_item->content_uz;
    }elseif ($lang == 'en') {
    	$cmemblems_name = $emblems_item->name_en;
    	$cmemblems_content = $emblems_item->content_en;
    }elseif ($lang == 'ru') {
    	$cmemblems_name = $emblems_item->name_ru;
    	$cmemblems_content = $emblems_item->content_ru;
    }
}
$this->title = $cmemblems_name;
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
				<h3 class="mb-5 text-center" style="color: black; text-transform: uppercase;"><?=$emblems ? $cmemblems_name : ''?></h3>
				<?=$emblems ? $cmemblems_content : ''?>
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
			 color: black; 
			 font-weight: 400;
			line-height: 24px;
		list-style-type: none;
	}
	.row .col-md-8 .middle ul li{
         color: black; 
         font-weight: 400;
        line-height: 24px;
        list-style-type: disc !important;
    }
	
	.fakultet_btn {
		padding: 5px;
		text-align: center;
		margin-left: 65px;

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
</style>

