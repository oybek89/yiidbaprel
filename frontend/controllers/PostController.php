<?php


namespace frontend\controllers;


use Yii;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $command = Yii::$app->db->createCommand("select * from person");
        $data = $command->queryAll();
        return $this->render('index', ['data'=>$data]);

    }


}