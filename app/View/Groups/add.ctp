

<div class="groups form">
<?php echo $this->Form->create('Group'); ?>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Add Folder Name'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('group_name',array('style'=>'width:100%;color:black;font-size: 150%;','label'=>false));
	?>
</div>
</div>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Submit'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->end(__('Submit'));
	?>
</div>
</div>


<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('List Folders'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Html->link(__('List Folders'), array('action' => 'index'));
	?>
</div>
</div>


</div>

