<?php

use yii\helpers\Html;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;

?>


<h1><?= Html::encode($this->title) ?></h1>

<table class="table w-50 table-hover">
    <thead>
    <tr>
<!--        <th scope="col">ID</th>-->
        <th scope="col">ФИО</th>

    </tr>
    </thead>
    <?php foreach ($users as $user): ?>

        <tr>
<!--            <td> --><?php //= $user->id?><!--</td>-->
            <td>
                <?= $user->name?>
                <?= $user->surname?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="/test/web/index.php?r=user-edit" class="btn btn-lg btn-success">Edit</a>