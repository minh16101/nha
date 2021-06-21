@extends('welcome')
@section('content') 
  <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Danh muc san pham</h2>
                        @foreach($brand_by_id as $key => $product)
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">

                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="250" width="250" alt="" />
                                        <h2>{{number_format($product->product_price)}}</h2>
                                        <p>{{$product->product_name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Mua hang</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->


@endsection