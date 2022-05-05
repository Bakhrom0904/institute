<?
	use backend\models\Pages;
	use yii\helpers\Url;
	$news = Pages::find()->Where(['page_menu_sub_id'=>3])->orderBy(['id'=>SORT_DESC])->limit(10)->all();

?>
	
		<div class="col-md-4 col-12 ">
			<div class="container right">
				<nav>
					<ul class="mcd-menu">
						<h3 style="color: black; text-align: center;"><?=Yii::t('app','Tezkor ilovalar')?></h3>
						<li>
							<a href="https://interactive.uzfi.uz/" class="active" target="_blank">
								<i class="fa fa-file"></i>
								<strong><?=Yii::t('app','Interaktiv xizmatlar')?></strong>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<i class="fa fa-briefcase"></i>
								<strong><?=Yii::t('app',"Tyutorlar")?></strong>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fas fa-chalkboard-teacher"></i>
								<strong><?=Yii::t('app',"Markaz va bo'limlar")?></strong>
							</a>
						</li>
						<li>
							<a href="https://mt.uzfi.uz/" target="_blank">
								<i class="fa fa-graduation-cap"></i>
								<strong><?=Yii::t('app',"Masofaviy ta'lim")?></strong>
							</a>
						</li>
						<li>
							<a href="https://interactive.uzfi.uz/acceptance" target="_blank">
								<i class="fas fa-laptop-code"></i>
								<strong><?=Yii::t('app','virtual qabulxona')?></strong>
							</a>
						</li>
						<li>
							<a href="https://library.uzfi.uz/" target="_blank">
								<i class="fas fa-book-reader"></i>
								<strong><?=Yii::t('app','Kutubxona')?></strong>
							</a>
						</li>
						
					</ul>
				</nav>
			</div>
			<div class="container right1" style="margin-top: 30px;">
				<nav>
					<ul class="mcd-menu1">
						<h3 style="color: black; text-align: center;"><?=Yii::t('app',"So'ngi yangiliklar")?></h3>
						<?
              $lang = Yii::$app->language;
							foreach ($news as $news_item) {
                  if ($lang == 'uz') {
                    $news_name = $news_item->name_uz;
                  }elseif ($lang == 'en') {
                    $news_name = $news_item->name_en;
                  }elseif ($lang == 'ru') {
                    $news_name = $news_item->name_ru;
                  }
								?>
									<li>
										<a href="<?=Url::to(['site/pages', 'id'=>$news_item->id])?>" style="min-height: 75px;">
											<i class="fa fa-calendar" style="font-size: 12px;"><?=$news ? $news_item->date : ''?></i><br>
											<strong style="margin-top: -10px; text-transform: none;"><?=yii\helpers\StringHelper::truncate($news ? $news_name : '', 40, '...')?></strong>
										</a>
									</li>
								<?
							}
						?>
						
					</ul>
				</nav>
			</div>
		</div>

<style type="text/css">
.right ul li a{
	display: block;
	list-style-type: none;
	font-size: 30px !important;
	padding: 10px;
	border-radius: 8px;
	transition: all 0.3s ease-in-out;

}
.right {
	background-color: white;
  position: relative;
  display: block;
  /*margin-left: 20px;*/
	border-radius: 10px;
	padding: 5%;
	/*box-shadow: 2px 10px 15px #888888;*/
   box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	width: 99%;
  /*margin-left: 500px;*/
}

.mcd-menu {
  list-style: none;
  padding: 0px !important;
  margin: 0px !important;
  background: #FFF;
  border-radius: 2px;
}
.mcd-menu li {
  position: relative;
  padding-bottom: 10px;
}
.mcd-menu li a {
  display: block;
  text-decoration: none;
  color: #3547ea;
  
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
}
.mcd-menu li a i {
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  
}
.mcd-menu li a {
	width: 100%;

}

.mcd-menu li a strong {
  display: block;
  font-size: 15px;
  /*text-transform: uppercase;*/
}


.mcd-menu li a i, .mcd-menu li a strong {
  position: relative;
  transition: all 300ms linear;
}
.mcd-menu li:hover > a i {
    opacity: 1;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu li:hover a strong {
    opacity: 1;
    animation: moveFromLeft 300ms ease-in-out;
}


.mcd-menu li:hover > a {
  color: #777;
}
.mcd-menu li a:hover {
  position: relative;
  color: #777;
  border:0;
  box-shadow: 0 0 15px #DDD;
  /* == */
  border-left: 4px solid #3f78e0;
  border-right: 4px solid #3f78e0;
  margin: 0 -4px;
  /* == */
}
.mcd-menu li a:hover:before {
  content: "";
  position: absolute;
  
  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #3f78e0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
}

/* == */
.mcd-menu li a:hover:after {
  content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #3f78e0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
}
/* == */

@-webkit-keyframes moveFromTop {
    from {
        opacity: 0;
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveFromLeft {
    from {
        opacity: 0;
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveFromRight {
    from {
        opacity: 0;
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}


.right1 ul li a{
	display: block;
	list-style-type: none;
	font-size: 30px !important;
	padding: 10px;
	border-radius: 8px;
	transition: all 0.3s ease-in-out;

}
.right1 {
	background-color: white;
	border-radius: 10px;
	padding: 20px;
	/*box-shadow: 2px 10px 15px #888888;*/
   box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	width: 99%;
}

.mcd-menu1 {
  list-style: none;
  padding: 0px !important;
  margin: 0px !important;
  background: #FFF;
  border-radius: 2px;
}
.mcd-menu1 li {
  position: relative;
  padding-bottom: 10px;
}
.mcd-menu1 li a {
  display: block;
  text-decoration: none;
  color: #3547ea;
  
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
}
.mcd-menu1 li a i {
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  
}
.mcd-menu1 li a {
	width: 100%;

}

.mcd-menu1 li a strong {
  display: block;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: normal;
}


.mcd-menu1 li a i, .mcd-menu1 li a strong {
  position: relative;
  transition: all 300ms linear;
}
.mcd-menu1 li:hover > a i {
    opacity: 1;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu1 li:hover a strong {
    opacity: 1;
    animation: moveFromLeft 300ms ease-in-out;
}


.mcd-menu1 li:hover > a {
  color: #777;
}
.mcd-menu1 li a:hover {
  position: relative;
  color: #777;
  border:0;
  box-shadow: 0 0 15px #DDD;
  /* == */
  border-left: 4px solid #3f78e0;
  border-right: 4px solid #3f78e0;
  margin: 0 -4px;
  /* == */
}
.mcd-menu1 li a:hover:before {
  content: "";
  position: absolute;
  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #3f78e0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
}

/* == */
.mcd-menu1 li a:hover:after {
  content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #3f78e0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
}
/* == */

@-webkit-keyframes moveTop {
    from {
        opacity: 0;
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveLeft {
    from {
        opacity: 0;
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveRight {
    from {
        opacity: 0;
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        transform: translateX(0%);
    }
}
</style>

