<?php
/* @var $this MatchController */
/* @var $model Match */

$this->breadcrumbs=array(
	'Matches'=>array('index'),
	$model->idMatch=>array('view','id'=>$model->idMatch),
	'Update',
);

$this->menu=array(
	array('label'=>'List Match', 'url'=>array('index')),
	array('label'=>'Create Match', 'url'=>array('create')),
	array('label'=>'View Match', 'url'=>array('view', 'id'=>$model->idMatch)),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);
?>

<h1>Update Match <?php echo $model->idMatch; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>