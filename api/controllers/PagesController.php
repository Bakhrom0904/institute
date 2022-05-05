<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\Pages;
use yii\data\ActiveDataProvider;

class PagesController extends ActiveController
{
    public $modelClass = 'backend\models\Pages';

    public function actions()
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;
    }

    public function actionIndex()
    {

    	$dataProvider = new ActiveDataProvider([
    		'query'=>Pages::find(),
    		'pagination'=>[
    			'pageSize' =>6
    		]
    	]);
        header('Content-type: application/json', true, 200);
        // echo json_encode([
        //     'data'=> $dataProvider->getData()
        // ]);
    	return $dataProvider;
    }
}


