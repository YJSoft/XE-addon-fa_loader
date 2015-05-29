<?php
	if(!defined('__XE__')) return;
	if(!defined('__ZBXE__')) return;

	if( $called_position == 'before_display_content' ) {
		if( $addon_info->fa_usecdn == 'enable' ) {
			Context::addCSSFile('///netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css');
		} else if( $addon_info->fa_set_dev == 'enable' ) {
			Context::addCSSFile('./addons/fa_loader/css/font-awesome.css');
		} else {
			Context::addCSSFile('./addons/fa_loader/css/font-awesome_min.css');
		}
	}