
				<div class="container">

					<div class="row">

						

						<div class="col-md-6">
							<h1 class="main-title"><?php echo $settings['Setting']['main_title']; ?></h1>
							<div class="main-border"></div>

							<div class="left-about">

								<?php 
								if ( empty($settings['Setting']['settings_photo']) ){
									echo $this->Html->image('uploads/home/avatar.png'); 
								}
								else echo $this->Html->image($settings['Setting']['settings_photo'],array('width'=>'400px')); ?>
								
							</div>
						</div>
						<div class="col-md-6">
							<h1 class="main-title"><?php echo $settings['Setting']['second_title']; ?></h1>
							<div class="main-border"></div>

							<div class="left-about">
								<p align="justify" style="font-size:130%"><?php echo $settings['Setting']['introduction']; ?></p>
								
								<!-- <ul class="site-features">
									<li><i class="fa fa-check-square-o"></i>100% Fully responsive layout, looks good on any type of device.</li>
									<li><i class="fa fa-check-square-o"></i>Multiple layout styles for home pages, portfolio and blog section</li>
									<li><i class="fa fa-check-square-o"></i>A lot of page elements, so it’s easy to customize your layout</li>
									<li><i class="fa fa-check-square-o"></i>We can offer you best solutions in the web</li>
								</ul> -->
								<br><br><br>
								<?php if ($flag) { ?>
								<span><?php echo $this->Html->link('Edit',array('action'=>'editHome'),array('style'=>'text-decoration:none;color:white' )); ?></span>
								<?php } ?>

							</div>
						</div>
						
						

						


						<!-- End Left About -->

						

					</div>

				</div>
