<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
	 * [setMenuItemActive]
	 *
	 * @return string 
	 */
if(!function_exists('setMenuItemActive'))
{
	function setMenuItemActive($flag = false)
	{
		return $flag ? 'class="active"' : '';
	}
}
?>