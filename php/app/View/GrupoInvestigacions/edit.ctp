<div class="grupoInvestigacions form">
<?php echo $this->Form->create('GrupoInvestigacion'); ?>
	<fieldset>
		<legend><?php echo __('Editar un Grupo de Investigacion'); ?></legend>
	<?php
		echo $this->Form->input('id_grupo_investigacion');
		echo $this->Form->input('nombre');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GrupoInvestigacion.id_grupo_investigacion')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GrupoInvestigacion.id_grupo_investigacion'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Proyectos'), array('controller' => 'grupo_proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Proyecto'), array('controller' => 'grupo_proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('controller' => 'linea_grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('controller' => 'linea_grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patentes'), array('controller' => 'patentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patente'), array('controller' => 'patentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propuesta Convocatorias'), array('controller' => 'propuesta_convocatorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propuesta Convocatoria'), array('controller' => 'propuesta_convocatorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semilleros'), array('controller' => 'semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semillero'), array('controller' => 'semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
