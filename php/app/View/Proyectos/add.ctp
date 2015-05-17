<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Add Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('docente_id');
		echo $this->Form->input('cedula_estudiante1');
		echo $this->Form->input('cedula_estudiante2');
		echo $this->Form->input('cedula_estudiante3');
		echo $this->Form->input('nombre_completo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('duracion');
		echo $this->Form->input('objetivo');
		echo $this->Form->input('prorroga');
		echo $this->Form->input('estado');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('resultado_esperado');
		echo $this->Form->input('resultado');
		echo $this->Form->input('codigo_aprobacion');
		echo $this->Form->input('codigo_inscripcion');
		echo $this->Form->input('consecutivo');
		echo $this->Form->input('administrador_id');
		echo $this->Form->input('evaluacion_id');
		echo $this->Form->input('modalidad');
		echo $this->Form->input('linea_investigacion_id');
		echo $this->Form->input('cuadro_verificacion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('controller' => 'linea_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('controller' => 'linea_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('controller' => 'cuadro_verificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Softwares'), array('controller' => 'registro_softwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Software'), array('controller' => 'registro_softwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
