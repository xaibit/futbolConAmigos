<?php
/* @var $this UsergroupController */
/* @var $data Usergroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUserGroup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUserGroup), array('view', 'id'=>$data->idUserGroup)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group')); ?>:</b>
	<?php echo CHtml::encode($data->group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />


</div>