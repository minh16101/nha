@extends('welcome')
@section('content') 
@foreach($ct_product as $key=>$value)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$value->product_name}}</h2>
								<img src="images/product-details/rating.png" alt="" />
								<form action="{{URL::to('/save-card')}} " method="POST">
								{{csrf_field()}} 
								<span>

									<span>{{number_format($value->product_price)}}</span>
									<label>So luong:</label>
									<input name="sl" type="number" min="1" value="1" /> <!--type number de co dau mui ten-->
									<input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
									<button type="submit" name="save_card" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Mua hang</button>
								</span>
								</form>
								<p><b>Tinh trang:</b> Con hang</p>
								<p><b>Loai:</b> {{$value->brand_name}}</p>
								<p><b>Danh muc:</b> {{$value->category_name}}</p>
							
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
@endforeach
						<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									@foreach($relate as $key => $lq) 
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('public/uploads/product'.$lq->product_image)}}" alt="" />
													<h2>{{number_format($lq->product_price)}}</h2>
													<p>{{number_format($lq->product_price)}}</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
												</div>
											</div>
										</div>
									</div>			
							</div>
							@endforeach
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
@endsection