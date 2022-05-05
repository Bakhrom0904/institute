<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;

$this->title = $name;
?>
<div class="site-error">

    

    <div class="heros">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <?
            echo Breadcrumbs::widget([
                'links' => [
                    $this->title,
                ],
            ]); 
          ?>
        </div>
      </div>
    </div>
 </div>
     <p class="mt-5 mb-5">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <p class="text-center mb-5" style="font-size: 20px;"><?= nl2br(Html::encode($message)) ?></p>

        <p class="text-center"><a href="<?=Url::home()?>" class="btn btn-sm btn-primary rounded-pill"><?=Yii::t('app',"Bosh sahifaga qaytish")?></a></p>
    </p>


    

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