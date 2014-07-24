<?php
/* @var $this MatchController */
/* @var $data Match */
?>
<?php
	/*
	 * HTML code generated for each item
	 * <div class="list-group">
	 * 		<a href="#" class="list-group-item">
	 * 			<h4 class="list-group-item-heading">List group item heading</h4>
	 * 			<p class="list-group-item-text">...</p>
	 * 		</a>
	 * </div>
	 */ 
?>
<?php echo CHtml::link('<h4 class="list-group-item-heading"><img width="30" height="30" alt="' 
		. $data->localTeam0->name .'" src="' 
		. Yii::app()->request->baseUrl .'/images/escudos/'.$data->localTeam0->image
		. '">&nbsp;' . $data->localTeam0->name . ' | ' . $data->visitantTeam0->name 
		. '&nbsp;<img width="30" height="30" alt="' . $data->visitantTeam0->name 
		. '" src="' . Yii::app()->request->baseUrl . '/images/escudos/' 
		. $data->visitantTeam0->image .'"></h4>'
		. '<p class="list-group-item-text">' . date('d/m/Y', strtotime($data->date))
		. ' - ' . $data->afaDate . '&#170; Fecha<span class="glyphicon glyphicon-chevron-right pull-right"></span></p>', array('prediction/create', 'id'=>$data->idMatch), array('class'=>'list-group-item')); ?>