@extends('admin_layout')
@section('admin_content')



<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Brand Product
                        </header>
                        <div class="panel-body">
                            @foreach($edit_brand_product as $key => $edit_value)
                            <?php 
	                            $message = Session::get('message');
	                            if($message){
	                            echo '<span class="text-alert">' ,$message. '</span>';
                                Session::put('message', null);  }                          
	                        ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name brand</label>
                                    <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Name brand">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="brand_product_decs" id="" >{{$edit_value->brand_name}}</textarea>
                                </div>
                                

                                <button type="submit" name="add_brand_product" class="btn btn-info">Update brand</button>
                            </form>
                            </div>

                            @endforeach
                        </div>
                    </section>
            </div>
 </div>                      
        
@endsection