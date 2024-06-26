<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserEdit $model */

$this->title = 'Update User Edit: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Edits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-edit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
