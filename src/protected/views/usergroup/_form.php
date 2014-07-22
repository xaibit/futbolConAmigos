<?php
/* @var $this UsergroupController */
/* @var $model Usergroup */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usergroup-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'group'); ?>
		<?php echo $form->textField($model,'group', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'group'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

