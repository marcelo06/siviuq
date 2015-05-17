<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('docente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula_estudiante1'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula_estudiante2'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula_estudiante3'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_completo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('duracion'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo'); ?></th>
			<th><?php echo $this->Paginator->sort('prorroga'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('resultado_esperado'); ?></th>
			<th><?php echo $this->Paginator->sort('resultado'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_aprobacion'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_inscripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('consecutivo'); ?></th>
			<th><?php echo $this->Paginator->sort('administrador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evaluacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modalidad'); ?></th>
			<th><?php echo $this->Paginator->sort('linea_investigacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cuadro_verificacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo h($proyecto['Proyecto']['id_proyecto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Docente']['nombre_completo'], array('controller' => 'docentes', 'action' => 'view', $proyecto['Docente']['id_docente'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['cedula_estudiante1']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['cedula_estudiante2']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['cedula_estudiante3']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['nombre_completo']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['duracion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['objetivo']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['prorroga']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['estado']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['resultado_esperado']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['resultado']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['codigo_aprobacion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['codigo_inscripcion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['consecutivo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Administrador']['nombre_completo'], array('controller' => 'administradors', 'action' => 'view', $proyecto['Administrador']['id_administrador'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($proyecto['Evaluacion']['id_evaluacion'], array('controller' => 'evaluacions', 'action' => 'view', $proyecto['Evaluacion']['id_evaluacion'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['modalidad']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['LineaInvestigacion']['nombre'], array('controller' => 'linea_investigacions', 'action' => 'view', $proyecto['LineaInvestigacion']['id_linea_investigacion'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($proyecto['CuadroVerificacion']['id_cuadro_verificacion'], array('controller' => 'cuadro_verificacions', 'action' => 'view', $proyecto['CuadroVerificacion']['id_cuadro_verificacion'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['created']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proyecto['Proyecto']['id_proyecto'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proyecto['Proyecto']['id_proyecto'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proyecto['Proyecto']['id_proyecto']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id_proyecto'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('controller' => 'linea_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('controller' => 'linea_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('controller' => 'cuadro_verificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Softwares'), array('controller' => 'registro_softwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Software'), array('controller' => 'registro_softwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
