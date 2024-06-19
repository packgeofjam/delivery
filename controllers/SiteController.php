<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\ContactForm;
use app\models\Products;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $data = Products::find()->asArray()->all();
        return $this->render('index', compact('data'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

//    public function actionOrder()
//    {
//        $session = Yii::$app->session;
//        $session->open();
//
//        if($session->has('productsSession')) {
//            $productsSession = $session->get('productsSession');
//        }
//        else {
//            $productsSession = array();
//        }
//
//        if (isset($_GET['id']) && !empty($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
//
//            $productsArray = Products::find()->where(['id' => $_GET['id']])->asArray()->one();
//            if (is_array($productsArray) && count($productsArray) > 0) {
//                $flag = false;
//                for($i =0; $i < count($productsSession); $i++) {
//                    if($productsSession[$i]['id'] == $_GET['id']) {
//                        $flag = true;
//                        $productsSession[$i]['count']++;
//                    }
//                    break;
//                }
//                if(!$flag) {
//                    array_push($productsArray, ['id' => $_GET['id'], 'count' => 1]);
//                }
//            }
//        }
//
//        $session->set('productsSession', $productsArray);
//        $productsSession = $session->get('productsSession');
//
//        $arrayID = array();
//        if (is_array($productsSession)) { foreach ($productsSession as $value) {
//            if (is_array($value) && isset($value['id'])) {
//                array_push($arrayID, $value['id']);
//            }
//        } }
//        $products = Products::find()->where(['id' => $arrayID])->asArray()->All();
//
//        return $this->render('order', compact('products'));
//    }
}


