<div class="patentes index">
	<h2><?php echo __('Patentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_patente'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion_autor'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_archivo'); ?></th>
			<th><?php echo $this->Paginator->sort('tamano'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($patentes as $patente): ?>
	<tr>
		<td><?php echo h($patente['Patente']['id_patente']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patente['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $patente['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td><?php echo h($patente['Patente']['identificacion_autor']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['nombre_archivo']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['tamano']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['url']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['created']); ?>&nbsp;</td>
		<td><?php echo h($patente['Patente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patente['Patente']['id_patente'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patente['Patente']['id_patente'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patente['Patente']['id_patente']), array(), __('Are you sure you want to delete # %s?', $patente['Patente']['id_patente'])); ?>
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
		<li><?php echo $this->Html->link(__('New Patente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
