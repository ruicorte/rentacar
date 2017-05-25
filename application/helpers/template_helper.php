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

/**
	 * deleteCheck 
	 * @param  bool $status contem o resultado de um delete a base de dados
	 * @return string com o bootstrap alert
	 */
if(!function_exists('deleteCheck'))
{
	function deleteCheck(bool $status = false): string{
		if($status == TRUE){
				return '<div class="alert alert-success"><strong> Eliminado com Sucesso! </strong></div>';
			}else{
				return '<div class="alert alert-danger"><strong> Erro ao eliminar! </strong></div>';
			} 
	}
}
?>