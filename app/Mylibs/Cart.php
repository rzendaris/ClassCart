<?php

namespace App\Mylibs;

use stdClass;

class Cart 
{
	
	public $data = array();
	public $duplicate = array();

	public function addProduct($productCode, $quantity){
		$o = new stdClass;
		$o->productCode = $productCode;
		$o->quantity = $quantity;
		$start_push = true;
		if(!empty($this->data)){
			foreach($this->data as $data ) {
				if($data->productCode == $productCode) {
					$data->quantity += $quantity;
					$start_push = false;
				}
			}
		}
		if($start_push){
			array_push($this->data, $o);
		}
		return $this->data;
	}
	
	public function removeProduct($productCode){
		for($x = 1; $x <= (sizeof($this->data) - 1); $x++) {
			if($this->data[$x]->productCode == $productCode) {
				unset($this->data[$x]);
			}
		}
		return $this->data;
	}
	
	
	public function showProduct(){
		return $this->data;
	}
}