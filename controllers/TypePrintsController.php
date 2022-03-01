<?php

namespace app\controllers;

use app\models\TypePrints;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TypePrintsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update', 'create', 'delete'],
                'rules' => [
                    [
                        'actions' => ['update', 'create', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new TypePrints();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('/admin/');
        } else {
            return $this->render('create', ['model' => $model]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('/admin/');
        } else {
            return $this->render('update', ['model' => $model]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect('/admin/');
    }

    protected function findModel($id)
    {
        if (($model = TypePrints::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Страница не найдена');
        }
    }
}
