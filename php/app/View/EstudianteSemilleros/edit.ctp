<div class="estudianteSemilleros form">
<?php echo $this->Form->create('EstudianteSemillero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estudiante Semillero'); ?></legend>
	<?php
		echo $this->Form->input('id_estudiante_semillero');
		echo $this->Form->input('estudiante_id');
		echo $this->Form->input('semillero_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstudianteSemillero.id_estudiante_semillero')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EstudianteSemillero.id_estudiante_semillero'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiante Semilleros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semilleros'), array('controller' => 'semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semillero'), array('controller' => 'semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
