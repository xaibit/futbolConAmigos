<?php
/* @var $this MatchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Matches',
);

$this->menu=array(
	array('label'=>'Create Match', 'url'=>array('create')),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);
?>

<div class="page-header"><h1>Partidos</h1></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
