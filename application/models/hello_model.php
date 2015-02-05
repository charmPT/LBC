<?php if (!defined('BASEPATH')) die();


class Hello_model extends CI_Model
{
	public function getProfile($name)
	{
		return array("fullName" -> "Charm", "age" -> 26);
	}


}

?>