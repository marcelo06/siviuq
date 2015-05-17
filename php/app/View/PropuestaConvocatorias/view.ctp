<div class="propuestaConvocatorias view">
<h2><?php echo __('Propuesta Convocatoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id Propuesta'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Convocatoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propuestaConvocatoria['Convocatoria']['nombre'], array('controller' => 'convocatorias', 'action' => 'view', $propuestaConvocatoria['Convocatoria']['id_convocatoria'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propuestaConvocatoria['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $propuestaConvocatoria['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Archivo'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['nombre_archivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamano'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['tamano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($propuestaConvocatoria['PropuestaConvocatoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Propuesta Convocatoria'), array('action' => 'edit', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Propuesta Convocatoria'), array('action' => 'delete', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta']), array(), __('Are you sure you want to delete # %s?', $propuestaConvocatoria['PropuestaConvocatoria']['id_propuesta'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Propuesta Convocatorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propuesta Convocatoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Convocatorias'), array('controller' => 'convocatorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Convocatoria'), array('controller' => 'convocatorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
