<?php
/**
 * Created by PhpStorm.
 * User: luosilent
 * Date: 2018/9/17
 * Time: 10:20
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>