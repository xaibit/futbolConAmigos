<?php
/* @var $this PredictionController */
/* @var $model Prediction */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPrediction'); ?>
		<?php echo $form->textField($model,'idPrediction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localGoals'); ?>
		<?php echo $form->textField($model,'localGoals'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitantGoals'); ?>
		<?php echo $form->textField($model,'visitantGoals'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question1'); ?>
		<?php echo $form->textField($model,'question1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'answer1'); ?>
		<?php echo $form->textField($model,'answer1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question2'); ?>
		<?php echo $form->textField($model,'question2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'answer2'); ?>
		<?php echo $form->textField($model,'answer2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question3'); ?>
		<?php echo $form->textField($model,'question3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'answer3'); ?>
		<?php echo $form->textField($model,'answer3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question4'); ?>
		<?php echo $form->textField($model,'question4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'answer4'); ?>
		<?php echo $form->textField($model,'answer4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question5'); ?>
		<?php echo $form->textField($model,'question5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'answer5'); ?>
		<?php echo $form->textField($model,'answer5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user'); ?>
		<?php echo $form->textField($model,'user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'match'); ?>
		<?php echo $form->textField($model,'match'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'predictioncol'); ?>
		<?php echo $form->textField($model,'predictioncol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->