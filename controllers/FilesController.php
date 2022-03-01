<?php

namespace app\controllers;

use app\models\Files;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class FilesController extends Controller
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
        if (($model = Files::findOne($id)) !== null) {
        } else {
            throw new NotFoundHttpException('Страница не найдена');
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $value = UploadedFile::getInstance($model, 'value');
            if ($value) {
                $name = Yii::$app->security->generateRandomString() . ".{$value->extension}";
                $model->value = $name;
                if ($model->save()) {
                    $value->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name);
                    return $this->redirect('/admin/');
                }
            }
        }
        return $this->render('update', ['model' => $model]);

    }

}
