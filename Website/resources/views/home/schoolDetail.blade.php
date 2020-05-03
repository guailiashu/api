<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href={{ url('lib/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ url('css/index.css') }}>
    <title>研博分校</title>
</head>
<style type="text/css">

    .pic02{
        display: none;
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background:rgba(255, 255, 255, 0.678);
    }
    .pic02 img{
        z-index: 99;
        /* width: 500px;
         height: 500px;
         position: absolute;
         top: 50%;
         margin-left: -250px;
         margin-top: -250px;
         left: 50%; */
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
</style>
<body style="background-color: lightblue;">
<div class="shouye" >
    <header id="lk_header">
        <nav class="navbar  navbar-expand-lg navbar-light navbar-lk">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-center align-items-center" href={{url("")}}>
                    <img src={{url("images/Yanbo.png")}} alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lk_nav"
                        aria-controls="lk_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse  navbar-collapse" id="lk_nav">
                    <ul class="navbar-nav mr-auto">
{{--                        <li class="nav-item active">--}}
{{--                            <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1 " href={{url("index.html")}}>首页<span class="sr-only">(current)</span></a>--}}
{{--                        </li>--}}


                        @foreach($column as $c_key=>$name)

                            @if('index' == $name['c_route'])

                                <li class="nav-item active">
                                    <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1 " href={{url($name['c_route'])}}>{{ $name['column'] }}<span class="sr-only">(current)</span></a>
                                </li>

                            @elseif('school'== $name['c_route'])
                                <li class="nav-item ">
                                    <a style="color: #fff;" class="nav-link nav-link2 " href="#">{{ $name['column'] }}</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link nav-link6 color6"  href={{url($name['c_route'])}}>{{ $name['column'] }}</a>
                                </li>

                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- 图片内容 -->
    <!-- 页面传参。哪个分校就展示哪个分校的所有图片，点击小图，全图展示 -->
    <section id="schoolDetail">
        <!--内容-->
        <div class="container">
            <div class="row">

                @foreach($school_data as $school_key=>$school_val)
                    <div class="col-md-4 col-lg-3">
                        <div class="media d-flex flex-column align-items-center  mb-3  ">
                            <div class="media-left mr-2">
                                <img src={{ url($school_val->image_route) }} alt="" class="media-object pic01 img-fluid ">


                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>



</div>

<!-- 移动端导航自定义 -->
<div class="mobile_nav">
    <div class="content">



        @foreach($column as $name)
                    <div class="index1">
                        <a {{url($name['c_route'])}}>{{$name['column']}}</a>
                    </div>
        @endforeach

{{--        <div class="index">--}}
{{--            <a href={{url("")}}>研博商城</a>--}}
{{--        </div>--}}
    </div>
</div>

<div class="pic02">
    <img src={{url("")}}#" alt="">
</div>




<script src={{url("lib/js/jquery-3.3.1.js")}}></script>
<script src={{url("lib/js/popper.js")}}></script>
<script src={{url("lib/js/bootstrap.js")}}></script>
<script src={{url("js/index.js")}}></script>
<script type="text/javascript">
    $(function () {

        var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
        $('.mobile_nav').css('height', _height-107)



        // var urlinfo = window.location.href,//获取url
        //     value = urlinfo.split("?")[1].split("=")[1]; //拆分url得到”=”后面的参数
        // console.log(decodeURI(value))
        // alert("点击了"+decodeURI(value))

        // 点击放大
        $('.pic01').on('click',function(){
            var picSrc =  $(this).attr('src')
            $('.pic02 img').attr('src',picSrc)
            $('.pic02').show()
            $('.pic01').hide()
        })
        $('.pic02').on('click',function(){
            $('.pic02').hide()
            $('.pic01').show()
        })


        // 导航跳转
        // $('.nav-link1').click(function () {
        //  $(location).attr('href', 'index.html');
        // })
        $('.nav-link2').click(function () {

            // 刷新
            location.reload()
        })
        // $('.nav-link3').click(function () {
        // 	 $(location).attr('href', 'education.html');
        // })
        // $('.nav-link4').click(function () {
        // 	 $(location).attr('href', 'news.html');
        // })
        // $('.nav-link5').click(function () {
        // 	 $(location).attr('href', 'active.html');
        // })
        // $('.nav-link6').click(function () {
        // 	 $(location).attr('href', 'about.html');
        // })




    })
</script>
<script type="text/javascript">
    if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $(function(){

            //$('#lk_header .collapse').css("background-color", "black")

            $('#lk_header .collapse').hide()
            $('.navbar-toggler').click(function(){
                $('.mobile_nav').toggle()
            })

        })

    }else{
        // $('#lk_header .collapse').css("background-color", "none")
        $('.mobile_nav').hide()
    }

    // 判断触摸滑动事件
    var body = document.querySelector('body');
    /*绑定touchmove*/
    body.addEventListener('touchmove',function(e){
        // console.log('touchmove');
        // console.log(e.isTrusted);

        // $('.collapse').collapse('hide')
        $('.mobile_nav').fadeOut("slow");
    })




</script>
</body>
</html>

