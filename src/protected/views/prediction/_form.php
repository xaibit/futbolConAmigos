<?php
/* @var $this PredictionController */
/* @var $model Prediction */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prediction-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'localGoals'); ?>
		<?php echo $form->textField($model,'localGoals', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'localGoals'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'visitantGoals'); ?>
		<?php echo $form->textField($model,'visitantGoals', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'visitantGoals'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question1'); ?>
		<?php echo $form->textField($model,'question1', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question1'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer1'); ?>
		<?php echo $form->textField($model,'answer1', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer1'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question2'); ?>
		<?php echo $form->textField($model,'question2', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question2'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer2'); ?>
		<?php echo $form->textField($model,'answer2', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer2'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question3'); ?>
		<?php echo $form->textField($model,'question3', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question3'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer3'); ?>
		<?php echo $form->textField($model,'answer3', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer3'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question4'); ?>
		<?php echo $form->textField($model,'question4', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question4'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer4'); ?>
		<?php echo $form->textField($model,'answer4', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer4'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question5'); ?>
		<?php echo $form->textField($model,'question5', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question5'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer5'); ?>
		<?php echo $form->textField($model,'answer5', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer5'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'match'); ?>
		<?php echo $form->textField($model,'match', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'match'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'predictioncol'); ?>
		<?php echo $form->textField($model,'predictioncol',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'predictioncol'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

