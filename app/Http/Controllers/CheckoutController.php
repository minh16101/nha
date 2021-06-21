<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();  
        return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('brand',$brand_product);//category la ten cua bien o dong 184 trang welcom
    }
    public function add_customer(Request $request) //dang ki
    {
        $data = array();
           //  $data['customer_id'] = ko ghi truong nay vi id la private
        $data['customer_name'] = $request->customer_name; //customer_name la ten ham o trong login_checkout
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password); 
        $data['customer_phone'] = $request->customer_phone;
        $customer_id = DB::table('tbl_customers')->insertGetId($data); //lay ra Id moi nhat
        Session::put('customer_id',$customer_id); 
        Session::put('customer_name',$request->customer_name); 
        return Redirect::to('/checkout');
    }
    public function checkout(){
          $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();  
           return view('pages.checkout.show_checkout')->with('category',$cate_product)->with('brand',$brand_product);//category la ten cua bien o dong 184 trang welcom
    }
    public function save_checkout(Request $request){
        $data = array();
           //  $data['customer_id'] = ko ghi truong nay vi id la private
        $data['shipping_name'] = $request->shipping_name; //customer_name la ten ham o trong login_checkout
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_note'] = $request->shipping_note; 
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data); //lay ra Id moi nhat
        Session::put('shipping',$shipping_id); 
       
        return Redirect::to('/payment');

    }

}
