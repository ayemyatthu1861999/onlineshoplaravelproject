<?php

namespace App\Http\Controllers;
use App\Item;
use App\Brand;
use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

//use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public function mainfun($value='')

    {    

        $discountItems = Item::where('discount','>',0)->take(6)->get();
    $brands = Brand::take(6)->get();
    $categories = Category::take(8)->get();

    return view('main',compact('discountItems','brands','categories'));
    
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
    public function filteritems($id)
  {
    $subcategory = Subcategory::find($id);
    $subcategory->setRelation('items', $subcategory->items()->paginate(3));
    return view('filteritems',compact('subcategory'));
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
