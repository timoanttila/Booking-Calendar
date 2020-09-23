<?php
namespace App;

class User {

	public $status;
	public $name;
	public $id;

	function set_info($info){
		$this->name = $info[0];
		$this->id = $info[1];
	}

	function get_info(){
		return [
			$this->name,
			$this->id
		];
	}

}
