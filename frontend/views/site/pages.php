<?
use yii\helpers\Url;
$lang = Yii::$app->language;
use yii\bootstrap4\Breadcrumbs;
use backend\models\MenuSub;

if ($lang == 'uz') {
        $pages_name = $pages->name_uz;
        $pages_content = $pages->content_uz;
      }elseif ($lang == 'en') {
        $pages_name = $pages->name_en;
        $pages_content = $pages->content_en;
      }elseif ($lang == 'ru') {
        $pages_name = $pages->name_ru;
        $pages_content = $pages->content_ru;
      }
$lang = Yii::$app->language;
$menu_sub = MenuSub::find()->Where(['id'=>$pages->page_menu_sub_id])->all();
foreach ($menu_sub as $menu_sub_item) {
    if ($lang == 'uz') {
      $cmmenu_sub_item = $menu_sub_item->name_uz;
    }elseif ($lang == 'en') {
      $cmmenu_sub_item = $menu_sub_item->name_en;
    }elseif ($lang == 'ru') {
      $cmmenu_sub_item = $menu_sub_item->name_ru;
    }
}
      $this->title = yii\helpers\StringHelper::truncate($pages_name , 60, '...');
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    ['label' => $cmmenu_sub_item, 'url' => ['site/allpages', 'id' => $pages->page_menu_sub_id]],
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
	<div class="row" style="padding: 30px 0px 0px 0px;">
		<div class="col-md-8 col-12">
			<div class="middle">
				<h3 style="color: black;"><?=$pages ? $pages_name : ''?></h3>
				<div class="new_date1">
	              <i class="fa fa-calendar"><?=$pages ? $pages->date : ''?></i>
	              <i class="fa fa-eye"><?=$pages ? $pages->views : ''?></i>
	            </div>
				<img src="../../frontend/web/arguments/dr_sl_img/<?=$pages->img?>" width="100%" style="  display: block;
	  			margin-left: auto;margin-right: auto;border-radius: 20px;">
			  	<p class="mb-5" style="font-size: 15px;"><?=$pages ? $pages_content : ''?></p>
			</div>
		</div>
		<?=include 'right_barnew.php';?>
	</div>
</div>
<style type="text/css">
  body {
    background-color: #f4f4f5;
  }
	.middle {
		background-color: white;
		border-radius: 10px;
		padding: 6%;
		/*box-shadow: 2px 10px 15px #888888;*/
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
		/*margin-left: -20px;*/
		/*margin-right: 40px;*/
		width: 99%;
		margin-bottom: 30px;	
	}
	
	.table_first {
		font-weight: bold;
	}
</style>
