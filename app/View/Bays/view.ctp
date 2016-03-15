<div class="bays view">
<h2><?php echo __('Bay'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bay['Bay']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bay['Bay']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bay['Region']['name'], array('controller' => 'regions', 'action' => 'view', $bay['Region']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bay'), array('action' => 'edit', $bay['Bay']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bay'), array('action' => 'delete', $bay['Bay']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bay['Bay']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bays'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bay'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spots'), array('controller' => 'spots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spot'), array('controller' => 'spots', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Spots'); ?></h3>
	<?php if (!empty($bay['Spot'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Depth'); ?></th>
		<th><?php echo __('Bay Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bay['Spot'] as $spot): ?>
		<tr>
			<td><?php echo $spot['id']; ?></td>
			<td><?php echo $spot['name']; ?></td>
			<td><?php echo $spot['depth']; ?></td>
			<td><?php echo $spot['bay_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'spots', 'action' => 'view', $spot['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'spots', 'action' => 'edit', $spot['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'spots', 'action' => 'delete', $spot['id']), array('confirm' => __('Are you sure you want to delete # %s?', $spot['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Spot'), array('controller' => 'spots', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
