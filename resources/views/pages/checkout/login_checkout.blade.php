@extends('welcome')
@section('content') 
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Dang nhap</h2>
						<form action="#">
							<input type="text" name="email_account" placeholder="Ten email" />
							<input type="password" name="password_account" placeholder="Mat khau" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nho dang nhap
							</span>
							<button type="submit" class="btn btn-default">Dang nhap</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoac</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Dang ki</h2>
						<form action="{{URL::to('/add-customer')}}" method="post">
							{{csrf_field()}}
							<input type="text" name="customer_name" placeholder="Ten"/>
							<input type="email" name="customer_email" placeholder="Email cua ban"/>
							<input type="password" name="customer_password" placeholder="Nhap mat khau"/>
							<input type="text" name="customer_phone" placeholder="Dien thoai"/>
							<button type="submit" class="btn btn-default">Tao tai khoan</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection