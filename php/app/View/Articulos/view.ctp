<div class="articulos view">
<h2><?php echo __('Articulo'); ?></h2>
	<dl>
		<dt><?php echo __('Id Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['id_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamano'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['tamano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articulo['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $articulo['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion Autor'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['identificacion_autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articulo'), array('action' => 'edit', $articulo['Articulo']['id_articulo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articulo'), array('action' => 'delete', $articulo['Articulo']['id_articulo']), array(), __('Are you sure you want to delete # %s?', $articulo['Articulo']['id_articulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
