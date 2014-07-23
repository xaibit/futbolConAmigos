<?php
/* @var $this CompetitionController */
/* @var $model Competition */

$this->breadcrumbs=array(
	'Competitions'=>array('index'),
	$model->name=>array('view','id'=>$model->idCompetition),
	'Update',
);

$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'View Competition', 'url'=>array('view', 'id'=>$model->idCompetition)),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>

<h1>Update Competition <?php echo $model->idCompetition; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>