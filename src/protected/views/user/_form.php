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
		<?php                      Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('CJuiDateTimePicker',array(
                'language'=>'es',
                'model'=>$model,                                // Model object
                'attribute'=>'born', // Attribute name
                'mode'=>'date',                     // Use "time","date" or "datetime" (default)
                'options'=>array('dateFormat'=>'yy-mm-dd',
					'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
					'changeMonth'=>true,
					'changeYear'=>true,
					'yearRange'=>'1930:2025',
					'minDate' => '1930-01-01',      // minimum date
					'maxDate' => '2025-12-31',      // maximum date
				),                     // jquery plugin options
                'htmlOptions'=>array('readonly'=>true) // HTML options
        ));                             
        ?> 
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
		<?php echo $form->labelEx($model,'male'); ?>
		<?php echo $form->dropDownList($model,'male',array('0'=>'Mujer','1'=>'Hombre')); ?>
		<?php echo $form->error($model,'male'); ?>
	</div>		
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

