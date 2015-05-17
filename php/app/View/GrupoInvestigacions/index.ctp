<div class="grupoInvestigacions index">
	<h2><?php echo __('Grupos de Investigación'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_grupo_investigacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grupoInvestigacions as $grupoInvestigacion): ?>
	<tr>
		<td><?php echo h($grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion']); ?>&nbsp;</td>
		<td><?php echo h($grupoInvestigacion['GrupoInvestigacion']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($grupoInvestigacion['GrupoInvestigacion']['email']); ?>&nbsp;</td>
		<td><?php echo h($grupoInvestigacion['GrupoInvestigacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($grupoInvestigacion['GrupoInvestigacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion']), array(), __('Are you sure you want to delete # %s?', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('action' => 'add')); ?></li>
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
