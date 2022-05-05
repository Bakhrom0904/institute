<!--  <?
use yii\helpers\Url;
foreach ($teacherinfo as $teacherinfo_item) {
  # code...
}

 ?>

<section class="orqarasm">
    <img src="../../images/pro-bg.jpg" width="100%;">
        <div class="pro-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                         <ul>
                             <li><a href="<?=Url::to(['site/teacher', 'id'=>$teacherinfo_item->staff_id])?>" class="pro-act">Dashboard</a></li>
                            <li><a href="<?=Url::to(['site/dbprofile', 'id'=>$teacherinfo_item->staff_id])?>">Profile</a></li>
                            <li><a href="<?=Url::to(['site/tchprofile', 'id'=>$teacherinfo_item->staff_id])?>">Galeriya</a></li>
                            <li><a href="<?=Url::to(['site/published', 'id'=>$teacherinfo_item->staff_id])?>">Kitoblar</a></li>
                        </ul> 
                    </div>
                </div>
               
            </div>
        </div>
            
</section>
<div class="container ortafon">
    <div class="row">
        <div class="col-md-3 col-12">
            <div class="left_bar_tea">
              <img src="../<?=$teacherinfo_item->img?>" class="img_teacher">
              <h3 class="mt-3" style="text-align: center;"><?=$teacherinfo_item ? $teacherinfo_item->name_uz : ''?></h3>
              <p style="text-align: center;"><?=$teacherinfo_item ? $teacherinfo_item->lavozim_uz : ''?>, <br><?=$teacherinfo_item ? $teacherinfo_item->rank_uz : ''?></p>
              <hr style="margin: 0px; margin-bottom: 20px;">
              <p><i class="fa fa-telegram"></i><?=$teacherinfo_item ? $teacherinfo_item->telegram : ''?></p>
              <p><i class="fa fa-facebook"></i> <?=$teacherinfo_item ? $teacherinfo_item->facebook : ''?></p>
              <p><i class="fa fa-instagram"></i><?=$teacherinfo_item ? $teacherinfo_item->instagram : ''?></p>
            </div>
        </div>
        <div class="col-md-9 col-12">
           <div class="middle_bar_tea">
             <h4 style="color: black;"><img src="../../images/icon/gallery.ico" alt="" /> Gallery</h4>
             <hr style="margin: 0px; margin-bottom: 20px;">
              <div class="items">
                <div class="item active">
                  <img src="../../images/placeholder.jpg" data-action="zoom">
                </div>
                <div class=" item next">
                  <img src="../../images/sharof.jpg" data-action="zoom">
                </div>
                <div class="item">
                  <img src="../../images/bg-1.jpg" data-action="zoom">
                </div>
                <div class="item">
                  <img src="../../images/4.jpg" data-action="zoom">
                </div>
                <div class="item prev">
                  <img src="../../images/saylov.jpg" data-action="zoom">
                </div>
                <div class="button-container">
                  <div class="button"><i class="fas fa-angle-left"></i></div>
                  <div class="button"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
           </div>
        </div>
    </div>
        </div>
    </div>
</div>
<style type="text/css">
  .items {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  user-select: none;
}

.items .item {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 250px;
  height: 250px;
  border-radius: 50%;
  overflow: hidden;
  transition: all 300ms ease-in-out;
  z-index: -1;
  opacity: 0;
}

.item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.item.active {
  opacity: 1;
  z-index: 99;
  box-shadow: 0px 0px 105px -35px rgba(0, 0, 0, 0.75);
}

.item.prev {
  z-index: 2;
  opacity: 0.25;
  transform: translate(-125%, -50%);
}

.item.next {
  z-index: 2;
  opacity: 0.25;
  transform: translate(25%, -50%);
}

.items .button-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 275px;
  z-index: 100;
}

.button-container .button {
  color: #fff;
  font-size: 32px;
  cursor: pointer;
  position: relative;
  opacity: 0.75;
  transition: all 300ms ease-in-out;
}

.button-container .button:hover {
  opacity: 1;
}

.button-container .button:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 50px;
  height: 50px;
  background-color: rgba(0, 0, 0, 1);
  border-radius: 50%;
  z-index: -99;
}

.button-container .button:nth-child(1) {
  float: left;
}

.button-container .button:nth-child(2) {
  float: right;
}
</style>

<style type="text/css">
    .left_bar_tea p i {
        margin-right: 20px;
        font-size: 20px;

    } 
     .left_bar_tea p {
        padding: 0px 20px;
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
        margin-left: 30px;
        width: 250px;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        margin-bottom: 80px;
        min-height: 96% !important; 
    }
    .middle_bar_tea {
        position: relative;
        width: 750px;
        padding: 20px;
        background-color: #fff;
        transform-style: preserve-3d;
        box-shadow: 0px 5px 18px -11px rgba(150, 150, 150, 0.8);
        border: 1px solid #F3F2F2;
        margin-left: 50px;
        margin-top: 50px;
        margin-bottom: 50px;
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
        margin-bottom: 40px;
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
     margin-left: 25px;
}
 .pro-menu ul li{
     display: inline-block;
}
 .pro-act{
     background: #225fd0;
     color: #fff !important;
}
 .pro-menu ul li a{
     padding: 17px 14px;
     line-height: 53px;
     color: #fff;
     font-weight: 500;
     border-right: 1px solid #405d7d;
}
 .pro-menu ul li a:hover{
     background: #225fd0;
     color: #fff;
}
</style>


 
  <script type="text/javascript">
    // IMPROVED JAVASCRIPT & ADDED A FEW CHANGES

const slider = document.querySelector(".items");
const slides = document.querySelectorAll(".item");
const button = document.querySelectorAll(".button");

let current = Math.floor(Math.random()*slides.length);
let prev = current > 0 ? current - 1 : slides.length - 1;
let next = current < slides.length - 1 ? current + 1 : 0;

const update = () => {
  slides.forEach(it => {
    it.classList.remove("active");
    it.classList.remove("prev");
    it.classList.remove("next");
  });
  
  slides[current].classList.add("active");
  slides[prev].classList.add("prev");
  slides[next].classList.add("next");
}

for (let i = 0; i < button.length; i++) {
    button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
}

const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);
const gotoNext = () => current < slides.length - 1 ? gotoNum(current + 1) : gotoNum(0);

const gotoNum = number => {
  current = number;
  prev = current > 0 ? current - 1 : slides.length - 1;
  next = current < slides.length - 1 ? current + 1 : 0;
  
  update();
}

update();
  </script> -->