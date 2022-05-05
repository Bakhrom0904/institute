<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use backend\models\Slider;
use backend\models\DirektorSlider;
use backend\models\TezHavola;
use backend\models\TezkorHavolalar;
use backend\models\Teacher;
use backend\models\Pages;
use backend\models\Menu;
use backend\models\MenuSub;
use backend\models\MenuTitle;
use backend\models\Fakultet;
use backend\models\Institut;
use backend\models\FakultetStaff;
use yii\data\Pagination;
use backend\models\Rektorat;
use backend\models\Books;
use backend\models\Articles;
use backend\models\EmbPages;
use backend\models\Allmaktab;
use backend\models\Maktab;
use backend\models\Supporters;
use backend\models\CommonKafedra;
use backend\models\Kafedralar;
use backend\models\KafedraOqituvchilari;
use backend\models\KafedraArticles;
use backend\models\KafedraBooks;
use backend\models\TutorInfo;
use backend\models\MaktablarInfo;
use backend\models\VideoGallery;
use backend\models\TutorFaculty;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $video_gallery = VideoGallery::find()->orderBy(['id'=>SORT_DESC])->all();
        $news = Pages::find()->Where(['page_menu_sub_id'=>3])->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        $event = Pages::find()->Where(['page_menu_sub_id'=>4])->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        $slider = Slider::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        $dr_slider_img = DirektorSlider::find()->all();
        $tezkor_havolalar = TezkorHavolalar::find()->Where(['tez_men__sub_id'=>[13, 14, 15, 16, 17, 18]])->orderBy(['id'=>SORT_DESC])->limit(9)->all();
        $supporters = Supporters::find()->orderBy(['id'=>SORT_DESC])->limit(8)->all();
        return $this->render('index',[
            'slider'=>$slider,
            'dr_slider_img'=>$dr_slider_img,
            'tezkor_havolalar'=> $tezkor_havolalar,
            'news' => $news,
            'event' => $event,
            'supporters' => $supporters,
            'video_gallery'=>$video_gallery,
        ]);
    }
     public function actionAloqa()
    {
        return $this->render('aloqa');
    }
    public function actionGallery()
    {
        return $this->render('gallery');
    }
     public function actionAllkafedralar($id)
    {
      $kafedralar = Kafedralar::find()->Where(['kafedra_menu_sub_id'=>$id])->All();
      $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
      // $com_kafedra = CommonKafedra::find()->Where(['kafedra_id'=>$id])->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        return $this->render('allkafedralar', [
          'menu_sub'=>$menu_sub,
          // 'com_kafedra'=>$com_kafedra,
          'kafedralar'=>$kafedralar,
        ]);
    }
     public function actionComma_kafedra($id)
    {
      $kafedralar = Kafedralar::find()->Where(['id'=>$id])->All();
      $com_kafedra = CommonKafedra::find()->Where(['kafedra_id'=>$id])->all();
      $kafedra_oqituvchilari = KafedraOqituvchilari::find()->Where(['comm_kafedra_id'=>$id])->all();
        return $this->render('comma_kafedra', [
          // 'menu_sub'=>$menu_sub,
          'com_kafedra'=>$com_kafedra,
          'kafedra_oqituvchilari'=>$kafedra_oqituvchilari,
          'kafedralar'=>$kafedralar,
        ]);
    }
     public function actionTutor($id)
    {
      $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
      $tutor_info = TutorInfo::find()->Where(['tutor_menu_sub_id'=>$id])->orderBy(['id'=>SORT_DESC])->all();
      $tutor_info_faculty1 = TutorInfo::find()->Where(['tutor_faculty_id'=>1])->orderBy(['id'=>SORT_DESC])->all();
      $tutor_info_faculty2 = TutorInfo::find()->Where(['tutor_faculty_id'=>2])->orderBy(['id'=>SORT_DESC])->all();
      $tutor_info_faculty3 = TutorInfo::find()->Where(['tutor_faculty_id'=>3])->orderBy(['id'=>SORT_DESC])->all();
      $tutor_info_faculty4 = TutorInfo::find()->Where(['tutor_faculty_id'=>4])->orderBy(['id'=>SORT_DESC])->all();
      $tutor_info_faculty5 = TutorInfo::find()->Where(['tutor_faculty_id'=>5])->orderBy(['id'=>SORT_DESC])->all();
      // $tutor_info_number = new Pagination(['totalCount'=>$query->count(), 'pageSize'=>20, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
      // $tutor_info = $query->offset($tutor_info_number->offset)->limit($tutor_info_number->limit)->all();
        return $this->render('tutor', [
          'tutor_info'=>$tutor_info,
          // 'tutor_info_number'=>$tutor_info_number,
          'tutor_info_faculty1'=>$tutor_info_faculty1,
          'tutor_info_faculty2'=>$tutor_info_faculty2,
          'tutor_info_faculty3'=>$tutor_info_faculty3,
          'tutor_info_faculty4'=>$tutor_info_faculty4,
          'tutor_info_faculty5'=>$tutor_info_faculty5,
          'menu_sub'=>$menu_sub,
        ]);
    }
     public function actionTutor_profile($id)
    {
      $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
      $tutor_info = TutorInfo::find()->Where(['id'=>$id])->all();
        return $this->render('tutor_profile', [
          'tutor_info'=>$tutor_info,
          'menu_sub'=>$menu_sub,
        ]);
    }
     public function actionTutor_vazifa($id)
    {
      $tutor_info = TutorInfo::find()->Where(['id'=>$id])->all();
        return $this->render('tutor_vazifa', [
          'tutor_info'=>$tutor_info,
        ]);
    }
     public function actionTutor_info($id)
    {
      $tutor_info = TutorInfo::find()->Where(['id'=>$id])->all();
        return $this->render('tutor_info', [
          'tutor_info'=>$tutor_info,
        ]);
    }
      public function actionTutor_pupils($id)
    {
      $tutor_info = TutorInfo::find()->Where(['id'=>$id])->all();
        return $this->render('tutor_pupils', [
          'tutor_info'=>$tutor_info,
        ]);
    }
     public function actionTutor_dars_jadvali($id)
    {
      $tutor_info = TutorInfo::find()->Where(['id'=>$id])->all();
        return $this->render('tutor_dars_jadvali', [
          'tutor_info'=>$tutor_info,
        ]);
    }
     public function actionKafedra($id)
    {
      $kafedralar = Kafedralar::find()->Where(['id'=>$id])->All();
      $com_kafedra = CommonKafedra::find()->Where(['kafedra_id'=>$id])->all();
      $kafedra_oqituvchilari = KafedraOqituvchilari::find()->Where(['id'=>$id])->all();
        return $this->render('kafedra', [
          // 'menu_sub'=>$menu_sub,
          'com_kafedra'=>$com_kafedra,
          'kafedra_oqituvchilari'=>$kafedra_oqituvchilari,
          'kafedralar'=>$kafedralar,
        ]);
    }
     public function actionKafedra_info($id)
    {
      $kafedralar = Kafedralar::find()->Where(['id'=>$id])->All();
      $com_kafedra = CommonKafedra::find()->Where(['kafedra_id'=>$id])->all();
      $kafedra_oqituvchilari = KafedraOqituvchilari::find()->Where(['id'=>$id])->all();
        return $this->render('kafedra_info', [
          // 'menu_sub'=>$menu_sub,
          'com_kafedra'=>$com_kafedra,
          'kafedra_oqituvchilari'=>$kafedra_oqituvchilari,
          'kafedralar'=>$kafedralar,
        ]);
    }
      public function actionKafedra_book($id)
    {
      $kafedralar = Kafedralar::find()->Where(['id'=>$id])->All();
      $com_kafedra = CommonKafedra::find()->Where(['kafedra_id'=>$id])->all();
      $kafedra_oqituvchilari = KafedraOqituvchilari::find()->Where(['id'=>$id])->all();
      $books = KafedraBooks::find()->Where(['book_kafedra_oqituvchilari_id'=>$id])->all();
      $articles = KafedraArticles::find()->Where(['art_kafedra_oqituvchilari_id'=>$id])->all();
        return $this->render('kafedra_book', [
          // 'menu_sub'=>$menu_sub,
          'com_kafedra'=>$com_kafedra,
          'kafedra_oqituvchilari'=>$kafedra_oqituvchilari,
          'kafedralar'=>$kafedralar,
          'books'=>$books,
          'articles'=>$articles,
        ]);
    }
     public function actionDbprofile($id)
    {
      $fakultet_staff = FakultetStaff::find()->Where(['id'=>$id])->all();
       $teacherinfo = Teacher::find()->Where(['staff_id'=>$id])->all();
        return $this->render('dbprofile',[
          'teacherinfo'=>$teacherinfo,  
          'fakultet_staff'=>$fakultet_staff,
        ]);
    }
    public function actionPublished($id)
    {
      $fakultet_staff = FakultetStaff::find()->Where(['id'=>$id])->all();
       $teacherinfo = Teacher::find()->Where(['staff_id'=>$id])->all();
       $books = Books::find()->Where(['book_fak_staff_id'=>$id])->all();
       $articles = Articles::find()->Where(['art_fak_staf_id'=>$id])->all();
        return $this->render('published', [
          'teacherinfo'=>$teacherinfo,
          'books'=>$books,
          'articles'=>$articles,
          'fakultet_staff'=>$fakultet_staff,
        ]);
    }
    public function actionFakultetlar($id)
    {
        $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
        $fakultet = Fakultet::find()->Where(['menu_sub_id'=>$id])->all();
        $fakultet_staff = FakultetStaff::find()->Where(['staff_menu_sub_id'=>$id])->all();
        return $this->render('fakultetlar',[
            'menu_sub'=>$menu_sub,
            'fakultet' => $fakultet,
            'fakultet_staff'=> $fakultet_staff,
        ]);
    }
      public function actionInstitut($id)
    {
        $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
        $institut = Institut::find()->Where(['ins_menu_sub_id'=>$id])->all();
        return $this->render('institut',[
            'menu_sub'=>$menu_sub,
            'institut' => $institut,
        ]);
    }
     public function actionAllmaktab($id)
    {
        $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
        $maktablar_info = MaktablarInfo::find()->Where(['maktab_info_menu_sub_id'=>$id])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('allmaktab',[
           'menu_sub'=>$menu_sub,
           'maktablar_info'=>$maktablar_info,
        ]);
    }
    public function actionMaktab($id)
    {
      $maktab = MaktablarInfo::find()->Where(['id'=>$id])->all();
        return $this->render('maktab',[
           'maktab'=>$maktab,
        ]);
    }
     public function actionMaktab_profile($id)
    {
      $maktab = MaktablarInfo::find()->Where(['id'=>$id])->all();
        return $this->render('maktab_profile',[
           'maktab'=>$maktab,
        ]);
    }
    public function actionMaktab_passpord($id)
    {
      $maktab = MaktablarInfo::find()->Where(['id'=>$id])->all();
        return $this->render('maktab_passpord',[
           'maktab'=>$maktab,
        ]);
    }
    public function actionMaktab_togaraklari($id)
    {
      $maktab = MaktablarInfo::find()->Where(['id'=>$id])->all();
        return $this->render('maktab_togaraklari',[
           'maktab'=>$maktab,
        ]);
    }
    public function actionMaktab_oqituvchilari($id)
    {
      $maktab = MaktablarInfo::find()->Where(['id'=>$id])->all();
        return $this->render('maktab_oqituvchilari',[
           'maktab'=>$maktab,
        ]);
    }
    public function actionMaktab_talabalari($id)
    {
      $maktab = MaktablarInfo::find()->Where(['id'=>$id])->all();
        return $this->render('maktab_talabalari',[
           'maktab'=>$maktab,
        ]);
    }
    

    public function actionEmb_pages($id)
    {
        $emblems = EmbPages::find()->Where(['emb_id'=>$id])->all();
        return $this->render('emb_pages',[
          'emblems'=>$emblems,
        ]);
    }
     public function actionAllpages($id)
    {

        $query = Pages::find()->Where(['page_menu_sub_id'=>$id])->orderBy(['id'=>SORT_DESC]);
        $pages = new Pagination(['totalCount'=>$query->count(), 'pageSize'=>6, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
         $news = $query->offset($pages->offset)->limit($pages->limit)->all();


        $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
        // $news = Pages::find()->Where(['page_menu_sub_id'=>$id])->orderBy(['id'=>SORT_DESC])->all();
        // $event = Pages::find()->Where(['type'=>2])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('allpages', [
            'news'=>$news,
            'menu_sub'=>$menu_sub,
            'pages'=>$pages,
        ]);
        
    }

     public function actionSearch() 
    {
      // $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
        $search = trim(Yii::$app->request->get('search'));
        $searchtype = Pages::find()->all();
      if ($search == null) {
         Yii::$app->session->setFlash('error', "Qidiriladigan so'zni kiriting");
      }elseif (!$search) {
         return $this->render('search');
      }
      $query = Pages::find()->Where(['like', 'name_uz', $search])->orWhere(['like', 'name_ru', $search])->orWhere(['like', 'name_en', $search]);
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>8, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
      $model = $query->offset($pages->offset)->limit($pages->limit)->all();
      return $this->render('search', compact('model', 'pages', 'search', 'searchtype'));

    }

     public function actionRektorat($id)
    {
        $menu_sub = MenuSub::find()->Where(['id'=>$id])->all();
        $rektorat = Rektorat::find()->Where(['rek_menu_sub_id'=>$id])->all();
        $fakultet_staff = FakultetStaff::find()->Where(['staff_menu_sub_id'=>$id])->all();
        return $this->render('rektorat',[
          'menu_sub'=>$menu_sub,
          'rektorat'=>$rektorat,
          'fakultet_staff'=>$fakultet_staff,
        ]);
        
    }
     public function actionPages($id)
    {
        $id = Yii::$app->request->get('id');
        $pages = Pages::findOne($id);
        $pages->updateCounters(array('views'=>1));
        // $pages = Pages::find()->Where(['id' => $id])->all();
        return $this->render('pages', [
            'pages' => $pages,
        ]);
        
    }
     public function actionTeacher($id)
    {
        $fakultet_staff = FakultetStaff::find()->Where(['id'=>$id])->all();
         // $rektorat = Rektorat::find()->Where(['id'=>$id])->all();
        $teacherinfo = Teacher::find()->Where(['staff_id'=>$id])->all();
        return $this->render('teacher',[
            'teacherinfo'=>$teacherinfo,
            'fakultet_staff'=>$fakultet_staff,
        ]);
    }
    // public function actionTchprofile($id)
    // {
    //     $teacherinfo = Teacher::find()->Where(['staff_id'=>$id])->all();
    //     return $this->render('tchprofile',[
    //         'teacherinfo'=>$teacherinfo,
    //     ]);
        
    // }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
