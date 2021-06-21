<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();
use Cart;

class CardController extends Controller
{
    public function save_card(Request $request){
        $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();  
        $productId = $request->productid_hidden; //productid_hidden o show_ct
        $quantity = $request->sl;

        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
        
        $data['id']=$product_info->product_id;
        $data['quantity']=$quantity;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['weight']=$product_info->product_price;
        $data['option']['image']=$product_info->product_image; //cac truong trong Cart. Phai co du cac truong
        Cart::add($data);
        return Redirect::to('/show-card');
      
    }
    public function show_card(Request $request){
         $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();  

        return view('pages.card.show_card')->with('category',$cate_product)->with('brand',$brand_product);//category la ten cua bien o dong 184 trang welcom
       
    }
    public function delete_to_card($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-card');
       
    }
}
