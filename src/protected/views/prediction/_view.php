<?php
/* @var $this PredictionController */
/* @var $data Prediction */
?>
<?php	
	$canUpdate = ((strtotime($data->matchRel->date) - time()) >= (60 * 60)); 
	$url =  $canUpdate ? array('prediction/update', 'id'=>$data->idPrediction) : array('prediction/view', 'id'=>$data->idPrediction);
	$text = $canUpdate ? 'Actualizar' : 'Ver';			
?>
<li class="list-group-item">
	<div class="row">
		<div class="col-md-1">
			<span class="label label-default">Fecha <?php echo $data->matchRel->afaDate; ?></span>
		</div>
		<div class="col-md-1">
			<span class="badge"><?php echo isset($data->localGoals) ? CHtml::encode($data->localGoals) : '-'; ?></span>
			<img alt="<?php echo $data->matchRel->localTeam0->name; ?>"
				src="<?php echo Yii::app()->request->baseUrl . '/images/escudos/' . $data->matchRel->localTeam0->image; ?>"
				width="30" height="30">
		</div>		
		<div class="col-md-1">
			<img alt="<?php echo $data->matchRel->visitantTeam0->name; ?>"
				src="<?php echo Yii::app()->request->baseUrl . '/images/escudos/' . $data->matchRel->visitantTeam0->image; ?>"
				width="30" height="30">
			<span class="badge"><?php echo isset($data->visitantGoals) ? CHtml::encode($data->visitantGoals) : '-'; ?></span>
		</div>
		<div class="col-md-2">
			<?php echo isset($data->ques1) ? CHtml::encode($data->ques1->text) : ''; ?>
			<strong>
				<?php
					if (isset($data->answer1) && isset($data->ques1)) {
						echo ' ' . $data->ques1->getOption($data->answer1);
					} 
				?>
			</strong>
		</div>
		<div class="col-md-2">
			<?php echo isset($data->ques2) ? CHtml::encode($data->ques2->text) : ''; ?>
			<strong>
				<?php
					if (isset($data->answer2) && isset($data->ques2)) {
						echo ' ' . $data->ques2->getOption($data->answer2);
					} 
				 ?>
			 </strong>
		</div>
		<div class="col-md-1">
			<?php echo isset($data->ques3) ? $data->ques3->text : ''; ?>
			<strong>
				<?php
					if (isset($data->answer3) && isset($data->ques3)) {
						echo ' ' . $data->ques3->getOption($data->answer3);
					} 
				 ?>
			 </strong>
		</div>
		<div class="col-md-1">
			<?php echo isset($data->ques4) ? $data->ques4->text : ''; ?>
			<strong>
				<?php
					if (isset($data->answer4) && isset($data->ques4)) {
						echo ' ' . $data->ques4->getOption($data->answer4);
					} 
				 ?>
			 </strong>
		</div>
		<div class="col-md-1">
			<?php echo isset($data->ques5) ? $data->ques5->text : ''; ?>
			<strong>
				<?php
					if (isset($data->answer5) && isset($data->ques5)) {
						echo ' ' . $data->ques5->getOption($data->answer5);
					} 
				 ?>
			 </strong>
		</div>		
		<div class="col-md-2">			
			<?php
				echo CHtml::link($text, $url, array('class'=>'btn btn-primary btn-block'));				
			?>
		</div>
	</div>
</li>