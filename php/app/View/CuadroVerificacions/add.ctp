<div class="cuadroVerificacions form">
<?php echo $this->Form->create('CuadroVerificacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Cuadro Verificacion'); ?></legend>
	<?php
		echo $this->Form->input('asignacion_horas');
		echo $this->Form->input('auxiliar_investigacion');
		echo $this->Form->input('bibliografia');
		echo $this->Form->input('coinvestigadores');
		echo $this->Form->input('cronograma');
		echo $this->Form->input('descripcion_gastos');
		echo $this->Form->input('estado_general');
		echo $this->Form->input('estudiantes_investigacion');
		echo $this->Form->input('estrategia_comunicacion');
		echo $this->Form->input('impacto_social');
		echo $this->Form->input('investigador_principal');
		echo $this->Form->input('justificacion');
		echo $this->Form->input('linea_investigacion');
		echo $this->Form->input('marco_teorico');
		echo $this->Form->input('materiales_insumos');
		echo $this->Form->input('metodologia');
		echo $this->Form->input('modalidad');
		echo $this->Form->input('objetivo_general');
		echo $this->Form->input('objetivos_especificos');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('otros_rubros');
		echo $this->Form->input('planteamiento_problema');
		echo $this->Form->input('presentacion_vigencia');
		echo $this->Form->input('presupuesto');
		echo $this->Form->input('resultados_esperados');
		echo $this->Form->input('software_adquirido');
		echo $this->Form->input('titulo');
		echo $this->Form->input('viajes');
		echo $this->Form->input('administrador_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
