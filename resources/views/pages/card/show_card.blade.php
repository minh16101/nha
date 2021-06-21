@extends('welcome')
@section('content') 
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chu</a></li>
				  <li class="active">Thanh toan</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
				$content= Cart::getContent();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hinh anh</td>
							<td class="description"></td>
							<td class="price">Gia tien</td>
							<td class="quantity">So luong</td>
							<td class="total">Tong tien:</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								
							</td>
							<td class="cart_description">
								<h4><a href="">{{($v_content->name)}}</a></h4>
								<p>{{($v_content->id)}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' '.'VND'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{($v_content->quantity)}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
									$tong=$v_content->price * $v_content->quantity;
									echo number_format($tong);
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-card/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Hoa don khach hang</h3>
				<p>Vui long kiem tra</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						
						<ul class="user_info">
							
							<li class="single_field zip-field">
								<label>Ma giam gia:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Nhan ma</a>
						<a class="btn btn-default check_out" href="">Tiep tuc</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tong tien<span>{{CART::getSubTotal().' '.'VND'}}</span></li>
							<li>Phi van chuyen <span>Free</span></li>
							<li>Thanh tien <span>{{CART::getSubTotal().' '.'VND'}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

@endsection