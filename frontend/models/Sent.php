<?php


namespace frontend\models;


use yii\base\Model;

class Sent extends Model
{

    public $name;
    public $email;
    //public $tel;

    public function rules()
    {
        return [
            [['name', 'email'], 'require'],
            ['email', 'email']
        ];

    }
}