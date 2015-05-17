<div class="cuadroVerificacions index">
	<h2><?php echo __('Cuadro Verificacions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_cuadro_verificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('asignacion_horas'); ?></th>
			<th><?php echo $this->Paginator->sort('auxiliar_investigacion'); ?></th>
			<th><?php echo $this->Paginator->sort('bibliografia'); ?></th>
			<th><?php echo $this->Paginator->sort('coinvestigadores'); ?></th>
			<th><?php echo $this->Paginator->sort('cronograma'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion_gastos'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_general'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiantes_investigacion'); ?></th>
			<th><?php echo $this->Paginator->sort('estrategia_comunicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('impacto_social'); ?></th>
			<th><?php echo $this->Paginator->sort('investigador_principal'); ?></th>
			<th><?php echo $this->Paginator->sort('justificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('linea_investigacion'); ?></th>
			<th><?php echo $this->Paginator->sort('marco_teorico'); ?></th>
			<th><?php echo $this->Paginator->sort('materiales_insumos'); ?></th>
			<th><?php echo $this->Paginator->sort('metodologia'); ?></th>
			<th><?php echo $this->Paginator->sort('modalidad'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo_general'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivos_especificos'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('otros_rubros'); ?></th>
			<th><?php echo $this->Paginator->sort('planteamiento_problema'); ?></th>
			<th><?php echo $this->Paginator->sort('presentacion_vigencia'); ?></th>
			<th><?php echo $this->Paginator->sort('presupuesto'); ?></th>
			<th><?php echo $this->Paginator->sort('resultados_esperados'); ?></th>
			<th><?php echo $this->Paginator->sort('software_adquirido'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('viajes'); ?></th>
			<th><?php echo $this->Paginator->sort('administrador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cuadroVerificacions as $cuadroVerificacion): ?>
	<tr>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['asignacion_horas']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['auxiliar_investigacion']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['bibliografia']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['coinvestigadores']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['cronograma']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['descripcion_gastos']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['estado_general']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['estudiantes_investigacion']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['estrategia_comunicacion']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['impacto_social']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['investigador_principal']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['justificacion']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['linea_investigacion']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['marco_teorico']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['materiales_insumos']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['metodologia']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['modalidad']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['objetivo_general']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['objetivos_especificos']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['otros_rubros']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['planteamiento_problema']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['presentacion_vigencia']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['presupuesto']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['resultados_esperados']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['software_adquirido']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['viajes']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cuadroVerificacion['Administrador']['nombre_completo'], array('controller' => 'administradors', 'action' => 'view', $cuadroVerificacion['Administrador']['id_administrador'])); ?>
		</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($cuadroVerificacion['CuadroVerificacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion']), array(), __('Are you sure you want to delete # %s?', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
