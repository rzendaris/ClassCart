<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylibs\Cart;

class SircloController extends Controller
{
    public function index(){
		$rafi = new Cart;
		$rafi->addProduct("White Cap", 2);
		$rafi->addProduct("Red Shoes", 1);
		$rafi->addProduct("Red Shoes", 4);
		$rafi->addProduct("Red Shoes", 2);
		$rafi->addProduct("Black Shirt", 3);
		
		$rafi->removeProduct("Black Shirt");
		$rafi->removeProduct("Green Jacket");
		
		dd($rafi->showProduct());
	}
	
}
