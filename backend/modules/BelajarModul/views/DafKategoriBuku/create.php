<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\BelajarModul\models\DafKategoriBuku */

$this->title = 'Create Daf Kategori Buku';
$this->params['breadcrumbs'][] = ['label' => 'Daf Kategori Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-kategori-buku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
