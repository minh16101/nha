@extends('welcome')
@section('content') 
	<section id="cart_items">
		<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chu</a></li>
				  <li class="active">Thanh toan</li>
				</ol>
			</div>

		
			
			<div class="register-req">
				<p>Moi ban dang ki de mua hang</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
				
					<div class="col-sm-14 clearfix">
						<div class="bill-to">
							<p>Thong tin gui hang</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout')}}" method="post">
									{{csrf_field()}}
									<input type="text" name="shipping_name" placeholder="Ho va ten">
									<input type="text" name="shipping_email" placeholder="Email">
									<input type="text" name="shipping_address" placeholder="Dia chi">
									<input type="text" name="shipping_phone" placeholder="So dien thoai">
									<textarea name="shipping_note"  placeholder="Ghi chu don hang" rows="16"></textarea>
									<input type="submit" name="send" value="Gui" class="btn btn-primary " >
									
								</form>
							</div>
							
							
						</div>
					</div>
									
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
@endsection