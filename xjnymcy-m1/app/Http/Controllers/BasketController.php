<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index() {

        return view('basket.index');
    }
    
   public function checkout() {
        return view('basket.checkout');
    }
    
    public function add(Request $request, $id) {
    	$basket_id = $request->coocie('basket_id');
    	$quantity = $request->input('quantity')?? 1;
    	
    	if (empty($basket_id)){
    	$basket = Basket::create();
    	$basket_id = $basket->id; 
    }
		else{
		$basket = Basket::findOrFail($basket_id);
		$basket->touch();
	}
		if($basket->tovar->contains($id)){
		$peivotRow = $basket -> tovars()->where('tovar_id, $id')->first()->pivot;
		$quantity = $pivotRow -> quantity+$quantity;
		$privotRow->update(['quantity'=> $quantity]);
	}
	else{
		$basket->tovar()->attach($id, ['quantity'=> $quantity]);
	}
	return back()->withCoocie(coocie('basket_id', $basket_id, 525600));
		

}
}

