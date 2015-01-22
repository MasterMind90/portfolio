<div id="content">
			<div class="index-about">
				<div class="container">
					<?php echo $this->Form->create('Setting', array('type'=>'file')); ?>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Title 1</h1>
						</div>

						<div class="col-md-8">
							<input type="text" placeholder="Title1" name="data[Setting][main_title]" value="<?php echo $settings['main_title']; ?>" style="width:100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Title 2</h1>
						</div>
						<div class="col-md-8">
							<input type="text" placeholder="Title1" name="data[Setting][second_title]" value="<?php echo $settings['second_title']; ?>" style="width:100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Introduction</h1>
						</div>
						<div class="col-md-8">
							<textarea id="test" name="data[Setting][introduction]" class="wysihtml5 col-md-8 form-control" rows="5"><?php echo $settings['introduction']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Upload Photo</h1>
						</div>
						<div class="col-md-8">
							<?php echo $this->Form->input('settings_photo',array('type'=>'file','style'=>'width:100%;','label' => false)); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Submit</h1>
						</div>
						<div class="col-md-8">
							<?php echo $this->Form->end('Submit'); ?>
						</div>
					</div>
					
				</div>
			</div>
			<!-- end index about -->

</div>
<!-- End content -->