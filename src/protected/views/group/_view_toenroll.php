<?php
/* @var $this GroupController */
/* @var $data Group */
?>
<li class="list-group-item group">
	<div class="row">
		<div class="col-md-4">
			<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->idGroup)); ?>
			</div>
		<div class="col-md-2 col-md-offset-6">		
			<?php
				$model->group = $data->idGroup; 
				$form=$this->beginWidget('CActiveForm', array(
					'id'=>'usergroup-form'
				));
				echo $form->hiddenField($model,'user');
				echo $form->hiddenField($model,'group');
				echo $form->hiddenField($model,'adminPending');
				echo $form->hiddenField($model,'userPending');
		
				echo CHtml::ajaxSubmitButton('Postularse', array('usergroup/create'), array('success'=>'function(){$.fn.yiiListView.update("to-enroll");$.fn.yiiListView.update("pending-list");}'), array('class'=>'btn btn-success'));
				$this->endWidget();
			 ?>						
		</div>
	</div>	
</li>