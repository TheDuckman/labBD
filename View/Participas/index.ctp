<div class="participas index">
	<h2><?php echo __('Participas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('permissao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inicio'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($participas as $participa): ?>
	<tr>
		<td><?php echo h($participa['Participa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participa['User']['id'], array('controller' => 'users', 'action' => 'view', $participa['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participa['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $participa['Curso']['id'])); ?>
		</td>
		<td><?php echo h($participa['Participa']['permissao']); ?>&nbsp;</td>
		<td><?php echo h($participa['Participa']['data_inicio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participa['Participa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participa['Participa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participa['Participa']['id']), array(), __('Are you sure you want to delete # %s?', $participa['Participa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
