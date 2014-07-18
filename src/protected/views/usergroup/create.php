<?php
/* @var $this UsergroupController */
/* @var $model Usergroup */

$this->breadcrumbs=array(
	'Usergroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usergroup', 'url'=>array('index')),
	array('label'=>'Manage Usergroup', 'url'=>array('admin')),
);
?>

<h1>Create Usergroup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>