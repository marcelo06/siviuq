<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
	<fieldset>
		<legend><?php echo __('Add Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('nombre_completo');
		echo $this->Form->input('cedula');
		echo $this->Form->input('semestre_actual');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('direccion');
		echo $this->Form->input('grupo_investigacion_id');
		echo $this->Form->input('programa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiante Semilleros'), array('controller' => 'estudiante_semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante Semillero'), array('controller' => 'estudiante_semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
