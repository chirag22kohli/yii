<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author millipixels033
 */
class Users extends  ActiveRecord{
     public static function tableName()
    {
        return 'users';
    }
}
