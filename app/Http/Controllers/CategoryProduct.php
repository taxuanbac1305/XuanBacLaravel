<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();


class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id =  Session::get('admin_id');
        if ($admin_id){
            return Redirect::to('dashboard');

        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_category_product(){
        $this->AuthLogin();

        return view('admin.add_category_product');
    }
    public function all_category_product(){
        $this->AuthLogin();

        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout ')->with('admin.all_category_product',$manager_category_product);
    }
    public function save_category_product(Request $request){
        $this->AuthLogin();

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_decs;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->Insert($data);
        Session::put('message', 'Successfully');
        return Redirect::to('add-category-product');

    }
    public function unactive_category_product( $category_product_id){
        $this->AuthLogin();

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>1]);
        Session::put('message', 'Product category active failed');
        return Redirect::to('all-category-product');
    }
    public function active_category_product( $category_product_id){
        $this->AuthLogin();

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>0]);
        Session::put('message', 'Product category active successfully');
        return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id) {
        $this->AuthLogin();

        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('admin_layout ')->with('admin.edit_category_product',$manager_category_product);


    }
    public function update_category_product(Request $request, $category_product_id) {
        $this->AuthLogin();

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_decs;

        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message', 'Update product category successfully');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id) {
        $this->AuthLogin();

        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message', 'Delete product category successfully');
        return Redirect::to('all-category-product');
    }



}
