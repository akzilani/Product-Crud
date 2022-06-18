@extends('layouts.app')
@section('title','Insert Product')
@section('content')

<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Product Create</h5></div>
        <div class="ms-auto">
        <a href="/index" class="btn btn-primary custom-head-link"> <i class="fadeIn animated bx bx-undo"></i> Back To Product  List</a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">



            <form action="{{route('/update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label"> Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>


                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">tag <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="tag" value="{{old('tag')}}">
                        <span class="text-danger">{{$errors->first('tag')}}</span>

                    </div>


                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Product Price <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="product_price" value="{{old('product_price')}}">
                        <span class="text-danger">{{$errors->first('product_price')}}</span>

                    </div>


                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Discount Price <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="discount_price" value="{{old('discount_price')}}">
                        <span class="text-danger">{{$errors->first('discount_price')}}</span>

                    </div>

                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Active Price <span class="text-danger">*</span></label>
                        <select class="form-control" name="active_price" id="">
                            <option value="1">Rgular Price</option>
                            <option value="2">Discount Price</option>
                        </select>
                        <span class="text-danger">{{$errors->first('active_price')}}</span>
                    </div>

                    <div class="col-12 col-md-6 py-2">
                        <label for="" class="form-label">Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image">
                        <span class="text-danger">{{$errors->first('image')}}</span>

                    </div>

                    <div class="col-12  py-2">
                        <label for="" class="form-label">Additional Information <span class="text-danger">*</span></label>
                       <textarea name="additional_info" id="" cols="30" rows="10" class="form-control summernote">{{old('additional_info')}}</textarea>
                        <span class="text-danger">{{$errors->first('additional_info')}}</span>

                    </div>

                    <div class="col-12 py-2">
                        <label for="" class="form-label">Short Description <span class="text-danger">*</span></label>
                        <textarea name="short_descriprion" cols="30" rows="10" class="form-control summernote"> {{old('short_descriprion')}}</textarea>
                        <span class="text-danger">{{$errors->first('short_descriprion')}}</span>

                    </div>
                    <div class="col-12 py-2">
                        <label for="" class="form-label">Long Description <span class="text-danger">*</span></label>
                        <textarea name="long_description" cols="30" rows="10" class="form-control summernote"> {{old('long_description')}}</textarea>

                        <span class="text-danger">{{$errors->first('long_description')}}</span>

                    </div>

                    <div class="col-12 text-center mt-5">
                        <a href="" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create</button>

                    </div>
                </div>
            </form>
        </div>
        </div>


    </main>
@endsection
