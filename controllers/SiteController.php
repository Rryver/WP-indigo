<?php

namespace app\controllers;

use app\models\Post;
use app\models\SignupForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
        return $this->render('index');
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
        } else {
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
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
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
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

    public function actionBlog()
    {
        $modelUser = new User();

        return $this->render('blog', [
            'modelUser' => $modelUser,
        ]);
    }

    public function actionPost($id = null)
    {
        if ($id !== null) {
            $post = Post::getPostById($id);
            return $this->render('post', [
                'post' => $post,
            ]);
        }

        return $this->goHome();
    }


    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) { $this->redirect('/'); }

        $post = new Post();

        if ($post->load(Yii::$app->request->post()) && $post->save()) {
//            return $this->render('post', [
//                'post' => $post,
//            ]);
        }

        $post->title = $_POST['Post']['title'];
        isset($_POST['text']) ? $post->text = $_POST['text'] : $post->text = '';

        if ($post->save()) {
            return $this->render('post', [
                'post' => $post,
            ]);
        }

        return $this->render('post-edit', [
            'post' => $post,
        ]);
    }

    public function actionEdit($id = null)
    {
        if (Yii::$app->user->isGuest) { return $this->redirect('/'); }

        $post = Post::getPostById($id);
        if ($post == null) { $this->redirect('/'); }

        // if save changes
        if ($post->load(Yii::$app->request->post()) && $post->save()) {

            return $this->render('post-editor', [
                'post' => $post,
            ]);
        }

        //if create new post
        $post = new Post();
        return $this->render('post-edit', [
            'post' => $post,
        ]);
    }
}
