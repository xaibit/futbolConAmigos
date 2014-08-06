<?php
/* @var $this PredictionController */
/* @var $model Prediction */

$this->breadcrumbs=array(
	'Predictions'=>array('index'),
	$model->idPrediction=>array('view','id'=>$model->idPrediction),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prediction', 'url'=>array('index')),
	array('label'=>'Create Prediction', 'url'=>array('create')),
	array('label'=>'View Prediction', 'url'=>array('view', 'id'=>$model->idPrediction)),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);
?>

<div class="page-header"><h1>&#191;Cu&aacute;l es tu p&aacute;lpito?</h1></div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>