<?php
/* @var $this PredictionController */
/* @var $model Prediction */

$this->breadcrumbs=array(
	'Predictions'=>array('index'),
	$model->idPrediction,
);

$this->menu=array(
	array('label'=>'List Prediction', 'url'=>array('index')),
	array('label'=>'Create Prediction', 'url'=>array('create')),
	array('label'=>'Update Prediction', 'url'=>array('update', 'id'=>$model->idPrediction)),
	array('label'=>'Delete Prediction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPrediction),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);
?>

<h1>View Prediction #<?php echo $model->idPrediction; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPrediction',
		'localGoals',
		'visitantGoals',
		'score',
		'question1',
		'answer1',
		'question2',
		'answer2',
		'question3',
		'answer3',
		'question4',
		'answer4',
		'question5',
		'answer5',
		'user',
		'match',
		'predictioncol',
	),
)); ?>
