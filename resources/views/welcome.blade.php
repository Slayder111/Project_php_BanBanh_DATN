<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$meta_title}} </title>

    <!--seo meta-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />

      <meta property="og:image" content="{{$image_og}}" />
      <meta property="og:site_name" content="thiatv.com" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" />



    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/assets/dest/vendors/colorbox/example3/colorbox.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="frontend/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="frontend/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="frontend/assets/dest/css/style.css">
    <link rel="stylesheet" href="frontend/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="frontend/assets/dest/css/huong-style.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="js/sweetalert.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="shortcut icon" href="http://streaming1.danviet.vn/images/2014/favicon.png?v=1.00" />
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.1-web/css/all.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" title="style" href="css/mystyle.css">

</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
    @include('layout.header')
    <div class="rev-slider">

        @yield('noidung')




    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">SHIP HÀNG & LIÊN HỆ</h4>
                        <div>
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Hotline đặt hàng:0325788889</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Hotline khiếu nại:032896666</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Liên hệ mua sỉ:0328849966</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Gửi góp ý</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Thông tin về shop</h4>
                        <div>
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Bản đồ</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Chương trình khách hàng</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Nguyên liệu làm bánh</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Đồ làm bánh</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Hộp bánh</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Blog hướng dẫn</h4>
                        <div>
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Kiến thức cơ bản về đồ làm bánh</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Công thức hướng dẫn làm bánh</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Công thức làm chè, kem, đồ uống</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Làm bánh không cần lò nướng</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Theo dõi</h4>
                        <form action="#" method="post">
                            <input type="email" name="your_email">
                            <button class="pull-right" type="submit">Theo dõi<i class="fa fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #footer -->

    <!-- include js files -->
    <script src="frontend/assets/dest/js/jquery.js"></script>
    <script src="frontend/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="frontend/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="frontend/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="frontend/assets/dest/vendors/animo/Animo.js"></script>
    <script src="frontend/assets/dest/vendors/dug/dug.js"></script>
    <script src="frontend/assets/dest/js/scripts.min.js"></script>
    <script src="frontend/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="frontend/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="frontend/assets/dest/js/waypoints.min.js"></script>
    <script src="frontend/assets/dest/js/wow.min.js"></script>
    <!--customjs-->
    <script src="frontend/assets/dest/js/custom2.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

   <!--  <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script>

    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
            $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
    </script>
   <script>
    function convertMsg(msg) {
        msg = msg.toLowerCase();
        msg = msg.charAt(0).toUpperCase() + msg.slice(1);
        return msg;
    }
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.info("{{ Session::get('message') }}");
                toastr.options.timeOut = 4000;
                break;

            case 'warning':
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 4000;
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 4000;
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 4000;
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
    // @if(Session::has('message'))
    //     var type = "{{ Session::get('alert-type', 'info') }}";
    //     switch(type){
    //         case 'info':
    //             toastr.info("{{ Session::get('message') }}");
    //             break;

    //         case 'warning':
    //             toastr.warning("{{ Session::get('message') }}");
    //             break;

    //         case 'success':
    //             toastr.options.positionClass = 'toast-bottom-right';
    //             toastr.success("{{ Session::get('message') }}");
    //             break;

    //         case 'error':
    //             toastr.options.positionClass = 'toast-bottom-right';
    //             toastr.error("{{ Session::get('message') }}");
    //             break;
    //     }
    //   @endif
  </script>


    @yield('scrip')


</body>

</html>
