<?php

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Email;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserIdentity;
use app\models\User;
use app\models\Config;

class EmailController extends \yii\web\Controller
{

     public function behaviors()
    {
        return  [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [ 'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
        ];
    }

    public function actionIndex()
    {
        $query = Email::find();
        $config = Config::findOne(14);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5
            ],
        ]);
        
        if ($config->load(Yii::$app->request->post()) and $config->save()){
            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'config' => $config
            ]);
        }       
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'config' => $config
        ]);
        
    }

}
