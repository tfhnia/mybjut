<?php 
namespace app\controllers;
use yii\web\Controller;

class HelloController extends Controller{

    public function actionIndex()
    {
        public $layout = 'common';
        public function actionIndex(){
            return $this->render('index');
        }
    }
    
}