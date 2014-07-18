<?php
/* @var $this PlayerController */
/* @var $model Player */

$this->breadcrumbs=array(
	'Players'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Player', 'url'=>array('index')),
	array('label'=>'Manage Player', 'url'=>array('admin')),
);
?>

<h1>Create Player</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>