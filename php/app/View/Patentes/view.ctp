<div class="patentes view">
<h2><?php echo __('Patente'); ?></h2>
	<dl>
		<dt><?php echo __('Id Patente'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['id_patente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patente['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $patente['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion Autor'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['identificacion_autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Archivo'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['nombre_archivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamano'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['tamano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patente['Patente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patente'), array('action' => 'edit', $patente['Patente']['id_patente'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patente'), array('action' => 'delete', $patente['Patente']['id_patente']), array(), __('Are you sure you want to delete # %s?', $patente['Patente']['id_patente'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
