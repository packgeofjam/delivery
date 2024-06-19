<?php
namespace app\controllers;

use app\models\Products;
use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

class AdminController extends Controller
{
    public function actionIndex() {
        if (Yii::$app->user->identity->status == 1) {
            return $this->render('index');
        } else {
            throw new ForbiddenHttpException('У вас нет доступа к этой странице.');
        }
    }
    public function actionCreate()
    {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        if (Yii::$app->user->identity->status == 1) {
            return $this->render('create', [
                'model' => $model,
            ]);
        } else {
            throw new ForbiddenHttpException('У вас нет доступа к этой странице.');
        }
    }

    public function actionDelete($id)
    {
        if (Yii::$app->user->identity->status == 1) {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        } else {
            throw new ForbiddenHttpException('У вас нет доступа к этой странице.');
        }
    }
    public function actionUpdate($id)
    {
        if (Yii::$app->user->identity->status == 1) {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else {
            throw new ForbiddenHttpException('У вас нет доступа к этой странице.');
        }
    }

    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}