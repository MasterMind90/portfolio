<?php
/*
*   ---------------
*   layout.head.asset.ctp
*   ---------------
*       - The asset loader to be load in the head
*       - include in every layout where necessary
*   Created : 22/03/2014
*   Revision : 22/03/2014
*/
?>
<?php
	//Load the Asset Main CSS
	echo $this->Asset->css('core');
	echo $this->Asset->css('common');

	//Load the plugin before head
	echo $this->Asset->plugin('jquery');
	echo $this->Asset->plugin('modernizr');
	echo $this->Asset->plugin('ie-polyfill');
	echo $this->Asset->plugin('jquery-ui');
	echo $this->Asset->plugin('bootstrap');
	
	//Load the module CSS
	//echo $this->Asset->moduleCSS('modal');
	echo $this->Asset->moduleCSS('plupload');
	echo $this->Asset->moduleCSS('bootstrap-select');
	echo $this->Asset->moduleCSS('datatable');
	echo $this->Asset->moduleCSS('form-validator');
	echo $this->Asset->moduleCSS('input-mask');
	echo $this->Asset->moduleCSS('notyfy');
	echo $this->Asset->moduleCSS('pagination-jquery');
	echo $this->Asset->moduleCSS('wysihtml5');
	echo $this->Asset->moduleCSS('select2');
	echo $this->Asset->moduleCSS('bootstrap-timepicker');
	echo $this->Asset->moduleCSS('jasny-fileupload');
	echo $this->Asset->moduleCSS('fuelux');
	echo $this->Asset->moduleCSS('datepicker');
	

	// Awesome JQuery for project
	echo $this->Html->script('awesome.jquery');
?>