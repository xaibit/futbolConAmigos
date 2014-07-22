<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'born'); ?>
		<?php echo $form->textField($model,'born', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'born'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'male'); ?>
		<?php echo $form->textField($model,'male',array('size'=>1,'maxlength'=>1, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'male'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

