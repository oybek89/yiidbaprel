<?php


namespace frontend\controllers;


use frontend\models\Person;
use Yii;
use yii\web\Controller;
use yii\web\Request;


class PersonController extends Controller
{
    public function actionAdd()
    {


       // $this->render('add');
       // $model = new Person();

        //if(Yii::$app->request->isPost) {
          //  if ($model->validate() && $model->seve())
            //    Yii::$app->session->setFlash("success", "Bazaga yozildi");



        //}
        return $this->render('add');
    }


}

