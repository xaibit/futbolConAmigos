<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<li class="list-group-item group">
	<div class="row">
		<div class="col-md-12 dashboard">
			<?php echo CHtml::link(CHtml::encode($data->name), array('/group/view', 'id'=>$data->idGroup)); ?>
		</div>		
	</div>	
</li>
