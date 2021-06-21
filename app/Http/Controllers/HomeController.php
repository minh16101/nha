<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();  
        $all_product=DB::table('tbl_product')->where('product_status',0)->orderby('product_id','desc')->limit(6)->get();//orderby la ham de sap xep theo 1 thu tu tang dan va limit de lay max 4 san pham
      
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product); //tra ve pages voi 2 bien vua tao //category la ten cua bien o dong 184 trang welcom
    }
}
