<div class="media view">
<h2><?php echo __('Media'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($media['Media']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Name'); ?></dt>
		<dd>
			<?php echo h($media['Media']['media_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Path'); ?></dt>
		<dd>
			<?php echo h($media['Media']['media_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Type'); ?></dt>
		<dd>
			<?php echo h($media['Media']['media_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Title'); ?></dt>
		<dd>
			<?php echo h($media['Media']['media_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Desc'); ?></dt>
		<dd>
			<?php echo h($media['Media']['media_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($media['Group']['group_name'], array('controller' => 'groups', 'action' => 'view', $media['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($media['Media']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($media['Media']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Media'), array('action' => 'edit', $media['Media']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Media'), array('action' => 'delete', $media['Media']['id']), null, __('Are you sure you want to delete # %s?', $media['Media']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
