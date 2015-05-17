<div class="estudiantes index">
	<h2><?php echo __('Estudiantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_estudiante'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_completo'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre_actual'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('programa_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td><?php echo h($estudiante['Estudiante']['id_estudiante']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['nombre_completo']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['semestre_actual']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['email']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['direccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estudiante['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $estudiante['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estudiante['Programa']['nombre'], array('controller' => 'programas', 'action' => 'view', $estudiante['Programa']['id_programa'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estudiante['Estudiante']['id_estudiante'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiante['Estudiante']['id_estudiante'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiante['Estudiante']['id_estudiante']), array(), __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id_estudiante'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiante Semilleros'), array('controller' => 'estudiante_semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante Semillero'), array('controller' => 'estudiante_semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
