<?php

namespace app\controllers;

use app\models\BackCallForm;
use app\models\ContactForm;
use app\models\Contacts;
use app\models\Contents;
use app\models\Files;
use app\models\LoginForm;
use app\models\Printers;
use app\models\PostPrints;
use app\models\Requisites;
use app\models\Scripts;
use app\models\SeoSettings;
use app\models\SocialNetwork;
use app\models\SourcePrints;
use app\models\TypePrints;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'foreColor'=>0xF24841,
                'backColor'=>0xecedf1,
                'fontFile'=>'@webroot/fonts/HeliosC/HeliosC.ttf',
                'minLength'=>3,
                'maxLength'=>3,
                'height'=>25,
                'width'=>70,
                'padding'=>0
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'public';
        $contactForm = new ContactForm();
        $backCall = new BackCallForm();
        $contacts = Contacts::find()->all();
        $email = str_replace('E-​mail: ', '', $contacts[3]->content);
        if ($contactForm->load(Yii::$app->request->post()) && $contactForm->contact($email)) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->redirect('/#select_source');
        }
        if ($backCall->load(Yii::$app->request->post()) && $backCall->contact($email)) {
            Yii::$app->session->setFlash('backCallFormSubmitted');
            return $this->redirect('/#select_source');
        }
        return $this->render('index',
            [
                'backCall'=>$backCall,
                'contacts' => $contacts,
                'contactForm' => $contactForm,
                'contents' => Contents::find()->all(),
                'files' => Files::find()->all(),
                'printers' => Printers::find()->all(),
                'postPrints' => PostPrints::find()->all(),
                'requisites' => Requisites::find()->all(),
                'scripts' => Scripts::find()->all(),
                'seoSettings' => SeoSettings::find()->all(),
                'socialNetworks' => SocialNetwork::find()->all(),
                'sourcePrints' => SourcePrints::find()->all(),
                'typePrints' => TypePrints::find()->orderBy('name ASC')->all()

            ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionLists($id)
    {
        $count = SourcePrints::find()->where(['type_print_id' => $id])->count();
        $sources = SourcePrints::find()->where(['type_print_id' => $id])->orderBy('id ASC')->all();
        $str = "<option></option>";
        if ($count > 0) {
            foreach ($sources as $source) {
                $str .= "<option data-price='" . $source->price . "' data-price-two='" . number_format($source->price_two, 2) . "' value='" . $source->id . "'>" . ucwords($source->name) . "</option>";
            }
        }
        echo $str;
    }
}
