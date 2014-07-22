<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idMatch'); ?>
		<?php echo $form->textField($model,'idMatch', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'localTeam'); ?>
		<?php echo $form->textField($model,'localTeam', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'visitantTeam'); ?>
		<?php echo $form->textField($model,'visitantTeam', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'afaDate'); ?>
		<?php echo $form->textField($model,'afaDate', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'localGoals'); ?>
		<?php echo $form->textField($model,'localGoals', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'visitantGoals'); ?>
		<?php echo $form->textField($model,'visitantGoals', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

