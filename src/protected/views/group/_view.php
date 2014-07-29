<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<li class="list-group-item group">	
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->idGroup)); ?>		
</li>
