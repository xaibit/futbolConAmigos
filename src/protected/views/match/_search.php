<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idMatch'); ?>
		<?php echo $form->textField($model,'idMatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localTeam'); ?>
		<?php echo $form->textField($model,'localTeam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitantTeam'); ?>
		<?php echo $form->textField($model,'visitantTeam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afaDate'); ?>
		<?php echo $form->textField($model,'afaDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'localGoals'); ?>
		<?php echo $form->textField($model,'localGoals'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitantGoals'); ?>
		<?php echo $form->textField($model,'visitantGoals'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->