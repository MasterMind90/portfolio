<div class="media form">
<?php //echo $this->Form->create('Media'); ?>

<?php echo $this->Form->create('Media', array('type'=>'file')); ?>


<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Upload Image'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('media_path',array('type'=>'file','style'=>'width:100%;','label' => false));
	?>
</div>
</div>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Media Title'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('media_title',array('style'=>'width:100%;','label' => false));
	?>
</div>
</div>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Media Description'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->input('media_desc',array('style'=>'width:100%;','label' => false));
	?>
</div>
</div>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Upload'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->end(__('Upload'));
	?>
</div>
</div>
	

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Media'), array('action' => 'index')); ?></li>
	</ul>
</div>
