<div class="projects form">
<?php echo $this->Form->create('Project'); ?>



<div class="row">
	<div class="col-md-4">
		<h1 class="main-title"><?php echo __('Edit Project'); ?></h1>
	</div>
	<div class="col-md-8">
		<?php
			echo $this->Form->input('id');
			echo $this->Form->textarea('project_name',array('id'=>'test','class'=>'wysihtml5 col-md-8 form-control','rows'=>'5'));
		?>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<h1 class="main-title"><?php echo __('Submit'); ?></h1>
	</div>
	<div class="col-md-8">
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<h1 class="main-title"><?php echo __('Actions'); ?></h1>
	</div>
	<div class="col-md-8">
		<ul>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		</ul>
	</div>
</div>


</div>