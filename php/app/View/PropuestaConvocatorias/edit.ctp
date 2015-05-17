<div class="propuestaConvocatorias form">
<?php echo $this->Form->create('PropuestaConvocatoria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Propuesta Convocatoria'); ?></legend>
	<?php
		echo $this->Form->input('id_propuesta');
		echo $this->Form->input('convocatoria_id');
		echo $this->Form->input('grupo_investigacion_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('nombre_archivo');
		echo $this->Form->input('tamano');
		echo $this->Form->input('url');
		echo $this->Form->input('estado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PropuestaConvocatoria.id_propuesta')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PropuestaConvocatoria.id_propuesta'))); ?></li>
		<li><?php echo $this->Html->link(__('List Propuesta Convocatorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Convocatorias'), array('controller' => 'convocatorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Convocatoria'), array('controller' => 'convocatorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
