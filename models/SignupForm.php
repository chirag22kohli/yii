<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\base\Model;


/**
 * ContactForm is the model behind the contact form.
 */
class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;
        


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'password'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            
            // verifyCode needs to be entered correctly
          
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

   
    public function signup($userData)
    {
        if ($userData) {
           $selectEmail =   Yii::$app->db->createCommand("SELECT * FROM users where email='".$userData['email']."'")->execute();
           if($selectEmail){
            return false;   
           }
            Yii::$app->db->createCommand()->insert('users', $userData)->execute();
            return true;
        }
        return false;
    }
    
    
    
    function getusers(){
        $newuser = users::find()->all();
        return $newuser;

    }
}
