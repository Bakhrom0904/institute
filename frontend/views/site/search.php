<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$lang = Yii::$app->language;


?>
<style type="text/css">
  .head-text {
    background: rgba(204, 204, 204, 0.5);
    margin-bottom: 20px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  } 
  .head-text h1{
    margin: 30px 0px 30px 20px;
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
.card-body a{
  color: black;
}
.card-body a:hover{
  cursor: pointer;
  text-decoration: none;
}
</style>

<section id="more-services" class="more-services mb-5">
    <?
      $lang = Yii::$app->language;
        foreach ($model as $model) {
           if ($lang == 'uz') {
            $cmnew = $model->name_uz;
          }elseif ($lang == 'en') {
            $cmnew = $model->name_en;
          }elseif ($lang == 'ru') {
            $cmnew = $model->name_ru;
          }
            ?>
                <div class="col-md-4 d-flex align-items-stretch mb-5">
                    <a href=""><?=$cmnew?></a>
                </div>
            <?
        }
    ?>
</section>