<div class="lineaGrupos form">
<?php echo $this->Form->create('LineaGrupo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Linea Grupo'); ?></legend>
	<?php
		echo $this->Form->input('id_linea_grupo');
		echo $this->Form->input('grupo_investigacion_id');
		echo $this->Form->input('linea_investigacion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LineaGrupo.id_linea_grupo')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LineaGrupo.id_linea_grupo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('controller' => 'linea_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('controller' => 'linea_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
