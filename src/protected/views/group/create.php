<?php
/* @var $this GroupController */
/* @var $model Group */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Group', 'url'=>array('index')),
	array('label'=>'Manage Group', 'url'=>array('admin')),
);
?>

<div class="page-header"><h1>Crear Grupo</h1></div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>