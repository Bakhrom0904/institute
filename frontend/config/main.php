<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'en',
    'modules' => [
        'admn' => [
                'class' => 'mdm\admin\Module',
                'layout' => 'left-menu',                
            ]
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl'=>'',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'i18n'=>[
            'translations'=>[
                'common*'=>[
                    'class'=>'yii\i18n\PhpMessageSource',
                    'basePath'=>'@app/messages',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
           'class'=>'codemix\localeurls\UrlManager',
           'languages'=>['uz', 'ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'suffix'=>'.html',
            'rules' => [
                // '/' => 'site/index',
                'News' => 'site/allpages',
                'news/<id:\w+>'=>'site/allpages',
                'page/<id:\w+>'=>'site/institut',
                'rektorat/<id:\w+>'=>'site/rektorat',
                'kafedralar/<id:\w+>'=>'site/allkafedralar',
                'faculty/<id:\w+>'=>'site/fakultetlar',
                'tutors/<id:\w+>'=>'site/tutor',
                'allschools/<id:\w+>'=>'site/allmaktab',
                'schools/<id:\w+>'=>'site/maktab',
                'schoolsprofile/<id:\w+>'=>'site/maktab_profile',
                'schoolspasspord/<id:\w+>'=>'site/maktab_passpord',
                'schoolsactivities/<id:\w+>'=>'site/maktab_togaraklari',
                'schoolsteachers/<id:\w+>'=>'site/maktab_oqituvchilari',
                'schoolspupils/<id:\w+>'=>'site/maktab_talabalari',
                'commonnews/<id:\w+>'=>'site/pages',
                'profile/<id:\w+>'=>'site/teacher',
                'dbprofile/<id:\w+>'=>'site/dbprofile',
                'tutorprofile/<id:\w+>'=>'site/tutor_profile',
                'tutorinfo/<id:\w+>'=>'site/tutor_info',
                'tutorfunction/<id:\w+>'=>'site/tutor_vazifa',
                'tutorschedule/<id:\w+>'=>'site/tutor_dars_jadvali',
                'tutorofmatched/<id:\w+>'=>'site/tutor_pupils',
                'published/<id:\w+>'=>'site/published',
                'emblems/<id:\d+>'=>'site/emb_pages',
                '<controller:\w+>/<action:\w+>/'=>'<controller>/<action>',
            ],
        ],
        
    ],
    'params' => $params,
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            // 'admn/*',
        ],
        
    ],
];
