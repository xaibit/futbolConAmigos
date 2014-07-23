<?php
/* @var $this MatchController */
/* @var $data Match */
?>

<?php echo CHtml::link('<h4 class="list-group-item-heading">' 
		. $data->localTeam0->name . ' | ' . $data->visitantTeam0->name . '</h4>'
		. '<p class="list-group-item-text">' . date('d/m/Y', strtotime($data->date))
		. ' - ' . $data->afaDate . '&#170; Fecha<span class="glyphicon glyphicon-chevron-right pull-right"></span></p>', array('prediction/create', 'id'=>$data->idMatch), array('class'=>'list-group-item')); ?>