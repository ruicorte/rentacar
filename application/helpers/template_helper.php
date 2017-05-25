<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
	 * [setMenuItemActive]
	 *
	 * @return string 
	 */
if(!function_exists('setMenuItemActive'))
{
	function setMenuItemActive(bool $flag = false, bool $dropdown=false): string{
		if($dropdown && $flag){
			return 'class="active dropdown"';
		} else if($dropdown){
			return 'class="dropdown"';
		} else if($flag){
			return 'class="active"';
		}
		return "";
	}
}
?>