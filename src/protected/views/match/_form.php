<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'match-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'localTeam'); ?>
		<?php echo $form->textField($model,'localTeam', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'localTeam'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'visitantTeam'); ?>
		<?php echo $form->textField($model,'visitantTeam', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'visitantTeam'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'afaDate'); ?>
		<?php echo $form->textField($model,'afaDate', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'afaDate'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

