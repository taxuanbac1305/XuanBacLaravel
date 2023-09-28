@extends('admin_layout')
@section('admin_content')



<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Category product
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Category</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none" rows="6" class="form-control" name="category_product_decs" id="" placeholder="Category description"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Display</label>
                                  <select class="form-control input-sm m-bot15">
                                        <option>Hide</option>
                                        <option>Show</option>
                                  </select>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Insert</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
 </div>                      
        
@endsection