<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * getcount_list Model Action
     * @return Value
     */
	function getcount_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM list";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_file Model Action
     * @return Value
     */
	function getcount_file(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM file";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_jadwal Model Action
     * @return Value
     */
	function getcount_jadwal(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM jadwal";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
