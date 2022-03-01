<?php

namespace app\controllers;

use app\models\ChangePasswordForm;
use app\models\Contacts;
use app\models\Contents;
use app\models\Files;
use app\models\PostPrints;
use app\models\Printers;
use app\models\Requisites;
use app\models\Scripts;
use app\models\SeoSettings;
use app\models\SocialNetwork;
use app\models\SourcePrints;
use app\models\TypePrints;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'changePassword'],
                'rules' => [
                    [
                        'actions' => ['index', 'changePassword'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $contacts = new ActiveDataProvider(['query' => Contacts::find(), 'sort' => false]);
        $contents = new ActiveDataProvider(['query' => Contents::find(), 'sort' => false]);
        $files = new ActiveDataProvider(['query' => Files::find(), 'sort' => false]);
        $postPrints = new ActiveDataProvider(['query' => PostPrints::find(), 'sort' => false]);
        $printers = new ActiveDataProvider(['query' => Printers::find(), 'sort' => false]);
        $requisites = new ActiveDataProvider(['query' => Requisites::find(), 'sort' => false]);
        $scripts = new ActiveDataProvider(['query' => Scripts::find(), 'sort' => false]);
        $seoSettings = new ActiveDataProvider(['query' => SeoSettings::find(), 'sort' => false]);
        $socialNetworks = new ActiveDataProvider(['query' => SocialNetwork::find(), 'sort' => false]);
        $sourcePrints = new ActiveDataProvider(['query' => SourcePrints::find(), 'sort' => false,
            'pagination' => ['pageSize' => 100]]);
        $typePrints = new ActiveDataProvider(['query' => TypePrints::find(), 'sort' => false]);

        return $this->render('index',
            [
                'contacts' => $contacts,
                'contents' => $contents,
                'files' => $files,
                'postPrints' => $postPrints,
                'printers' => $printers,
                'requisites' => $requisites,
                'scripts' => $scripts,
                'seoSettings' => $seoSettings,
                'socialNetworks' => $socialNetworks,
                'sourcePrints' => $sourcePrints,
                'typePrints' => $typePrints

            ]);
    }

    public function actionChangePassword()
    {
        $model = new ChangePasswordForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->savePassword();
                return $this->redirect('/admin/');
            }
        }
        return $this->render('change_password', ['model' => $model]);
    }
}