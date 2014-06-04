<div class="papers view">
<h2><?php echo __('Paper'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producttype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paper['Producttype']['name'], array('controller' => 'producttypes', 'action' => 'view', $paper['Producttype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Cost'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['base_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paper['Paper']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paper'), array('action' => 'edit', $paper['Paper']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paper'), array('action' => 'delete', $paper['Paper']['id']), array(), __('Are you sure you want to delete # %s?', $paper['Paper']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Papers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('controller' => 'producttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producttype'), array('controller' => 'producttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Producttypes'); ?></h3>
	<?php if (!empty($paper['Producttype'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paper['Producttype'] as $producttype): ?>
		<tr>
			<td><?php echo $producttype['id']; ?></td>
			<td><?php echo $producttype['name']; ?></td>
			<td><?php echo $producttype['created']; ?></td>
			<td><?php echo $producttype['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'producttypes', 'action' => 'view', $producttype['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'producttypes', 'action' => 'edit', $producttype['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'producttypes', 'action' => 'delete', $producttype['id']), array(), __('Are you sure you want to delete # %s?', $producttype['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producttype'), array('controller' => 'producttypes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
