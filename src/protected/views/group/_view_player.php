<?php
/* @var $this GroupController */
/* @var $data Group */
?>
<li class="list-group-item">
	<div class="row">
		<div class="col-md-6">
			<?php echo CHtml::encode($data->player->nickname); ?>
		</div>
		<div class="col-md-2">
			<?php echo isset($data->score) ? $data->score : '0'; ?>
		</div>
		<div class="col-md-4">		
			<?php 
				if ($data->grouprel->userAdmin == Yii::app()->user->id) {
					echo CHtml::button( 'Expulsar', array(
						'class' => 'btn btn-danger btn-reject',
						'data-toggle' => 'modal',
						'data-target' => '#popup-reject',
						'data-id' => $data->idUserGroup 
					));
				}			
			?>						
		</div>
	</div>
</li>