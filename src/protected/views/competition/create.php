<?php
/* @var $this CompetitionController */
/* @var $model Competition */

$this->breadcrumbs=array(
	'Competitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>

<h1>Create Competition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>