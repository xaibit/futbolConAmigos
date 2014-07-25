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
	
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<div class="col-xs-1 col-md-1">
			<img width="30" height="30" src="<?php echo Yii::app()->request->baseUrl . '/images/escudos/' . $model->matchRel->localTeam0->image; ?>" alt="">
		</div>
		<div class="col-xs-5 col-md-1">
			<?php echo $form->numberField($model,'localGoals', array('class'=>'form-control', 'min'=>0, 'max'=>'15')); ?>
			<?php echo $form->error($model,'localGoals'); ?>
		</div>
		<div class="col-xs-1 col-md-1">
			<img width="30" height="30" src="<?php echo Yii::app()->request->baseUrl . '/images/escudos/' . $model->matchRel->visitantTeam0->image; ?>" alt="">
		</div>
		<div class="col-xs-5 col-md-1">
			<?php echo $form->numberField($model,'visitantGoals', array('class'=>'form-control', 'min'=>0, 'max'=>'15')); ?>
			<?php echo $form->error($model,'visitantGoals'); ?>
		</div>			
	</div>
	
	<?php echo $form->hiddenField($model,'score'); ?>
	<?php if (isset($model->question1)) { ?>	
	<div class="form-group">
		<p class="form-control-static">
			<strong><?php echo $model->ques1->text; ?></strong>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<?php		
			for ($i = 0; $i < 5; $i++):			
				$selected = $model->getSelectedOption($i);
				$option = $model->ques1->getOption($i);
				
				if (isset($option)):?>
					<label class="btn btn-default 
					<?php echo (isset($selected) && $selected == $i) ? 'active' : ''; ?>">
					<?php echo $form->radioButton($model,'answer' . ($i + 1), 
							array('value'=>$i, 'uncheckValue'=>null)) . $option; ?>
					</label>
				<?php endif;
			endfor;		 
		?>
		<?php echo $form->error($model,'answer1'); ?>
	</div>
	<?php }//end if question setted ?>
	
	<?php if (isset($model->question2)) { ?>
	<div class="form-group">
		<p class="form-control-static">
			<strong><?php echo $model->ques2->text; ?></strong>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<?php		
			for ($i = 0; $i < 5; $i++):			
				$selected = $model->getSelectedOption($i);
				$option = $model->ques2->getOption($i);
				
				if (isset($option)):?>
					<label class="btn btn-default 
					<?php echo (isset($selected) && $selected == $i) ? 'active' : ''; ?>">
					<?php echo $form->radioButton($model,'answer' . ($i + 1), 
							array('value'=>$i, 'uncheckValue'=>null)) . $option; ?>
					</label>
				<?php endif;
			endfor;		 
		?>	
		<?php echo $form->error($model,'answer2'); ?>
	</div>
	<?php }//end if question setted ?>
	
	<?php if (isset($model->question3)) { ?>
	<div class="form-group">
		<p class="form-control-static">
			<strong><?php echo $model->ques3->text; ?></strong>
		</p>		
	</div>
	
	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<?php		
			for ($i = 0; $i < 5; $i++):			
				$selected = $model->getSelectedOption($i);
				$option = $model->ques3->getOption($i);
				
				if (isset($option)):?>
					<label class="btn btn-default 
					<?php echo (isset($selected) && $selected == $i) ? 'active' : ''; ?>">
					<?php echo $form->radioButton($model,'answer' . ($i + 1), 
							array('value'=>$i, 'uncheckValue'=>null)) . $option; ?>
					</label>
				<?php endif;
			endfor;		 
		?>	
		<?php echo $form->error($model,'answer3'); ?>
	</div>
	<?php }//end if question setted ?>
	
	<?php if (isset($model->question4)) { ?>
	<div class="form-group">
		<p class="form-control-static">
			<strong><?php echo $model->ques4->text; ?></strong>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<?php		
			for ($i = 0; $i < 5; $i++):			
				$selected = $model->getSelectedOption($i);
				$option = $model->ques4->getOption($i);
				
				if (isset($option)):?>
					<label class="btn btn-default 
					<?php echo (isset($selected) && $selected == $i) ? 'active' : ''; ?>">
					<?php echo $form->radioButton($model,'answer' . ($i + 1), 
							array('value'=>$i, 'uncheckValue'=>null)) . $option; ?>
					</label>
				<?php endif;
			endfor;		 
		?>		
		<?php echo $form->error($model,'answer4'); ?>
	</div>
	<?php }//end if question setted ?>
	
	<?php if (isset($model->question5)) { ?>
	<div class="form-group">
		<p class="form-control-static">
			<strong><?php echo $model->ques5->text; ?></strong>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<?php		
			for ($i = 0; $i < 5; $i++):			
				$selected = $model->getSelectedOption($i);
				$option = $model->ques5->getOption($i);
				
				if (isset($option)):?>
					<label class="btn btn-default 
					<?php echo (isset($selected) && $selected == $i) ? 'active' : ''; ?>">
					<?php echo $form->radioButton($model,'answer' . ($i + 1), 
							array('value'=>$i, 'uncheckValue'=>null)) . $option; ?>
					</label>
				<?php endif;
			endfor;		 
		?>	
		<?php echo $form->error($model,'answer5'); ?>
	</div>
	<?php }//end if question setted ?>
	
	<?php echo $form->hiddenField($model,'user'); ?>	
	<?php echo $form->hiddenField($model,'match'); ?>	

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

