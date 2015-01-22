<div class="conferences view">
<h2><?php echo __('Conference'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference Name'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['conference_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($conference['Conference']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conference'), array('action' => 'edit', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conference'), array('action' => 'delete', $conference['Conference']['id']), null, __('Are you sure you want to delete # %s?', $conference['Conference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('action' => 'add')); ?> </li>
	</ul>
</div>
