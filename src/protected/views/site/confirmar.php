<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="jumbotron text-center">
	<p>Se ha enviado un correo a su cuenta para que podamos verificarla.
		Por favor revise su correo electr&oacute;nico y confirme su correo. <strong>En caso de no encontrarlo, revise la carpeta SPAM.</strong></p>
	<p>
  	<?php echo CHtml::link('Volver a Inicio', array('site/index'), array('class' => 'btn btn-primary btn-lg')); ?>  	
  </p>
</div>
