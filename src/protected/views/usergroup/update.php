<?php
/* @var $this UsergroupController */
/* @var $model Usergroup */

$this->breadcrumbs=array(
	'Usergroups'=>array('index'),
	$model->idUserGroup=>array('view','id'=>$model->idUserGroup),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usergroup', 'url'=>array('index')),
	array('label'=>'Create Usergroup', 'url'=>array('create')),
	array('label'=>'View Usergroup', 'url'=>array('view', 'id'=>$model->idUserGroup)),
	array('label'=>'Manage Usergroup', 'url'=>array('admin')),
);
?>

<h1>Update Usergroup <?php echo $model->idUserGroup; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>