<div class="cuadroVerificacions view">
<h2><?php echo __('Cuadro Verificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id Cuadro Verificacion'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asignacion Horas'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['asignacion_horas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auxiliar Investigacion'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['auxiliar_investigacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bibliografia'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['bibliografia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coinvestigadores'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['coinvestigadores']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cronograma'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['cronograma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Gastos'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['descripcion_gastos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado General'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['estado_general']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiantes Investigacion'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['estudiantes_investigacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estrategia Comunicacion'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['estrategia_comunicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Impacto Social'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['impacto_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Investigador Principal'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['investigador_principal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Justificacion'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['justificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea Investigacion'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['linea_investigacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marco Teorico'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['marco_teorico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materiales Insumos'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['materiales_insumos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodologia'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['metodologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidad'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['modalidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo General'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['objetivo_general']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivos Especificos'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['objetivos_especificos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otros Rubros'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['otros_rubros']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planteamiento Problema'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['planteamiento_problema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentacion Vigencia'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['presentacion_vigencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presupuesto'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['presupuesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultados Esperados'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['resultados_esperados']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Software Adquirido'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['software_adquirido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Viajes'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['viajes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuadroVerificacion['Administrador']['nombre_completo'], array('controller' => 'administradors', 'action' => 'view', $cuadroVerificacion['Administrador']['id_administrador'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cuadroVerificacion['CuadroVerificacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuadro Verificacion'), array('action' => 'edit', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuadro Verificacion'), array('action' => 'delete', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion']), array(), __('Are you sure you want to delete # %s?', $cuadroVerificacion['CuadroVerificacion']['id_cuadro_verificacion'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($cuadroVerificacion['Proyecto'])): ?>
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
	<?php foreach ($cuadroVerificacion['Proyecto'] as $proyecto): ?>
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
