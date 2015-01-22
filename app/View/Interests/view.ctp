<div class="interests view">
<h2><?php echo __('Interest'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interest['Interest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest Name'); ?></dt>
		<dd>
			<?php echo h($interest['Interest']['interest_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($interest['Interest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($interest['Interest']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interest'), array('action' => 'edit', $interest['Interest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interest'), array('action' => 'delete', $interest['Interest']['id']), null, __('Are you sure you want to delete # %s?', $interest['Interest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('action' => 'add')); ?> </li>
	</ul>
</div>
