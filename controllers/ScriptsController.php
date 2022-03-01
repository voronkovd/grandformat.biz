<?php

namespace app\controllers;

use app\models\Scripts;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class ScriptsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update'],
                'rules' => [
                    [
                        'actions' => ['update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionUpdate($id)
    {
        if (($model = Scripts::findOne($id)) !== null) {
        } else {
            throw new NotFoundHttpException('Страница не найдена');
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('/admin/');
        } else {
            return $this->render('update', ['model' => $model]);
        }
    }
}
