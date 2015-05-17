<div class="docentes form">
<?php echo $this->Form->create('Docente'); ?>
	<fieldset>
		<legend><?php echo __('Add Docente'); ?></legend>
	<?php
		echo $this->Form->input('nombre_completo');
		echo $this->Form->input('clasificacion');
		echo $this->Form->input('cedula');
		echo $this->Form->input('dedicacion');
		echo $this->Form->input('anio_vinculacion');
		echo $this->Form->input('grupo_investigacion_id');
		echo $this->Form->input('representante');
		echo $this->Form->input('programa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
