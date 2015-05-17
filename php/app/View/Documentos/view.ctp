<div class="documentos view">
<h2><?php echo __('Documento'); ?></h2>
	<dl>
		<dt><?php echo __('Id Documento'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['id_documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamano'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['tamano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documento['Proyecto']['nombre_completo'], array('controller' => 'proyectos', 'action' => 'view', $documento['Proyecto']['id_proyecto'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($documento['Documento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Documento'), array('action' => 'edit', $documento['Documento']['id_documento'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Documento'), array('action' => 'delete', $documento['Documento']['id_documento']), array(), __('Are you sure you want to delete # %s?', $documento['Documento']['id_documento'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
