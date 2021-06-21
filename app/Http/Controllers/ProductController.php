<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();



class ProductController extends Controller
{
     public function add_product(){   
            $cate_product = DB::table('tbl_category')->orderby('category_id','desc')->get();  
            $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();  
            
            return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    
    }
    public function all_product(){
        $all_product=DB::table('tbl_product')->orderby('product_id','desc')->get();//orderby la ham de sap xep theo 1 thu tu nao do
        $manager_product=view('admin.all_product')->with('all_product',$all_product);
            return view('admin_layout')->with('admin.all_product',$manager_product);
            
    }
    public function save_product(Request $request){
            $data = array();
            $data['product_name'] = $request->product_name;
            $data['product_price'] = $request->product_price;
            $data['product_desc'] = $request->product_desc;
            $data['product_content'] = $request->product_content;
            $data['category_id'] = $request->product_cate;
            $data['brand_id'] = $request->product_brand;
            $data['product_status'] = $request->product_status;

            $get_image = $request->file('product_image');
            if($get_image){
                    $get_name_image = $get_image->getClientOriginalName(); //de file anh co ten
                    $name_image = current(explode('.',$get_name_image));
                    $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();//ten file anh la so va duoi la jpg dua vao ham get
                    $get_image->move('public/uploads/product',$new_image);//cho anh vua to vao anh moi
                    $data['product_image'] = $new_image; //cho anh moi vao CSDL
                    DB::table('tbl_product')->insert($data);
                    Session::put('message','Them san pham thanh cong');
                    return Redirect::to('/add-product');
            }
            $data['product_image'] = '';
            DB::table('tbl_product')->insert($data);
            Session::put('message','Them san pham thanh cong');
            return Redirect::to('/add-product');
    }
    public function unactive_product(Request $product_id){
            DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
            Session::put('message','Kich hoat san pham thanh cong');
            return Redirect::to('/all-product');   
    }
    public function active_product(Request $product_id){
            DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
            Session::put('message','Khong kich hoat san pham thanh cong');
            return Redirect::to('/all-product');   
    }
    public function edit_product($product_id){
            $cate_product = DB::table('tbl_category')->orderby('category_id','desc')->get();  
            $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();  
            $edit_product=DB::table('tbl_product')->where('product_id',$product_id)->get();
            $manager_product=view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('brand_product',$brand_product);
            return view('admin_layout')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $request, $product_id){
            $data = array();
            $data['product_name'] = $request->product_name;
            $data['product_price'] = $request->product_price;
            $data['product_desc'] = $request->product_desc;
            $data['product_content'] = $request->product_content;
            $data['category_id'] = $request->product_cate;
            $data['brand_id'] = $request->product_brand;
            $data['product_status'] = $request->product_status;
            $get_image = $request->file('product_image');
            if($get_image){
                    $get_name_image = $get_image->getClientOriginalName(); //de file anh co ten
                    $name_image = current(explode('.',$get_name_image));
                    $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();//ten file anh la so va duoi la jpg dua vao ham get
                    $get_image->move('public/uploads/product',$new_image);//cho anh vua to vao anh moi
                    $data['product_image'] = $new_image; //cho anh moi vao CSDL
                    DB::table('tbl_product')->where('product_id',$product_id)->update($data);
                    Session::put('message','Cap nhat san pham thanh cong');
                    return Redirect::to('/all-product');
            }
        
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','Cap nhat san pham thanh cong');
            return Redirect::to('/all-product');
    }
    public function delete_product($product_id){
            DB::table('tbl_product')->where('product_id',$product_id)->delete();
            Session::put('message','Xoa san pham thanh cong');
            return Redirect::to('/all-product');  
    }
    public function chi_tiet($product_id)
    {
        $cate_product = DB::table('tbl_category')->where('category_status',0)->orderby('category_id','desc')->get();  //lay khi categoryststus=0 sau do sap xep thoe thu tu
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderby('brand_id','desc')->get();
        $ct_product=DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')//join de ket noi
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id',$product_id)->get();

        foreach($ct_product as $key => $value) {
            // code...
            $category_id = $value->category_id;
        }
       

        $related_product=DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')//join de ket noi
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category.category_id',$category_id)->get(); //lay ra tat ca san pham da lay ra duoc tu category tren kia
        return view('/pages.sanpham.show_ct')->with('category',$cate_product)->with('brand',$brand_product)->with('ct_product',$ct_product)->with('relate',$related_product);
    }
}
