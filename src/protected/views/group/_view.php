<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<li class="list-group-item group">
	<div class="row">
		<div class="col-md-8">
			<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->idGroup)); ?>
		</div>
		<?php ?>
		<div class="col-md-2 col-md-offset-2">		
			<?php
				if ($data->userAdmin == Yii::app()->user->id) {
					echo CHtml::link('Administrar', array('view', 'id'=>$data->idGroup), array('class'=>'btn btn-primary'));
				}		
			 ?>						
		</div>
	</div>	
</li>
