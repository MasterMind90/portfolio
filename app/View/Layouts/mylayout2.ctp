<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		:: Professor Imad :: 
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300');


		// WYSIHTML5
		echo $this->Html->css('assets/css/admin/module.admin.page.form_elements.min'); 
		// WYSIHTML5



		echo $this->Html->css('http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900');
		echo $this->Html->css(array('bootstrap','flexslider','font-awesome','fullwidth','jquery.bxslider','jquery.countdown','jquery.fancybox-1.3.4','responsive','settings','style'));



		// WYSIHTML5
		// echo $this->Html->css('assets/css/admin/module.admin.page.form_elements.min'); 
		echo $this->Html->script('assets/components/library/jquery/jquery.min'); 
		// WYSIHTML5


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
	<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix" id="home">
			<!-- Static navbar -->
			<nav class="navbar navbar-default navbar-static-top">
				
				<!-- end topline -->
				<nav class="navigation">
					<div class="container">
						<div class="logo">
							<a href="index.html"><?php echo $this->Html->image('logo4.png'); ?></a>
						</div>

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">

								<?php 
									if($this->params['controller'] == 'settings' && $this->params['action'] == 'home') { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Home',array('controller'=>'settings','action'=>'home'));
								?>
								

									
									
								</li>

								<?php 
									if( ($this->params['controller'] == 'settings' && $this->params['action'] == 'publication') || ($this->params['controller'] == 'books') || ($this->params['controller'] == 'chapters') || ($this->params['controller'] == 'conferences')   ) { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Publications',array('controller'=>'settings','action'=>'publication'));
								?>


									<ul class="drop-down">
										<li class="drop">
											<?php echo $this->Html->link('Books',array('controller'=>'books','action'=>'index')); ?>
										</li>
										<li class="drop">
											<?php echo $this->Html->link('Conferences',array('controller'=>'conferences','action'=>'index')); ?>
										</li>
										<li class="drop">
											<?php echo $this->Html->link('Journals',array('controller'=>'journals','action'=>'index')); ?>
										</li>
										<li class="drop">
											<?php echo $this->Html->link('Books Chapters',array('controller'=>'chapters','action'=>'index')); ?>
										</li>
										
									</ul>
								</li>

								<?php 
									if( ($this->params['controller'] == 'settings' && $this->params['action'] == 'research') || ($this->params['controller'] == 'interests') || ($this->params['controller'] == 'projects') ) { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Research',array('controller'=>'settings','action'=>'research'));
								?>

								


									<ul class="drop-down">
										<li class="drop">
											<?php echo $this->Html->link('Research Interests',array('controller'=>'interests','action'=>'index')); ?>
										</li>
										<li class="drop">
											<?php echo $this->Html->link('Research Projects',array('controller'=>'projects','action'=>'index')); ?>
										</li>
									</ul>
								</li>

								<?php 
									if($this->params['controller'] == 'settings' && $this->params['action'] == 'patent') { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Patent',array('controller'=>'settings','action'=>'patent'));
								?>

								</li>


								<?php 
									if($this->params['controller'] == 'experiences') { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Teaching',array('controller'=>'experiences','action'=>'index'));
								?>

								
								</li>


								<!-- <li class="drop"><a href="services.html">CV</a>
									<ul class="drop-down">
										<li class="drop"><a href="services2.html">Education</a></li>
										<li class="drop"><a href="services2.html">Career</a></li>
										<li class="drop"><a href="services2.html">Membership</a></li>
										<li class="drop"><a href="services2.html">Collaboration</a></li>
									</ul>
								</li> -->


								
									<?php 
									if($this->params['controller'] == 'media') { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Gallary',array('controller'=>'media','action'=>'index'));
								?>

									
								</li>

								
									<?php 
									if($this->params['controller'] == 'settings' && $this->params['action'] == 'contact') { 
										echo '<li class="active drop">';
									}
									else{
										echo '<li class="drop">';
									}

									echo $this->Html->link('Contact',array('controller'=>'settings','action'=>'contact'));
								?>
									
								</li>

								<li class="drop">
								<?php 
									if ( empty($activeUser) ){
										echo $this->Html->link('LOGIN',array('controller'=>'users','action'=>'login'),array('style'=>'font-weight: bold;font-size: 120%;'));
									}
									else{

										if ( $activeUser['role'] == 'admin'){
											echo $this->Html->link('LOGOUT',array('controller'=>'users','action'=>'LOGOUT'),array('style'=>'font-weight: bold;font-size: 120%;'));
											echo '<ul class="drop-down">';
											echo '<li class="drop">';
											echo $this->Html->link('Users',array('controller'=>'users','action'=>'index'));
											echo '</li>';
											echo '</ul>';
										}
										else{
											echo $this->Html->link('LOGOUT',array('controller'=>'users','action'=>'LOGOUT'),array('style'=>'font-weight: bold;font-size: 120%;'));
										}
										
									}
								?>
								</li>

							</ul>

						
						</div>
					</div>
				</nav>
			</nav>
		</header>
		<!-- End Header -->

		


		<!-- content 
			================================================== -->
		<div id="content">
				<div class="container">

					<?php echo $this->Session->flash(); ?>


					<div class="row">

						

						<div class="col-md-12">

							<?php echo $this->fetch('content'); ?>
							

						</div>

						<!-- End Left About -->	

					</div>

				</div>
			<!-- end index about -->

			

		</div>
		<!-- End content -->

		<!-- footer 
			================================================== -->
		<div style="background-color:red;width:100%;height:50px;position:fixed;bottom:0;left:0;">
			<div class="last-div">
				<div class="container">
					<div class="row">
						<div class="copyright">
							© 2014 By MasterMind  | <a href="#">Developed by MasterMind</a>
						</div>
						<nav class="foot-nav">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Publications</a></li>
								<li><a href="#">Research</a></li>
								<li><a href="#">Patent</a></li>
								<li><a href="#">Teaching</a></li>
								<li><a href="#">CV</a></li>
								<li><a href="#">Gallary</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
						
					</div>

				</div>
			</div>
		</div>
		<!-- End footer -->

		

        </div>

	<?php
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('jquery.bxslider');
		echo $this->Html->script('jquery.fancybox-1.3.4.pack');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('retina-1.1.0.min');
		echo $this->Html->script('plugins-scroll');
		echo $this->Html->script('jquery.parallax');
		echo $this->Html->script('jquery.themepunch.revolution.min');
		echo $this->Html->script('jquery.countTo');
		echo $this->Html->script('script');
	?>

	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			var api = tpj('.fullwidthbanner').revolution(
				{
					delay:8000,
					startwidth:1170,
					startheight:500,

					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:0,
					navigationType:"bullet",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"center",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:30,
					navigationVOffset: 40,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:40,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:40,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off


					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

					hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
					hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
					hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


					fullWidth:"on",

					shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});


				// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
				// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
					api.bind("revolution.slide.onloaded",function (e) {


						jQuery('.tparrows').each(function() {
							var arrows=jQuery(this);

							var timer = setInterval(function() {

								if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
								  arrows.fadeOut(300);
							},3000);
						})

						jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
							jQuery('.tp-simpleresponsive').addClass("mouseisover");
							jQuery('body').find('.tparrows').each(function() {
								jQuery(this).fadeIn(300);
							});
						}, function() {
							if (!jQuery(this).hasClass("tparrows"))
								jQuery('.tp-simpleresponsive').removeClass("mouseisover");
						})
					});
				// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
			});
	</script>
	<script>$(".textarea").wysihtml5();</script>

	<?php

		// WYSIHTML5
		echo $this->Html->script('assets/components/library/bootstrap/js/bootstrap.min');
		echo $this->Html->script('assets/components/modules/admin/forms/editors/wysihtml5/assets/lib/js/wysihtml5-0.3.0_rc2.min');
		echo $this->Html->script('assets/components/modules/admin/forms/editors/wysihtml5/assets/lib/js/bootstrap-wysihtml5-0.0.2');
		echo $this->Html->script('assets/components/modules/admin/forms/editors/wysihtml5/assets/custom/wysihtml5.init');
		// WYSIHTML5





		echo $this->Html->script('jquery.carouFredSel');
		echo $this->Html->script('jquery.mousewheel.min');
		echo $this->Html->script('jquery.touchSwipe.min');
		echo $this->Html->script('styleswitch');
		echo $this->Html->script('style_switch_custom');
	?>
	



	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
