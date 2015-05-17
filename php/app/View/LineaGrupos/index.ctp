<div class="lineaGrupos index">
	<h2><?php echo __('Linea Grupos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_linea_grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('linea_investigacion_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lineaGrupos as $lineaGrupo): ?>
	<tr>
		<td><?php echo h($lineaGrupo['LineaGrupo']['id_linea_grupo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lineaGrupo['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $lineaGrupo['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($lineaGrupo['LineaInvestigacion']['nombre'], array('controller' => 'linea_investigacions', 'action' => 'view', $lineaGrupo['LineaInvestigacion']['id_linea_investigacion'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lineaGrupo['LineaGrupo']['id_linea_grupo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lineaGrupo['LineaGrupo']['id_linea_grupo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lineaGrupo['LineaGrupo']['id_linea_grupo']), array(), __('Are you sure you want to delete # %s?', $lineaGrupo['LineaGrupo']['id_linea_grupo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('controller' => 'linea_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('controller' => 'linea_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
