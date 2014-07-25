<?php
/* @var $this MatchController */
/* @var $model Match */

$this->breadcrumbs=array(
	'Matches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Match', 'url'=>array('index')),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);
?>

<h1>Create Match</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>