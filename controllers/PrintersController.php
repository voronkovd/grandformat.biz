<?php

namespace app\controllers;

use app\models\Printers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class PrintersController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update', 'create'],
                'rules' => [
                    [
                        'actions' => ['update', 'create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }


    public function actionCreate()
    {
        $model = new Printers();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $image = UploadedFile::getInstance($model, 'image');
            $document = UploadedFile::getInstance($model, 'document');
            $desc = UploadedFile::getInstance($model, 'desc');
            if ($image) {
                $name_image = Yii::$app->security->generateRandomString() . ".{$image->extension}";
                $model->image = $name_image;
                $image->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name_image);
            }
            if ($document) {
                $name_document = Yii::$app->security->generateRandomString() . ".{$document->extension}";
                $model->document = $name_document;
                $image->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name_document);
            }
            if ($desc) {
                $name_desc = Yii::$app->security->generateRandomString() . ".{$document->extension}";
                $model->desc = $name_desc;
                $desc->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name_desc);
            }
            if ($model->save()) {
                return $this->redirect('/admin/');
            }
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $image = UploadedFile::getInstance($model, 'image');
            if ($image) {
                $name_image = Yii::$app->security->generateRandomString() . ".{$image->extension}";
                $model->image = $name_image;
                $image->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name_image);
            } else{
                $model->image = $model->old_image;
            }
            $document = UploadedFile::getInstance($model, 'document');
            if ($document) {
                $name_document = Yii::$app->security->generateRandomString() . ".{$document->extension}";
                $model->document = $name_document;
                $document->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name_document);
            } else {
                $model->document = $model->old_document;
            }
            $desc = UploadedFile::getInstance($model, 'desc');
            if ($desc) {
                $name_desc = Yii::$app->security->generateRandomString() . ".{$document->extension}";
                $model->desc = $name_desc;
                $desc->saveAs(Yii::getAlias('@webroot') . '/uploads/' . $name_desc);
            } else {
                $model->desc = $model->old_desc;
            }
            if ($model->save()) {
                return $this->redirect('/admin/');
            }
        }
        return $this->render('update', ['model' => $model]);
    }

    protected function findModel($id)
    {
        if (($model = Printers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Страница не найдена');
        }
    }
}
