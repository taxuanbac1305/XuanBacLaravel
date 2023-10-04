@extends('admin_layout')
@section('admin_content')



<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Brand Product
                        </header>
                        <div class="panel-body">
                            <?php 
	                            $message = Session::get('message');
	                            if($message){
	                            echo '<span class="text-alert">' ,$message. '</span>';
                                Session::put('message', null);  }                          
	                        ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Brand</label>
                                    <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Name brand">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="brand_product_decs" id="" placeholder="Brand description"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Display</label>
                                  <select name="brand_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Hide</option>
                                        <option value="1">Show</option>
                                  </select>
                                </div>
                                <button type="submit" name="add_brand_product" class="btn btn-info">Insert Brand</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
 </div>                      
        
@endsection