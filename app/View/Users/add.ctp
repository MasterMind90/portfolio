
<div class="journals form">
<?php echo $this->Form->create('User'); ?>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Username'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('username',array('style'=>'width:100%;color:black;font-size: 150%;','label' => false));
	?>
</div>
</div>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Password'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('password',array('style'=>'width:100%;color:black;font-size: 150%;','label' => false));
	?>
</div>
</div>


<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Role'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('role', array('options' => array('admin' => 'Admin','author'=>'Author'),'label' => false));
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
	<h1 class="main-title"><?php echo __('List Users'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Html->link(__('List Users'), array('action' => 'index'));
	?>
</div>
</div>


</div>

