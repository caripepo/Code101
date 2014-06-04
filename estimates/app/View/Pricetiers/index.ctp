<div class="pricetiers index">
	<h2><?php echo __('Pricetiers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('adjustment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pricetiers as $pricetier): ?>
	<tr>
		<td><?php echo h($pricetier['Pricetier']['id']); ?>&nbsp;</td>
		<td><?php echo h($pricetier['Pricetier']['name']); ?>&nbsp;</td>
		<td><?php echo h($pricetier['Pricetier']['adjustment']); ?>&nbsp;</td>
		<td><?php echo h($pricetier['Pricetier']['created']); ?>&nbsp;</td>
		<td><?php echo h($pricetier['Pricetier']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pricetier['Pricetier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pricetier['Pricetier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pricetier['Pricetier']['id']), array(), __('Are you sure you want to delete # %s?', $pricetier['Pricetier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pricetier'), array('action' => 'add')); ?></li>
	</ul>
</div>
