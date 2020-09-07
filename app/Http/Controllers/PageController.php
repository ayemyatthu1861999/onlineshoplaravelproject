<?php

namespace App\Http\Controllers;
use App\Item;
use App\Brand;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public function mainfun($value='')

    {    
    $items=Item::all()->take(6);
     $brands=Brand::all();

     /*$route = Route::current();     
    dd($route);      */    
    //dd($items);                            
    	return view('main',compact('items','brands'));
    }
     public function loginfun($value='')
    {
    	return view('login');
    }
    
    public function registerfun($value='')
    {
    	return view('register');
    }

    public function brandfun($id)
    {
        $brand=Brand::find($id);
        return view('brand',compact('brand'));
    }

    public function itemdetailfun($id)
    {
        $item= Item::find($id);
        return view('itemdetail',compact('item'));
    }

    public function promotionfun($value='')
    {
        return view('promotion');
    }

    public function shoppingcartfun($value='')
    {
        return view('shoppingcart');
    }

    public function subcategoryfun($value='')
    {
        return view('subcategory');
    }

}
