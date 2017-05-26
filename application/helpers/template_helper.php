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
if(!function_exists('deleteCheckMessage'))
{
	function deleteCheckMessage(bool $status = false, string $msgSuccess = "Eliminado com Sucesso.", string $msgError = "Erro ao eliminar."): string{
		if($status == TRUE){
			return '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Sucesso:</strong> '.$msgSuccess.'</div>';
		}else{
			return '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Erro!</strong> '.$msgError.'</div>';
		} 
	}
}

/**
* CreateToDbCheck 
* @param  bool $status contem o resultado de um delete a base de dados
* @return string com o bootstrap alert
*/
if(!function_exists('CreateToDbCheckMessage'))
{
	function CreateToDbCheckMessage(bool $status = false, string $msgSuccess = "dados inseridos.", string $msgError = "dados não inseridos."): string{
		if($status == TRUE){
			return '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Sucesso:</strong> '.$msgSuccess.'</div>';
		}else{
			return '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Erro!</strong> '.$msgError.'</div>';
		} 
	}
}
?>