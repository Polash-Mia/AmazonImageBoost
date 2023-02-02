@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Product Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf                   
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input"/>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                        </div>  
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="long_description" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" id="horizontal-password-input" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Product Sub Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="sub_image[]" class="form-control-file" id="horizontal-password-input" accept="image/*" multiple/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="mr-3"> <input type="radio" name="status" value="1" checked/> Published </label>
                                <label> <input type="radio" name="status" value="0"/> Unpublished </label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
