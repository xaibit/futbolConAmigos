<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Reglas';
$this->breadcrumbs=array(
	'About',
);
?>
<div class="page-header">
	<h1>Reglas</h1>
</div>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#groups">Grupos</a>
			</h4>
		</div>
		<div id="groups" class="panel-collapse collapse in">
			<div class="panel-body">
				Aqu&iacute; puedes crear un grupo e invitar amigos para que se
				sumen. En esta secci&oacute;n podr&aacute;s ver:
				<ul>
					<li><strong>Mis Grupos:</strong> los grupos en los que est&aacute;s inscripto o los
						que administras.</li>
					<li><strong>Pendientes de aprobaci&oacute;n:</strong> los grupos que te has
						postulado y el administrador a&uacute;n no te ha aceptado.</li>
					<li><strong>Buscar grupos:</strong> los grupos en los que todav&iacute;a no
						participas ni eres el administrador. Puedes postularte para formar
						parte de cualquier de ellos, y luego ser&aacute; el administrador
						qui&eacute;n te apruebe. Adem&aacute;s, dentro de cada grupo
						podr&aacute;s encontrar el ranking de sus integrantes.</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#points">C&aacute;lculo
					de Puntos</a>
			</h4>
		</div>
		<div id="points" class="panel-collapse collapse">
			<div class="panel-body">
				Para calcular los puntos se har&aacute; una sumatoria entre los
				distintos p&aacute;lpitos:
				<ul>
					<li>3 puntos por cada resultado acertado.</li>
					<li>1 punto por acertar qui&eacute;n gana o si empatan (En caso de
						acertar el resultado del partido este punto no se te suma).</li>
					<li>1 punto por cada respuesta acertada (si se aciertan todas las
						preguntas, se sumar&aacute; un punto extra).</li>
					<li>1 punto extra por acertar el resultado y todas las preguntas.</li>
				</ul>
				En base a esto, se sumar&aacute;n los puntos obtenidos fecha a fecha
				para sumarlos en el ranking de cada grupo y en un ranking general.
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#matchs">Partidos</a>
			</h4>
		</div>
		<div id="matchs" class="panel-collapse collapse">
			<div class="panel-body">En esta secci&oacute;n se listan todos los
				partidos a predecir, y haciendo click en cada uno pod&eacute;s
				predecir o editar la predicci&oacute;n que hayas realizado
				anteriormente (siempre y cuando no falte menos de una hora para el
				inicio del partido).</div>
		</div>
	</div>
</div>
