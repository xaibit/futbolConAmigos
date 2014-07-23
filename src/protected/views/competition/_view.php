<?php
/* @var $this CompetitionController */
/* @var $data Competition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCompetition')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCompetition), array('view', 'id'=>$data->idCompetition)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>