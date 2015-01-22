<div class="container">
	<br><br><br>
	<div class="row">

		<div class="col-md-6">
			<h1 class="main-title"><?php echo $settings['Setting']['contact_title']; ?></h1>
			<div class="main-border"></div>

			<div class="left-about">
				<p align="justify" style="font-size:130%">
					<?php echo $settings['Setting']['contact_first_body']; ?>
				</p>
				
				
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="main-title"><?php echo $settings['Setting']['contact_second_title']; ?></h1>
			<div class="main-border"></div>

			<div class="left-about">
				<p align="justify" style="font-size:130%">
					<?php echo $settings['Setting']['contact_second_body']; ?>
				</p>
				<br><br><br>
				<?php if ($flag) { ?>
				<span><?php echo $this->Html->link('Edit',array('action'=>'editContact'),array('style'=>'text-decoration:none;color:white' )); ?></span>
				<?php } ?>

			</div>
		</div>
		
	</div>

</div>
