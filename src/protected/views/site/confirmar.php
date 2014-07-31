<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="jumbotron text-center">
  <p>Se ha enviado un correo a su cuenta para que podamos verificarla. Por favor revise su correo electronico y confirme tu correo</p>  
  <p>
  	<?php echo CHtml::link('ir a Inicio', array('site/index'), array('class' => 'btn btn-primary btn-lg btn-register')); ?>  	
  </p>
</div>
