<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name=>array('view','id'=>$model->idTeam),
	'Update',
);

$this->menu=array(
	array('label'=>'List Team', 'url'=>array('index')),
	array('label'=>'Create Team', 'url'=>array('create')),
	array('label'=>'View Team', 'url'=>array('view', 'id'=>$model->idTeam)),
	array('label'=>'Manage Team', 'url'=>array('admin')),
);
?>

<h1>Update Team <?php echo $model->idTeam; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>