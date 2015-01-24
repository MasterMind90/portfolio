<div class="groups index">
	
	<?php if ($flag) { ?>
	<div class="actions">
		<h3><?php echo __('Add Folder'); ?></h3> <br/>
		<ul>
			<li><?php echo $this->Html->link(__('New Folder'), array('action' => 'add')); ?></li>
		</ul>
		<hr>
	</div>
	<?php } ?>

	<div class="clear"></div>

			<div class="portfolio port4">
			
				
				<div class="filters demo1">
					<div class="filter clearfix">
						<!-- <ul>
							<li><a href="#" class="active" data-filter="*">All</a></li>
							<li><a href="#" data-filter=".class1">Web Design</a></li>
							<li><a href="#" data-filter=".class2">Illustration</a></li>
							<li><a href="#" data-filter=".class3">Applications</a></li>
							<li><a href="#" data-filter=".class4">Branding</a></li>
							<li><a href="#" data-filter=".class5">Photography</a></li>
						</ul> -->
					</div>

					<div class="clear"></div>
					<div class="container clearfix">
						<ul class="filter-container clearfix row">
						<?php foreach($groups as $group){ ?>

							<li class="class1">
								<?php if ($flag){ ?>
								<center>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
									&nbsp;&nbsp;&nbsp;
									<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id']),array('escape'=>false)); ?>
									
									 
								</center>
								<?php } ?>
								<div class="service-item">
								<?php echo $this->Html->link('<i class="fa fa-folder"></i>',array('controller'=>'media','action'=>'index',$group['Group']['id']),array('escape'=>false)); ?>
									<h1><?php echo $group['Group']['group_name']; ?></h1>
								</div>

							</li>	
							<?php } ?>						
						</ul>

						<div class="clear"></div>
					</div>
				</div>

				<div class="clear"></div>

			</div>
			<!-- End Portfilio -->

</div>

<!-- 



<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['group_name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
