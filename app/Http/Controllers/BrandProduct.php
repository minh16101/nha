<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
      public function add_brand_product(){
            return view('admin.add_brand_product');
    }
    public function all_brand_product(){
        $all_brand_product=DB::table('tbl_brand')->get();
        $manager_brand_product=view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
            return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product);
            
    }
    public function save_brand_product(Request $request){
            $data = array();
            $data['brand_name'] = $request->brand_product_name;
            $data['brand_desc'] = $request->brand_product_desc;
            $data['brand_status'] = $request->brand_product_status;
            DB::table('tbl_brand')->insert($data);
            Session::put('message','Them danh muc san pham thanh cong');
            return Redirect::to('/add-brand-product');
    }
    public function unactive_brand_product(Request $brand_product_id){
            DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
            Session::put('message','Kich hoat san pham thanh cong');
            return Redirect::to('/all-brand-product');   
    }
    public function active_brand_product(Request $brand_product_id){
            DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
            Session::put('message','Khong kich hoat san pham thanh cong');
            return Redirect::to('/all-brand-product');  
    }
    public function edit_brand_product($brand_product_id){
            $edit_brand_product=DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
            $manager_brand_product=view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
            return view('admin_layout')->with('admin.edit_brand_product',$manager_brand_product);
    }
    public function update_brand_product(Request $request, $brand_product_id){
            $data = array();
            $data['brand_name'] = $request->brand_product_name;
            $data['brand_desc'] = $request->brand_product_desc;
            DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
            Session::put('message','Cap nhat san pham thanh cong');
            return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_product_id){
            DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
            Session::put('message','Xoa san pham thanh cong');
            return Redirect::to('/all-brand-product');  
    }
    public function show_brand_home($brand_id)
    {
           $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
           $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();
           $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_product.brand_id',$brand_id)->get();  //join de ghep
           return view('pages.brand.show_brand')->with('category',$cate_product)->with('brand',$brand_product)->with('brand_by_id',$brand_by_id);
    }
}
