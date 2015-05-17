<div class="docentes view">
<h2><?php echo __('Docente'); ?></h2>
	<dl>
		<dt><?php echo __('Id Docente'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['id_docente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['nombre_completo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clasificacion'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['clasificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dedicacion'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['dedicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anio Vinculacion'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['anio_vinculacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docente['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $docente['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($docente['Docente']['representante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docente['Programa']['nombre'], array('controller' => 'programas', 'action' => 'view', $docente['Programa']['id_programa'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Docente'), array('action' => 'edit', $docente['Docente']['id_docente'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Docente'), array('action' => 'delete', $docente['Docente']['id_docente']), array(), __('Are you sure you want to delete # %s?', $docente['Docente']['id_docente'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($docente['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Proyecto'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th><?php echo __('Cedula Estudiante1'); ?></th>
		<th><?php echo __('Cedula Estudiante2'); ?></th>
		<th><?php echo __('Cedula Estudiante3'); ?></th>
		<th><?php echo __('Nombre Completo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Prorroga'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Resultado Esperado'); ?></th>
		<th><?php echo __('Resultado'); ?></th>
		<th><?php echo __('Codigo Aprobacion'); ?></th>
		<th><?php echo __('Codigo Inscripcion'); ?></th>
		<th><?php echo __('Consecutivo'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th><?php echo __('Evaluacion Id'); ?></th>
		<th><?php echo __('Modalidad'); ?></th>
		<th><?php echo __('Linea Investigacion Id'); ?></th>
		<th><?php echo __('Cuadro Verificacion Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docente['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['id_proyecto']; ?></td>
			<td><?php echo $proyecto['docente_id']; ?></td>
			<td><?php echo $proyecto['cedula_estudiante1']; ?></td>
			<td><?php echo $proyecto['cedula_estudiante2']; ?></td>
			<td><?php echo $proyecto['cedula_estudiante3']; ?></td>
			<td><?php echo $proyecto['nombre_completo']; ?></td>
			<td><?php echo $proyecto['descripcion']; ?></td>
			<td><?php echo $proyecto['duracion']; ?></td>
			<td><?php echo $proyecto['objetivo']; ?></td>
			<td><?php echo $proyecto['prorroga']; ?></td>
			<td><?php echo $proyecto['estado']; ?></td>
			<td><?php echo $proyecto['ciudad']; ?></td>
			<td><?php echo $proyecto['resultado_esperado']; ?></td>
			<td><?php echo $proyecto['resultado']; ?></td>
			<td><?php echo $proyecto['codigo_aprobacion']; ?></td>
			<td><?php echo $proyecto['codigo_inscripcion']; ?></td>
			<td><?php echo $proyecto['consecutivo']; ?></td>
			<td><?php echo $proyecto['administrador_id']; ?></td>
			<td><?php echo $proyecto['evaluacion_id']; ?></td>
			<td><?php echo $proyecto['modalidad']; ?></td>
			<td><?php echo $proyecto['linea_investigacion_id']; ?></td>
			<td><?php echo $proyecto['cuadro_verificacion_id']; ?></td>
			<td><?php echo $proyecto['created']; ?></td>
			<td><?php echo $proyecto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id_proyecto'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id_proyecto'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id_proyecto']), array(), __('Are you sure you want to delete # %s?', $proyecto['id_proyecto'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
