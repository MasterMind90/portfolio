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
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!-- content  -->
		<div id="content">

			<div class="error-page container">

					<div class="error-big">404</div>
					<div class="error-mid">Page not found</div>

					<p class="error-p">You can go back to <?php echo $this->Html->link(__('Home Page'),array('controller'=>'settings','action'=>'home')); ?>.</p>
			</div>
			<!-- End Error Page -->
			

		</div>
		<!-- End content -->


<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
