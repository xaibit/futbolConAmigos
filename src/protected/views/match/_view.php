<?php
/* @var $this MatchController */
/* @var $data Match */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMatch')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMatch), array('view', 'id'=>$data->idMatch)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localTeam')); ?>:</b>
	<?php echo CHtml::encode($data->localTeam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitantTeam')); ?>:</b>
	<?php echo CHtml::encode($data->visitantTeam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afaDate')); ?>:</b>
	<?php echo CHtml::encode($data->afaDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localGoals')); ?>:</b>
	<?php echo CHtml::encode($data->localGoals); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('visitantGoals')); ?>:</b>
	<?php echo CHtml::encode($data->visitantGoals); ?>
	<br />

	*/ ?>

</div>