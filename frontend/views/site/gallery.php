<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
$this->title = Yii::t('app', 'Aloqa')?>;

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

<body>
   <div class="seccion">
    <div class="galeria">
      <ul>
        <li><img src="../../images/saylov.jpg"></li>
      </ul>
   </div>
  </div>
</body>

<style type="text/css">
.seccion {
  width: 60%;
  margin-left: 20%;
}

.galeria {
  margin-top: 40px;
  margin-bottom: 40px;
}

.galeria ul li,  .galeria li img {
  -webkit-transition: all 1s cubic-bezier(.42,.2,.2,.64);
    -moz-transition: all 1s cubic-bezier(.42,.2,.2,.64);
    -o-transition: all 1s cubic-bezier(.42,.2,.2,.64);
    transition: all 1s cubic-bezier(..42,.2,.2,.64);
}

.galeria ul li {
  position: relative;
  float: left;
  width: 140px;
  height: 140px;
  margin: 5px;
  padding: 5px;
  list-style-type: none;
}

.galeria ul li:hover {
  z-index: 99;
}

.galeria ul li img {
  position: absolute;
  left: 0;
  top: 0;
  border: 1px solid #999999;
  padding: 5px;
  width: 140px;
  height: 140px;
  background: #abc4d6;
  filter: grayscale(100%);
  -webkit-filter: grayscale(100%);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  border-radius: 75px;
}

.galeria ul li img:hover {
  width: 280px;
  height: 280px;
  margin-top: -150px;
  margin-left: -150px;
  top: 50%;
  left: 50%;
  filter: grayscale(0%);
  -webkit-filter: grayscale(0%);
  -moz-filter: grayscale(0%);
  -ms-filter: grayscale(0%);
  -o-filter: grayscale(0%);
  border-radius: 40px;
}

#copyright {
  margin-top: 40px;
  margin-right: 20%;
  width: 60%;
  text-align: right;
  float: right;
}
</style>