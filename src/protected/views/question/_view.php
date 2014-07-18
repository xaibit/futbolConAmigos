<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idQuestion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idQuestion), array('view', 'id'=>$data->idQuestion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer1')); ?>:</b>
	<?php echo CHtml::encode($data->answer1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer2')); ?>:</b>
	<?php echo CHtml::encode($data->answer2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer3')); ?>:</b>
	<?php echo CHtml::encode($data->answer3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer4')); ?>:</b>
	<?php echo CHtml::encode($data->answer4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer5')); ?>:</b>
	<?php echo CHtml::encode($data->answer5); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus')); ?>:</b>
	<?php echo CHtml::encode($data->bonus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answerOK')); ?>:</b>
	<?php echo CHtml::encode($data->answerOK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('match')); ?>:</b>
	<?php echo CHtml::encode($data->match); ?>
	<br />

	*/ ?>

</div>