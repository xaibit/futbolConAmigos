<?php
/* @var $this PredictionController */
/* @var $model Prediction */

$this->breadcrumbs=array(
	'Predictions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prediction', 'url'=>array('index')),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);
?>

<div class="page-header"><h1>&#191;Cu&aacute;l es tu p&aacute;lpito?</h1></div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>