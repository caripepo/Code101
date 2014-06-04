<div class="papersProducttypes view">
<h2><?php echo __('Papers Producttype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($papersProducttype['PapersProducttype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paper'); ?></dt>
		<dd>
			<?php echo $this->Html->link($papersProducttype['Paper']['name'], array('controller' => 'papers', 'action' => 'view', $papersProducttype['Paper']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producttype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($papersProducttype['Producttype']['name'], array('controller' => 'producttypes', 'action' => 'view', $papersProducttype['Producttype']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Papers Producttype'), array('action' => 'edit', $papersProducttype['PapersProducttype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Papers Producttype'), array('action' => 'delete', $papersProducttype['PapersProducttype']['id']), array(), __('Are you sure you want to delete # %s?', $papersProducttype['PapersProducttype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Papers Producttypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Papers Producttype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Papers'), array('controller' => 'papers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('controller' => 'producttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producttype'), array('controller' => 'producttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
