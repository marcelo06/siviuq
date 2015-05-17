<div class="grupoProyectos form">
<?php echo $this->Form->create('GrupoProyecto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grupo Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('id_grupo_proyecto');
		echo $this->Form->input('grupo_investigacion_id');
		echo $this->Form->input('proyecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GrupoProyecto.proyecto_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GrupoProyecto.proyecto_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
