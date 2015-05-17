<div class="evaluacions view">
<h2><?php echo __('Evaluacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id Evaluacion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['id_evaluacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cronograma'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['cronograma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Tema'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['estado_tema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estrategias Comunicacion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['estrategias_comunicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Investigador Principal'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['investigador_principal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Impacto Social'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['impacto_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Justificacion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['justificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodologia'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['metodologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivos'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['objetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planteamineto'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['planteamineto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presupuesto'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['presupuesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto Esperado'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['producto_esperado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado Esperado'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['resultado_esperado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calificacion Total'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['calificacion_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto Evaluador'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['concepto_evaluador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Limite Entrega'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['fecha_limite_entrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Entrega'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['fecha_entrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evaluador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evaluacion['Evaluador']['nombre_completo'], array('controller' => 'evaluadors', 'action' => 'view', $evaluacion['Evaluador']['id_evaluador'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluacion'), array('action' => 'edit', $evaluacion['Evaluacion']['id_evaluacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluacion'), array('action' => 'delete', $evaluacion['Evaluacion']['id_evaluacion']), array(), __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id_evaluacion'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluadors'), array('controller' => 'evaluadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluador'), array('controller' => 'evaluadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($evaluacion['Proyecto'])): ?>
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
	<?php foreach ($evaluacion['Proyecto'] as $proyecto): ?>
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
