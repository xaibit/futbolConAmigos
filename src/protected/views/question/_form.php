<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>400, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer1'); ?>
		<?php echo $form->textField($model,'answer1',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer1'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer2'); ?>
		<?php echo $form->textField($model,'answer2',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer2'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer3'); ?>
		<?php echo $form->textField($model,'answer3',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer3'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer4'); ?>
		<?php echo $form->textField($model,'answer4',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer4'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answer5'); ?>
		<?php echo $form->textField($model,'answer5',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'answer5'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>5,'maxlength'=>5, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'bonus'); ?>
		<?php echo $form->textField($model,'bonus', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'bonus'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'answerOK'); ?>
		<?php echo $form->textField($model,'answerOK', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'answerOK'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'match'); ?>
		<?php echo $form->textField($model,'match', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'match'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

