<?php
/* @var $this GroupController */
/* @var $data Group */
?>
<li class="list-group-item pending">
	<div class="row">
		<div class="col-md-4">
			<?php echo CHtml::encode($data->lastname . ', ' . $data->name); ?>
		</div>
		<div class="col-md-2 col-md-offset-6">		
			<?php

				$form=$this->beginWidget('CActiveForm', array(
					'id'=>'usergroup-form'
				));
				echo CHtml::hiddenField('user', $data->idUser);
				echo CHtml::hiddenField('group', $group);
		
				echo CHtml::ajaxSubmitButton('Aprobar', array('usergroup/approve'), array('success'=>'function(){$.fn.yiiListView.update("pending-list");}'), array('class'=>'btn btn-primary btn-approve'));
				$this->endWidget();
			 ?>						
		</div>
	</div>	
</li>