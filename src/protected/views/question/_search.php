<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idQuestion'); ?>
		<?php echo $form->textField($model,'idQuestion', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>400, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer1'); ?>
		<?php echo $form->textField($model,'answer1',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer2'); ?>
		<?php echo $form->textField($model,'answer2',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer3'); ?>
		<?php echo $form->textField($model,'answer3',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer4'); ?>
		<?php echo $form->textField($model,'answer4',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer5'); ?>
		<?php echo $form->textField($model,'answer5',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>5,'maxlength'=>5, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'bonus'); ?>
		<?php echo $form->textField($model,'bonus', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answerOK'); ?>
		<?php echo $form->textField($model,'answerOK', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'match'); ?>
		<?php echo $form->textField($model,'match', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

