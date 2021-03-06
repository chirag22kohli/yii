<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

//echo Yii::getVersion();
?>

<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li><?= Html::encode("{$country->name} ({$country->code})") ?><?= $country->population ?></li>
    <?php endforeach; ?>
</ul>

<?php // print_r($pagination);
echo LinkPager::widget(array('pagination', $pagination));
?>