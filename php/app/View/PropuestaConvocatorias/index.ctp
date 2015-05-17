<div class="propuestaConvocatorias index">
	<h2><?php echo __('Propuesta Convocatorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_propuesta'); ?></th>
			<th><?php echo $this->Paginator->sort('convocatoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('Descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('Descargar Archivo'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($propuestaConvocatorias as $propuestaConvocatoria): ?>
	<tr>
		<td><?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propuestaConvocatoria['Convocatoria']['nombre'], array('controller' => 'convocatorias', 'action' => 'view', $propuestaConvocatoria['Convocatoria']['id_convocatoria'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($propuestaConvocatoria['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $propuestaConvocatoria['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td><?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['descripcion']); ?>&nbsp;</td>
		<?php $archivo=  $propuestaConvocatoria['PropuestaConvocatoria']['nombre_archivo'];?>
		<td><?php echo $this->Html->link(__($archivo), array('action' => 'download', $archivo)); ?> </td>
		<td><?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['estado']); ?>&nbsp;</td>
		<td><?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['created']); ?>&nbsp;</td>
		<td><?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta']), array(), __('Are you sure you want to delete # %s?', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta'])); ?>
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
		<li><?php echo $this->Html->link(__('New Propuesta Convocatoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Convocatorias'), array('controller' => 'convocatorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Convocatoria'), array('controller' => 'convocatorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
