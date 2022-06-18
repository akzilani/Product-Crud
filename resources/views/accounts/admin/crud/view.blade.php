@extends('layouts.app')
@section('title','View Product')
@section('content')

    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
            <div class="pe-3"><h5 class="text-white m-0">Product View</h5></div>
            <div class="ms-auto">
                <a href="/index" class="btn btn-primary custom-head-link"> <i class="lni lni-circle-plus custom-head-link"></i> Back to Product List</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-border custom-table-css table-border table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{$products->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tag</th>
                                <td>{{$products->tag}}</td>
                            </tr>

                            <tr>
                                <th scope="row"> Product Price</th>
                                <td>{{$products->product_price}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Discount Price</th>
                                <td>{{$products->discount_price}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Status</th>
                                <td>@if ($products->active_price == 1)
                                    <span class="btn btn-primary status-btn">Regular Price</span>
                                @elseif($products->active_price == 2)
                                <span class="btn btn-warning status-btn">Discount Price</span>
                                @endif
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">Short Description</th>
                                <td>{{$products->short_descriprion}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Long Description</th>
                                <td>{{$products->long_description}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Additional Info</th>
                                <td>{!! $products->additional_info !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">Image</th>
                                <td><img src="{{asset($products->image)}}"style="width: 120px; alt=""></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            </div>




            {{-- <div class="card">
                <div class="card-body">
                    <div class="table-responsive mt-3">
                        <table class="table table-border custom-table-css table-border table-hover">
                            <tbody>

                            <tr>
                                <th scope="row">Product Multiple Image</th>
                                <td>
                                @foreach ($product->mutiimage as $item )
                                    <img src="{{ asset( $item->multi_image) }}" alt="image" style="width:120px;" class="mx-2">
                                @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}

     </main>

<!--end page main-->

@endsection
