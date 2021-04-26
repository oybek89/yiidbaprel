<?php


namespace frontend\models;


use Yii;
use yii\base\Model;

class Person extends Model
{
    public $fName;
    public $lName;
    public $email;
    public $gender;


    public function rules()
    {
        return [

            [['fName', 'lName', 'email', 'gender'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            [['fName', 'lName'], 'string', 'max'=>50] //,
            //['gender', 'in', 'renge'=>['erkak','ayol']]
        ];
    }
    public function seve()
    {
        $formData = Yii::$app->request->post();
        $fName = $formData['fName'];
        $lName = $formData['lName'];
        $email=$formData['email'];
        $gender=$formData['gender'];

        $command= Yii::$app->db->createCommand()->insert('person',
            [
                'fName' => fName,
                'lName' => lName,
                'email' => email,
                'gender'=>gender
            ]
        );
        return $command->execute();
    }


}