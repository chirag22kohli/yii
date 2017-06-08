<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\SignupForm;

class UserController extends Controller
{

    
      
   public function actionIndex() { 
        $userdataModal = new SignupForm();
         if ($userdataModal->load(Yii::$app->request->post()) && $userdataModal->signup($userdataModal)){
             
              Yii::$app->session->setFlash('UserSignupSuccessfull');

              return $this->refresh();
              
         
            }
            
            
        
        return $this->render('users', [
            'userdataModal' => $userdataModal,
        ]);
      } 
      
      public function actionGetusers() {
         $userdataModal = new SignupForm();
         $userlist = $userdataModal->getusers();
         
         return $this->render('userList',[
                'userList' => $userlist
         ]);
      }
}
