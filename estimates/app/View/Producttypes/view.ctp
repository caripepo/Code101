<div class="producttypes view">
<h2><?php echo __('Producttype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producttype['Producttype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($producttype['Producttype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($producttype['Producttype']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($producttype['Producttype']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producttype'), array('action' => 'edit', $producttype['Producttype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producttype'), array('action' => 'delete', $producttype['Producttype']['id']), array(), __('Are you sure you want to delete # %s?', $producttype['Producttype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producttype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Papers'), array('controller' => 'papers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Papers'); ?></h3>
	<?php if (!empty($producttype['Paper'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Producttype Id'); ?></th>
		<th><?php echo __('Base Cost'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producttype['Paper'] as $paper): ?>
		<tr>
			<td><?php echo $paper['id']; ?></td>
			<td><?php echo $paper['name']; ?></td>
			<td><?php echo $paper['producttype_id']; ?></td>
			<td><?php echo $paper['base_cost']; ?></td>
			<td><?php echo $paper['created']; ?></td>
			<td><?php echo $paper['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'papers', 'action' => 'view', $paper['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'papers', 'action' => 'edit', $paper['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'papers', 'action' => 'delete', $paper['id']), array(), __('Are you sure you want to delete # %s?', $paper['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
