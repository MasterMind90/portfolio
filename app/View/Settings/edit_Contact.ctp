<div id="content">
			<div class="index-about">
				<div class="container">
					<?php echo $this->Form->create(); ?>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Title 1</h1>
						</div>

						<div class="col-md-8">
							<input type="text" placeholder="Title1" name="data[Setting][contact_title]" value="<?php echo $settings['contact_title']; ?>" style="width:100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Body 1</h1>
						</div>
						<div class="col-md-8">
							<!-- contact_first_body -->
							<textarea id="test" name="data[Setting][contact_first_body]" class="wysihtml5 col-md-8 form-control" rows="5"><?php echo $settings['contact_first_body']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Title 2</h1>
						</div>
						<div class="col-md-8">
							<input type="text" placeholder="Title1" name="data[Setting][contact_second_title]" value="<?php echo $settings['contact_second_title']; ?>" style="width:100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h1 class="main-title">Body 2</h1>
						</div>
						<div class="col-md-8">
							<textarea id="test2" name="data[Setting][contact_second_body]" class="wysihtml5 col-md-8 form-control" rows="5"><?php echo $settings['contact_second_body']; ?></textarea>
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