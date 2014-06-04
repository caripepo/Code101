<div class="sizes index">
	<h2><?php echo __('Sizes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('width'); ?></th>
			<th><?php echo $this->Paginator->sort('setup'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sizes as $size): ?>
	<tr>
		<td><?php echo h($size['Size']['id']); ?>&nbsp;</td>
		<td><?php echo h($size['Size']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($size['Product']['name'], array('controller' => 'products', 'action' => 'view', $size['Product']['id'])); ?>
		</td>
		<td><?php echo h($size['Size']['height']); ?>&nbsp;</td>
		<td><?php echo h($size['Size']['width']); ?>&nbsp;</td>
		<td><?php echo h($size['Size']['setup']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $size['Size']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $size['Size']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $size['Size']['id']), array(), __('Are you sure you want to delete # %s?', $size['Size']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Size'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
