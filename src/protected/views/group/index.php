<?php
/* @var $this GroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groups',
);

$this->menu=array(
	array('label'=>'Create Group', 'url'=>array('create')),
	array('label'=>'Manage Group', 'url'=>array('admin')),
);
?>

<h1>Grupos</h1>
<?php echo CHtml::button('Mis Grupos',array('submit'=>array('group/mygroup'),'params'=>array('group' => $data->idGroup, 'user' => Yii::app()->user->id)));?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
