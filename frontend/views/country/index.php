<?php
/**
 * Created by PhpStorm.
 * User: Тест
 * Date: 22.11.2016
 * Time: 15:14
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;

$user = [
    ['id' => '001', 'name' => "Vas'ya"],
    ['id' => '16', 'name' => "Serega"],
    ['id' => '42', 'name' => "Stas"]
];

?>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

<?= Html::tag('p', Html::encode($user->name), ['class' => 'username']) ?>

<?php
$type = 'success';
$options = ['class' => 'btn btn-default'];

if ($type === 'success') {
    Html::removeCssClass($options, 'btn-default');
    Html::addCssClass($options, 'btn-success');
}

$model = new \frontend\models\ContactForm;

// "name" is an attribute of ContactForm
$model->name = 'example';
?>
<?= Html::tag('div', 'Pwede na', $options); ?>

<?= Html::beginForm(['order/update', 'id' => $user->id], 'post', ['enctype' => 'multipart/form-data']) ?>
<?= Html::button('Press me!', ['class' => 'teaser']) ?>
<?= Html::submitButton('Submit', ['class' => 'submit']) ?>
<?= Html::resetButton('Reset', ['class' => 'reset']) ?>

<?= Html::input('text', 'username', $user[0]->name, ['class' => $user->name]) ?>
<?= Html::activeInput('text', $model, 'name', ['class' => $user->name]) ?>

<hr><pre>
<?php var_dump($model);  ?>
</pre><hr>

<?= Html::radio('agree', true, ['label' => 'I agree']); ?>
<?= Html::activeRadio($model, 'agree', ['class' => 'agreement']); ?>

<?= Html::checkbox('agree', true, ['label' => 'I agree']); ?>
<?= Html::activeCheckbox($model, 'agree', ['class' => 'agreement']);?>

<hr><pre>
<?php var_dump(ArrayHelper::map($user, 'id', 'name')); ?>
</pre><hr>

<?= Html::dropDownList('list', $user->id, ArrayHelper::map($user, 'id', 'name')) ?>
<?= Html::activeDropDownList($model, 'id', ArrayHelper::map($user, 'id', 'name')) ?>

<?= Html::listBox('list', $user->id, ArrayHelper::map($user, 'id', 'name')) ?>
<?= Html::activeListBox($model, 'id', ArrayHelper::map($user, 'id', 'name')) ?>

<?= Html::checkboxList('roles', [16, 42], ArrayHelper::map($user, 'id', 'name')) ?>
<?= Html::activeCheckboxList($model, 'role', ArrayHelper::map($user, 'id', 'name')) ?>

<?= Html::radioList('roles', [16, 42], ArrayHelper::map($user, 'id', 'name')) ?>
<?= Html::activeRadioList($model, 'role', ArrayHelper::map($user, 'id', 'name')) ?>

<?= Html::label('User name', 'username', ['class' => 'label username']) ?>
<?= Html::activeLabel($model, 'username', ['class' => 'label username']) ?>

<?= Html::a('Profile', ['user/view', 'id' => $user->id], ['class' => 'profile-link']) ?>

<?= Html::endForm() ?>
