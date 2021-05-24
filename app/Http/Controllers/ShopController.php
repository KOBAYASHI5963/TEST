<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Area;

class ShopController extends Controller
{
    // //主 -> 従
    public function index(){
    
         $area_tokyo=Area::find(1)->shops;
         //dd($area_tokyo);

    //      //主 <= 従
          $shop=Shop::find(3)->area->name;
         
          //多 : 多
          $shop_route =Shop::find(1)->routes()->get();
          dd($area_tokyo, $shop,$shop_route);
     }
}
