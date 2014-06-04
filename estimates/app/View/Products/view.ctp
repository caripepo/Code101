<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes'), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sizes'); ?></h3>
	<?php if (!empty($product['Size'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Setup'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Size'] as $size): ?>
		<tr>
			<td><?php echo $size['id']; ?></td>
			<td><?php echo $size['name']; ?></td>
			<td><?php echo $size['product_id']; ?></td>
			<td><?php echo $size['height']; ?></td>
			<td><?php echo $size['width']; ?></td>
			<td><?php echo $size['setup']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sizes', 'action' => 'view', $size['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sizes', 'action' => 'edit', $size['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sizes', 'action' => 'delete', $size['id']), array(), __('Are you sure you want to delete # %s?', $size['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Size'), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
