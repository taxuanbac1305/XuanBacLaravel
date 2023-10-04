@extends('admin_layout')
@section('admin_content')



<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Product
                        </header>
                        <div class="panel-body">
                            <?php 
	                            $message = Session::get('message');
	                            if($message){
	                            echo '<span class="text-alert">' ,$message. '</span>';
                                Session::put('message', null);  }                          
	                        ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Product</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Name Product">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Name Product">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Images</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description Product</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="product_decs" id="" placeholder="Product description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Summary</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="product_content" id="" placeholder="Product description"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Product Category</label>
                                  <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate)
                                        <option value="0">{{$cate->category_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Brands</label>
                                  <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach($brand_product as $key => $brand)
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                <label for="exampleInputPassword1">Display Product</label>
                                  <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Hide</option>
                                        <option value="1">Show</option>
                                  </select>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Insert Product</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
 </div>                      
        
@endsection