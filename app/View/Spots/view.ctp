<div class="spots view">
<h2><?php echo __('Spot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Depth'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['depth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bay'); ?></dt>
		<dd>
			<?php echo $this->Html->link($spot['Bay']['name'], array('controller' => 'bays', 'action' => 'view', $spot['Bay']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Spot'), array('action' => 'edit', $spot['Spot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Spot'), array('action' => 'delete', $spot['Spot']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $spot['Spot']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spot'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bays'), array('controller' => 'bays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bay'), array('controller' => 'bays', 'action' => 'add')); ?> </li>
	</ul>
</div>
