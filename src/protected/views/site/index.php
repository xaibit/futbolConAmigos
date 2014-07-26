<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="jumbotron text-center">
  <h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
  <p>blah blah blah blah</p>  
  <p>
  	<?php echo CHtml::link('Registrarse', array('user/create'), array('class' => 'btn btn-primary btn-lg btn-register')); ?>&nbsp;
  	<?php echo CHtml::link('Iniciar Sesi&oacute;n', array('site/login'), array('class' => 'btn btn-default btn-lg')); ?>
  </p>
</div>
