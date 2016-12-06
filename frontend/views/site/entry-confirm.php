<?php
/**
 * Created by PhpStorm.
 * User: Тест
 * Date: 22.11.2016
 * Time: 13:48
 */
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>