<?php
/* @var $this PredictionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Predictions',
);

$this->menu=array(
	array('label'=>'Create Prediction', 'url'=>array('create')),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);
?>

<div class="page-header">
	<h1>Mis P&aacute;lpitos</h1>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
