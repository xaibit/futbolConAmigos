<?php
/* @var $this PredictionController */
/* @var $model Prediction */

$this->breadcrumbs=array(
	'Predictions'=>array('index'),
	$model->idPrediction,
);

$this->menu=array(
	array('label'=>'List Prediction', 'url'=>array('index')),
	array('label'=>'Create Prediction', 'url'=>array('create')),
	array('label'=>'Update Prediction', 'url'=>array('update', 'id'=>$model->idPrediction)),
	array('label'=>'Delete Prediction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPrediction),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
		<span class="badge"><?php echo isset($model->localGoals) ? $model->localGoals : '-'; ?></span>&nbsp;
		<?php echo $model->matchRel->localTeam0->name;?>
		&nbsp;-&nbsp;<?php echo $model->matchRel->visitantTeam0->name;?>
		<span class="badge"><?php echo isset($model->localGoals) ? $model->visitantGoals : '-'; ?></span>
		
		</h3>
	</div>
	<div class="panel-body">
		<div  class="col-sm-6 col-md-6">
		<p>
		<?php echo isset($model->matchRel) ? '<strong>Resultado correcto:</strong> ' . $model->matchRel->localGoals . ' - ' . $model->matchRel->visitantGoals : ''?>
		<?php 
				if ($model->matchRel) {
					$points = $model->matchRel->getPoints($model->localGoals, $model->visitantGoals); 
					if ($points != 0) {
						echo '<span class="glyphicon glyphicon-ok text-success"></span> +' . $points;
					} else {
						echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
					}
				}
			?>
		
		</p>
		<p>
			<strong><?php echo isset($model->ques1) ? $model->ques1->text : ''; ?></strong>
			<?php echo isset($model->answer1) ? $model->ques1->getOption($model->answer1) : ''; ?>
			<?php 
				if ($model->ques1) {
					if (isset($model->answer1) && $model->answer1 == $model->ques1->answerOK) {
						echo '<span class="glyphicon glyphicon-ok text-success"></span> +1';			
					} else {
						echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
					}					
				}
			?>
		</p>
		<p>
			<strong><?php echo isset($model->ques2) ? $model->ques2->text : ''; ?></strong>
			<?php echo isset($model->answer2) ? $model->ques2->getOption($model->answer2) : ''; ?>
			<?php 
				if ($model->ques2) {
					if (isset($model->answer2) && $model->answer2 == $model->ques2->answerOK) {
						echo '<span class="glyphicon glyphicon-ok text-success"></span> +1';			
					} else {
						echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
					}					
				}
			?>
		</p>
		<p>
			<strong><?php echo isset($model->ques3) ? $model->ques3->text : ''; ?></strong>
			<?php echo isset($model->answer3) ? $model->ques3->getOption($model->answer3) : ''; ?>
			<?php 
				if ($model->ques3) {
					if (isset($model->answer3) && $model->answer3 == $model->ques3->answerOK) {
						echo '<span class="glyphicon glyphicon-ok text-success"></span> +1';			
					} else {
						echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
					}					
				}
			?>
		</p>
		<p>
			<strong><?php echo isset($model->ques4) ? $model->ques4->text : ''; ?></strong>
			<?php echo isset($model->answer4) ? $model->ques4->getOption($model->answer4) : ''; ?>
			<?php 
				if ($model->ques4) {
					if (isset($model->answer4) && $model->answer4 == $model->ques4->answerOK) {
						echo '<span class="glyphicon glyphicon-ok text-success"></span> +1';			
					} else {
						echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
					}					
				}
			?>
		</p>
		<p>
			<strong><?php echo isset($model->ques5) ? $model->ques5->text : ''; ?></strong>
			<?php echo isset($model->answer5) ? $model->ques5->getOption($model->answer5) : ''; ?>
			<?php 
				if ($model->ques5) {
					if (isset($model->answer5) && $model->answer5 == $model->ques5->answerOK) {
						echo '<span class="glyphicon glyphicon-ok text-success"></span> +1';			
					} else {
						echo '<span class="glyphicon glyphicon-remove text-danger"></span>';
					}					
				}
			?>
		</p>
		<p><span class="label label-success"><strong>Puntos:&nbsp;</strong><?php echo $model->score; ?></span></p>
		</div>
		<div  class="col-sm-6 col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Recordatorio</div>
				<div class="panel-body">
					<p>Para calcular los puntos se har&aacute; una sumatoria entre los distintos p&aacute;lpitos:</p>
					<p>3 puntos por cada resultado acertado.</p>
					<p>1 punto por acertar qui&eacute;n gana o si empatan (En caso de acertar el resultado del partido este punto no se te suma).</p>
					<p>1 punto por cada respuesta acertada (si se aciertan todas las preguntas, se sumar&aacute; un punto extra).</p>
					<p>1 punto extra por acertar el resultado y todas las preguntas.</p>
					<p>En base a esto, se sumar&aacute;n los puntos obtenidos fecha a fecha para sumarlos en el ranking de cada grupo y en un ranking general. </p>
				</div>
			</div>
		</div>
	</div>
</div>