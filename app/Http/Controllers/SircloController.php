<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylibs\Cart;

class SircloController extends Controller
{
    public function index(){
		$cart = new Cart;
		$cart->addProduct("White Cap", 2);
		$cart->addProduct("Red Shoes", 1);
		$cart->addProduct("Red Shoes", 4);
		$cart->addProduct("Red Shoes", 2);
		$cart->addProduct("Black Shirt", 3);
		
		$cart->removeProduct("Black Shirt");
		$cart->removeProduct("Green Jacket");
		
		dd($cart->showProduct());
	}
	
}
