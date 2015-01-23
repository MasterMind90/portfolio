<div class="groups view">
<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['group_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Media'); ?></h3>
	<?php if (!empty($group['Media'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Media Name'); ?></th>
		<th><?php echo __('Media Path'); ?></th>
		<th><?php echo __('Media Type'); ?></th>
		<th><?php echo __('Media Title'); ?></th>
		<th><?php echo __('Media Desc'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($group['Media'] as $media): ?>
		<tr>
			<td><?php echo $media['id']; ?></td>
			<td><?php echo $media['media_name']; ?></td>
			<td><?php echo $media['media_path']; ?></td>
			<td><?php echo $media['media_type']; ?></td>
			<td><?php echo $media['media_title']; ?></td>
			<td><?php echo $media['media_desc']; ?></td>
			<td><?php echo $media['group_id']; ?></td>
			<td><?php echo $media['modified']; ?></td>
			<td><?php echo $media['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'media', 'action' => 'view', $media['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'media', 'action' => 'edit', $media['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'media', 'action' => 'delete', $media['id']), null, __('Are you sure you want to delete # %s?', $media['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
