<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGroup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGroup), array('view', 'id'=>$data->idGroup)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userAdmin')); ?>:</b>
	<?php echo CHtml::encode($data->userAdmin); ?>
	<br />


</div>