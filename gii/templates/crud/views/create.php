<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create">

    <div class="card-header">
        <h2><?= "<?= " ?>Html::encode($this->title) ?></h2>
        <div class="clearfix"></div>
    </div>

    <div class="card-body">
        <?= "<?= " ?>$this->render('_form', [
        'model' => $model,
        ]) ?>
    </div>

</div>
