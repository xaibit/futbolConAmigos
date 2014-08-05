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
<?php 
	$url;
	$icon;
	if (empty($data->predictions)) {
		$url = array('match/view', 'id'=>$data->idMatch);
		$icon = 'glyphicon-minus';
	} else {
		$url = array('prediction/view', 'id'=>$data->predictions[0]->idPrediction);
		$icon = 'glyphicon-remove';
	}
	
	if ((strtotime($data->date) - time()) >= (60 * 60)) {
		if (empty($data->predictions)) {
			$url = array('prediction/create', 'id'=>$data->idMatch);
			$icon = 'glyphicon-certificate';
		} else {
			$url = array('prediction/update', 'id'=>$data->predictions[0]->idPrediction);
			$icon = 'glyphicon-edit';
		}		
	} 
	
?>
<?php echo CHtml::link('<h4 class="list-group-item-heading"><img width="30" height="30" alt="' 
		. $data->localTeam0->name .'" src="' 
		. Yii::app()->request->baseUrl .'/images/escudos/'.$data->localTeam0->image
		. '">&nbsp;' . $data->localTeam0->name . ' | ' . $data->visitantTeam0->name 
		. '&nbsp;<img width="30" height="30" alt="' . $data->visitantTeam0->name 
		. '" src="' . Yii::app()->request->baseUrl . '/images/escudos/' 
		. $data->visitantTeam0->image .'"></h4>'
		. '<p class="list-group-item-text">' . date('d/m/Y', strtotime($data->date))
		. ' - ' . $data->afaDate . '&#170; Fecha<span class="glyphicon ' . $icon . ' pull-right"></span></p>', $url, array('class'=>'list-group-item')); ?>