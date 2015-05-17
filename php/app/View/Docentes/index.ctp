<div class="docentes index">
	<h2><?php echo __('Docentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_docente'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_completo'); ?></th>
			<th><?php echo $this->Paginator->sort('clasificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('dedicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('anio_vinculacion'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('representante'); ?></th>
			<th><?php echo $this->Paginator->sort('programa_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($docentes as $docente): ?>
	<tr>
		<td><?php echo h($docente['Docente']['id_docente']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['nombre_completo']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['clasificacion']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['dedicacion']); ?>&nbsp;</td>
		<td><?php echo h($docente['Docente']['anio_vinculacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $docente['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td><?php echo h($docente['Docente']['representante']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['Programa']['nombre'], array('controller' => 'programas', 'action' => 'view', $docente['Programa']['id_programa'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $docente['Docente']['id_docente'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docente['Docente']['id_docente'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docente['Docente']['id_docente']), array(), __('Are you sure you want to delete # %s?', $docente['Docente']['id_docente'])); ?>
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
		<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
