<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Section', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'section_code',
            'section_name',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    <?php
    print_r($sportname);
    ?>
    <ul class="nav nav-pills">
        <?php
        for($i=0;$i<=count($sportname)-1;$i++):
        ?>
        <li role="presentation" class="active"><a href="#"><?=$sportname[$i]?></a></li>
        <?php
        endfor;
        ?>
    </ul>

        <?php
        for($i=0;$i<=count($sportname)-1;$i++):
            ?>
            <span class="label label-warning"><?=$sportname[$i]?></span>
        <?php
        endfor;
        ?>

</div>
