<div class="administradors form">
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
		<legend><?php echo __('Add Administrador'); ?></legend>
	<?php
		echo $this->Form->input('nombre_completo');
		echo $this->Form->input('cedula');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('descripcion_cargo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('controller' => 'cuadro_verificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
