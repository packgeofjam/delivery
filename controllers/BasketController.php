<?php
namespace app\controllers;

use app\models\Basket;
use Yii;
use yii\web\Controller;

class BasketController extends Controller
{
    public function actionIndex()
    {
        $basket = (new Basket())->getBasket();
        return $this->render('index', ['basket' => $basket]);
    }

    public function actionAdd()
    {
        $basket = new Basket();

        if (!Yii::$app->request->isPost) {
            return $this->redirect(['basket/index']);
        }

        $data = Yii::$app->request->post();
        if (!isset($data['id'])) {
            return $this->redirect(['basket/index']);
        }
        if (!isset($data['count'])) {
            $data['count'] = 1;
        }

        $basket->addToBasket($data['id'], $data['count']);

        return $this->redirect(['/..#catalog']);
    }
    public function actionPlus()
    {
        $basket = (new Basket())->getBasket();

        if (!Yii::$app->request->isPost) {
            return $this->redirect(['basket/index']);
        }

        $data = Yii::$app->request->post();
        if (!isset($data['id'])) {
            return $this->redirect(['basket/index']);
        }
        $basket['products'][$data['id']]['count'] = +1;
        return $this->redirect(['/basket']);
    }
    public function actionRemove($id) {
        $id = Yii::$app->request->post();
        $basket = new Basket();
        $basket->removeFromBasket($id);
        return $this->redirect(['basket/index']);
    }
    public function actionClear()
    {
        $basket = new Basket();
        $basket->clearBasket();

        return $this->redirect(['/basket']);
    }
}
?>