<?php
/* @var $this GroupController */
/* @var $data Group */
?>
<li class="list-group-item">
	<div class="row">
		<div class="col-md-2">
			<?php $pagination = $widget->dataProvider->getPagination();
					$currentPage = $pagination->getCurrentPage()*10;
			echo CHtml::encode($index+1+$currentPage); ?>
		</div>
		<div class="col-md-5">
			<?php echo CHtml::encode($data->player->nickname); ?>
		</div>
		<div class="col-md-2">
			<?php echo isset($data->score) ? $data->score : '0'; ?>
		</div>
		<div class="col-md-3">		
			<?php 
				if ($data->grouprel->userAdmin == Yii::app()->user->id && Yii::app()->user->id != $data->user) {
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