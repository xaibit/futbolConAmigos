<?php
/* @var $this PredictionController */
/* @var $model Prediction */

/*$this->breadcrumbs=array(
	'Predictions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prediction', 'url'=>array('index')),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);*/
?>

<h1>Create Prediction</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>