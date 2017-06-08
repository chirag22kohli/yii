<?php

namespace app\controllers;

//use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

//use yii\filters\AccessControl;
//use yii\filters\VerbFilter;
//use app\models\LoginForm;
//use app\models\ContactForm;
//use app\models\User;

class CountryController extends Controller {

    public function actionIndex() {
        $query = Country::find();

        $pagination = new Pagination(array('defaultPageSize' => '2', 'totalCount' => $query->count()));

        $countries = $query->orderBy('name')->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('index', array('countries' => $countries, 'pagination' => $pagination));
    }

}

?>