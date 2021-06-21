<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Eating</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>09 123 456</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>nhaanbk@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="#" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Tai Khoan</a></li>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-shopping-cart"></i> Thanh toan</a></li>
                                 <li><a href="{{URL::to('/show-card')}}"><i class="fa fa-shopping-cart"></i> Gio hang</a></li>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Login</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chu</a></li>
                                <li class="dropdown"><a href="#">Menu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                     
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Tin tuc<i class="fa fa-angle-down"></i></a>
                                  
                                </li> 
                                <li><a href="404.html">Gio hang</a></li>
                                <li><a href="contact-us.html">Lien he</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <h1><span>BKFOODY</span></h1>
                                    <h2>Mon ngon moi ngay</h2>
                                    <p>Moi cac ban thuong thuc</p>
                                  <!--  <button type="button" class="btn btn-default get">Get it now</button>-->
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/banh-mi-viet-nam-ngon.jpg')}}" height="400" width="650" />
                                 
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                     <h1><span>BKFOODY</span></h1>
                                    <h2>Mon ngon moi ngay</h2>
                                    <p>Moi cac ban thuong thuc</p>
                                  <!--  <button type="button" class="btn btn-default get">Get it now</button>-->
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('public/frontend/images/2.jpg')}}" height="400" width="650" />
                                
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-4">
                                    <h1><span>BKFOODY</span></h1>
                                    <h2>Mon ngon moi ngay</h2>
                                    <p>Moi cac ban thuong thuc</p>
                                  <!--  <button type="button" class="btn btn-default get">Get it now</button>-->
                                </div>
                                <div class="col-sm-6">
                                    <<img src="{{asset('public/frontend/images/1.png')}}" height="400" width="650" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh muc san pham</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($category as $key => $cate)   <!--$category la ten o trong homecontroller va $cate la ten bien moi-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Thuong hieu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                     @foreach($brand as $key => $brand) 
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Tin nhan cho shop</h2>
                           
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                  
                    @yield('content')
                    
                   
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Nha an sinh vien</span></h2>
                            <p>Cam on ban da den an o nha an chung toi!!</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{asset('public/frontend/images/cam-on-hai-huoc1.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                
                                <h2>5 June 2021</h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
   
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Nha an sinh vien Back Khoa</p>
                  
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>