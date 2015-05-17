<div class="grupoProyectos view">
<h2><?php echo __('Grupo Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id Grupo Proyecto'); ?></dt>
		<dd>
			<?php echo h($grupoProyecto['GrupoProyecto']['id_grupo_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupoProyecto['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $grupoProyecto['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupoProyecto['Proyecto']['nombre_completo'], array('controller' => 'proyectos', 'action' => 'view', $grupoProyecto['Proyecto']['id_proyecto'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo Proyecto'), array('action' => 'edit', $grupoProyecto['GrupoProyecto']['proyecto_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupo Proyecto'), array('action' => 'delete', $grupoProyecto['GrupoProyecto']['proyecto_id']), array(), __('Are you sure you want to delete # %s?', $grupoProyecto['GrupoProyecto']['proyecto_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
