<div class="grupoProyectos index">
	<h2><?php echo __('Grupo Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_grupo_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grupoProyectos as $grupoProyecto): ?>
	<tr>
		<td><?php echo h($grupoProyecto['GrupoProyecto']['id_grupo_proyecto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupoProyecto['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $grupoProyecto['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($grupoProyecto['Proyecto']['nombre_completo'], array('controller' => 'proyectos', 'action' => 'view', $grupoProyecto['Proyecto']['id_proyecto'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grupoProyecto['GrupoProyecto']['proyecto_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupoProyecto['GrupoProyecto']['proyecto_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupoProyecto['GrupoProyecto']['proyecto_id']), array(), __('Are you sure you want to delete # %s?', $grupoProyecto['GrupoProyecto']['proyecto_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Grupo Proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
