<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="">
    <meta name="keywords" content=""/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="{{URL::to('public/frontend/images/logo4.png')}}" />
    
    
    <title>VKU LAPTOP - Uy tín tạo nên thương hiệu</title>

    

    <meta property="og:image" content="{{URL::to('public/frontend/images/logovkulaptop.png')}}" />
    <meta property="og:site_name" content="nta.laptop.vn" />
    <meta property="og:description" content="VKU LAPTOP - cửa hàng Laptop và phụ kiện điện tử chính hãng uy tín hàng đầu khu vực Miền Trung - Tây Nguyên" />
    <meta property="og:title" content="VKU LAPTOP - cửa hàng Laptop và phụ kiện điện tử chính hãng uy tín hàng đầu khu vực Miền Trung - Tây Nguyên" />
    <meta property="og:url" content="http://localhost:8080/laptopvku/" />
    <meta property="og:type" content="website" />



    
 

    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet"> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 123 123 123</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> dung.dev2k@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                            {{-- <a href="index.html"><img src="{{URL::to('public/frontend/images/logo2.png')}}" width="50px" alt="" /><font><font color="red" size="6px">V</font><font color="blue" size="6px">K</font><font color="orange" size="6px">U</font size="6px"></a></font> --}}
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{URL::to('public/frontend/images/logo4.png')}}" width="72px" alt="" />
                        </div>
                        <div class="btn-group pull-right">
                            
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                                
                                <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>

                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if(($customer_id != NULL) && ($shipping_id == NULL)){ 
                                 ?>


                                    <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                

                                <?php
                                 }elseif(($customer_id != NULL) && ($shipping_id != NULL)){
                                 ?>


                                    <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>


                                 <?php 
                                }else{
                                ?>


                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>


                                <?php
                                 }
                                ?>


                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>

                                <?php

                                    $customer_id = Session::get('customer_id');

                                    if($customer_id != NULL){ // đã đăng nhập


                                ?> 
                                    
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>

                                <?php

                                    }else{

                                ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>

                                <?php

                                    }   

                                ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
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

                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li><a href="{{URL::to('/trang-chu')}}">Sản phẩm</a></li>
                
                                </li> 
                                <li><a href="contact-us.html">Tin tức</a></li>
                                    
                                </li> 
                                <li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{URL::to('/search')}}" method="POST">
                            
                            {{csrf_field()}}

                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="Nhập từ khóa cần tìm"/>

                                <button type="submit" name="search-items" class="btn btn-danger"/>Tìm kiếm</button>
                            </div>

                        </form>
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
                            @php
                                $i = 0;
                            @endphp
                            @foreach($banner as $key => $b)
                            @php
                                $i++;
                            @endphp
                            <div class="item {{$i==1 ? 'active' : ''}}">
                                
                                <div class="col-sm-12">
                                    <img src="{{URL::to('public/uploads/banner/'.$b->banner_image)}}" width="100%" class="img img-responsive" alt="{{ $b->banner_desc }}">
                                </div>
                            </div>
                            @endforeach
                            
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
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            @foreach($category as $key => $cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>


                            @endforeach


                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">


                                    @foreach($brand as $key => $brand)


                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
                                    

                                    @endforeach

                                </ul>
                            </div>
                        </div><!--/brands_products-->
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
                            <h2><span class="v">V</span><span class="k">K</span><span class="u">U</span>-LAPTOP</h2>
                            <p>Cửa hàng Laptop và phụ kiện điện tử chính hãng uy tín hàng đầu khu vực Miền Trung - Tây Nguyên</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Sản phẩm hot</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Iphone 13</a></li>
                                <li><a href="#">Iphone 12</a></li>
                                <li><a href="#">Samsung S22</a></li>
                                <li><a href="#">Xiaomi Mi 11</a></li>
                                <li><a href="#">Vivo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Điện thoại</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Iphone</a></li>
                                <li><a href="#">Xiaomi</a></li>
                                <li><a href="#">Oppo</a></li>
                                <li><a href="#">SamSung</a></li>
                                <li><a href="#">Vivo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Laptop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Macbook</a></li>
                                <li><a href="#">Dell</a></li>
                                <li><a href="#">Acer</a></li>
                                <li><a href="#">HP</a></li>
                                <li><a href="#">Asus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Phụ kiện</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tai nghe</a></li>
                                <li><a href="#">Ốp lưng</a></li>
                                <li><a href="#">Sạc</a></li>
                                <li><a href="#">Cường lực</a></li>
                               <li><a href="#">Pin</a></li>
                            </ul>
         
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Khuyến mãi</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Nhập địa chỉ email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Điền email của bạn để nhận thông tin<br>khuyến mãi định kì của chúng tôi ...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    {{-- //plugin chia sẻ FB --}}
                    <div class="fb-like" data-href="http://localhost:8080/laptopvku/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    <p class="pull-right">Copyright © 2022 Laptop VKU. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/">Hữu Dũng </a></span></p>
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

    <script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js.js')}}"></script>


  

    {{-- //Thêm sp vào giỏ --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var _token = $('input[name="_token"]').val();

                if(parseInt(cart_product_qty) > parseInt(cart_product_quantity)){
                    alert('Xin lỗi! Bạn đặt vượt quá số lượng sản phẩm trong kho! Làm ơn đặt nhỏ hơn: '+cart_product_quantity);
                }else{
                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty, cart_product_quantity:cart_product_quantity,_token:_token},
                        success:function(){

                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng!",
                                    text: "Bạn có thể mua hàng tiếp hoặc click vào Giỏ hàng trên Menu để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/show-cart')}}";
                                });

                        }

                    });
                }
            });
        });
    </script>


    {{-- //Chọn tỉnh / huyện / xã --}}
    <script type="text/javascript">

        $(document).ready(function(){

            
            $('.choose').on('change', function(){
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';

                if(action=='city'){
                    result = 'province';
                }else{
                    result = 'wards';
                }

                $.ajax({
                    url : '{{url('/select-delivery-user')}}',
                    method: 'POST',
                    data: {action:action,ma_id:ma_id,_token:_token},
                    success:function(data){
                        $('#'+result).html(data);
                    }
                });
            });

        })

    </script>


    {{-- //Tính phí vận chuyển --}}
    <script type="text/javascript">

        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();

                if(matp == '' && maqh == '' && xaid == ''){
                    alert('Chọn địa chỉ của bạn để tính phí vận chuyển!');
                }else{
                    $.ajax({
                        url : '{{url('/calculate-fee')}}',
                        method: 'POST',
                        data: {matp:matp, maqh:maqh, xaid:xaid, _token:_token},
                        success:function(){
                            location.reload();
                        }
                    });
                }
            });
        });

    </script>

    <script>
        
        $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "Xác nhận đơn hàng",
                  text: "Bạn chắc chắn muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Xác nhận mua",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công!", "success");
                            }
                        });

                        window.setTimeout(function(){ 
                            location.reload();
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, hãy tiếp tục hoàn tất đơn hàng của bạn!", "error");

                      }
              
                });

               
            });
        });

    </script>

    <div class="zalo-chat-widget" data-oaid="2992103033960610476" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
</body>
</html>