<div class="patentes form">
<?php echo $this->Form->create('Patente'); ?>
	<fieldset>
		<legend><?php echo __('Add Patente'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('grupo_investigacion_id');
		echo $this->Form->input('identificacion_autor');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('nombre_archivo');
		echo $this->Form->input('tamano');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Patentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
