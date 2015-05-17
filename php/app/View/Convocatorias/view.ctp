<div class="convocatorias view">
<h2><?php echo __('Convocatoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id Convocatoria'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['id_convocatoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Archivo'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['nombre_archivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamano'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['tamano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['fecha_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($convocatoria['Administrador']['nombre_completo'], array('controller' => 'administradors', 'action' => 'view', $convocatoria['Administrador']['id_administrador'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($convocatoria['Convocatoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Convocatoria'), array('action' => 'edit', $convocatoria['Convocatoria']['id_convocatoria'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Convocatoria'), array('action' => 'delete', $convocatoria['Convocatoria']['id_convocatoria']), array(), __('Are you sure you want to delete # %s?', $convocatoria['Convocatoria']['id_convocatoria'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Convocatorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Convocatoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
