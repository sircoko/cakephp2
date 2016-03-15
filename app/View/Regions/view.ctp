<div class="regions view">
<h2><?php echo __('Region'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($region['Region']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($region['Region']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($region['Region']['country']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Region'), array('action' => 'edit', $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Region'), array('action' => 'delete', $region['Region']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $region['Region']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bays'), array('controller' => 'bays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bay'), array('controller' => 'bays', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bays'); ?></h3>
	<?php if (!empty($region['Bay'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Region Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($region['Bay'] as $bay): ?>
		<tr>
			<td><?php echo $bay['id']; ?></td>
			<td><?php echo $bay['name']; ?></td>
			<td><?php echo $bay['region_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bays', 'action' => 'view', $bay['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bays', 'action' => 'edit', $bay['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bays', 'action' => 'delete', $bay['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bay['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bay'), array('controller' => 'bays', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
