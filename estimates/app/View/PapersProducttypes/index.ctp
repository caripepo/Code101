<div class="papersProducttypes index">
	<h2><?php echo __('Papers Producttypes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('paper_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producttype_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($papersProducttypes as $papersProducttype): ?>
	<tr>
		<td><?php echo h($papersProducttype['PapersProducttype']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($papersProducttype['Paper']['name'], array('controller' => 'papers', 'action' => 'view', $papersProducttype['Paper']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($papersProducttype['Producttype']['name'], array('controller' => 'producttypes', 'action' => 'view', $papersProducttype['Producttype']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $papersProducttype['PapersProducttype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $papersProducttype['PapersProducttype']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $papersProducttype['PapersProducttype']['id']), array(), __('Are you sure you want to delete # %s?', $papersProducttype['PapersProducttype']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Papers Producttype'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Papers'), array('controller' => 'papers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('controller' => 'producttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producttype'), array('controller' => 'producttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
