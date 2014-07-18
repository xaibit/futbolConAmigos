<?php
/* @var $this TeamController */
/* @var $data Team */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTeam')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTeam), array('view', 'id'=>$data->idTeam)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />


</div>