<?php
/* @var $this PredictionController */
/* @var $data Prediction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPrediction')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPrediction), array('view', 'id'=>$data->idPrediction)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localGoals')); ?>:</b>
	<?php echo CHtml::encode($data->localGoals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitantGoals')); ?>:</b>
	<?php echo CHtml::encode($data->visitantGoals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question1')); ?>:</b>
	<?php echo CHtml::encode($data->question1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer1')); ?>:</b>
	<?php echo CHtml::encode($data->answer1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question2')); ?>:</b>
	<?php echo CHtml::encode($data->question2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('answer2')); ?>:</b>
	<?php echo CHtml::encode($data->answer2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question3')); ?>:</b>
	<?php echo CHtml::encode($data->question3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer3')); ?>:</b>
	<?php echo CHtml::encode($data->answer3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question4')); ?>:</b>
	<?php echo CHtml::encode($data->question4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer4')); ?>:</b>
	<?php echo CHtml::encode($data->answer4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question5')); ?>:</b>
	<?php echo CHtml::encode($data->question5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer5')); ?>:</b>
	<?php echo CHtml::encode($data->answer5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('match')); ?>:</b>
	<?php echo CHtml::encode($data->match); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('predictioncol')); ?>:</b>
	<?php echo CHtml::encode($data->predictioncol); ?>
	<br />

	*/ ?>

</div>