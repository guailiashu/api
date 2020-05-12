@include('home.layouts._header')
    <title>关于研博</title>
</head>
<body style="">
<div class="shouye">
    <header id="lk_header">

        <nav class="navbar navbar-expand-lg navbar-light navbar-lk">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
                    <img src="images/Yanbo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lk_nav" aria-controls="lk_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="lk_nav">
                    <ul class="navbar-nav mr-auto">
{{--                        <li class="nav-item active">--}}
{{--                            <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1" href="index.html">首页<span class="sr-only">(current)</span></a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link2" href="ybSchool.html">分校</a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item">--}}
{{--                            <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link3" href="education.html">学历</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link4" href="news.html">新闻</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link5" href="active.html">公益</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: #fff;" class="nav-link nav-link6" href="about.html">关于研博</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link nav-link7 color7" target="_blank" href="http://shop.jd.com">研博商城</a>--}}
{{--                        </li>--}}

                        @foreach($column as $name)

                            @if($name->c_route == 'home/index')
                                <li class="nav-item active">
                                    <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1" href={{route($name->c_route)}}>{{$name->column}}<span class="sr-only">(current)</span></a>
                                </li>
                            @elseif($name->c_route == 'home/about')
                                <li class="nav-item">
                                    <a style="color: #fff;" class="nav-link nav-link6" href={{route($name->c_route)}}>{{$name->column}}</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link nav-link6 color6"  href={{route($name->c_route)}}>{{$name->column}}</a>
                                </li>
                            @endif

                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- 背景图  pc端540px，移动端375px -->
    <img class="d-none d-sm-block" src="images/about.png" style="width: 100%;height: 540px;">
    <img class="visible-xs-block d-sm-none" src="images/about.png" style="width: 100%;height: 375px;">
</div>

<!-- 关于研博内容 -->
<div style="position: absolute;top:540px;"></div>

<!-- 移动端导航自定义 -->
<div class="mobile_nav">
    <div class="content">


        @foreach($column as $name)

            <div class="index">
                <a href={{route($name->c_route)}}>{{$name->column}}</a>
            </div>

        @endforeach
    </div>
</div>

<!--------------------服务介绍-begin------------------------------>
<section id="lk_introduction">
    <!--标题-->
    <div class="container introduction mb-3">
        <h2>研博教育</h2>
        <h2>综合性教育服务平台</h2>
        <div class="textword">
            武汉研博智学信息科技有限公司成立于2019年3月，是研博教育集团旗下独立运营中心，专注于成人教育、课程培训、资格证报考认证、人才培养等综合性公共教育服务；研博教育集团秉承“教育以人为本，坚持规范办学，服务学生满意”的教育理念，为学员提供先进教学服务，致力于帮助个人和社会获得更多更好的教育和发展机会，提高学员的职场竞争力。目前已培训数万名学员，遍及中国多个大中城市。
        </div>
    </div>
</section>
<!--------------------服务介绍-end------------------------------>


<!--------------------企业文化-end------------------------------>
<section id="yb_culture">
    <!--标题-->
    <div class="container title">
        <h2>企业文化</h2>
        <h2>竭力为学院打造一个放心、舒适的平台</h2>
    </div>

    <!-- 内容 -->
    <div class="container">



        <div class="row">
            @foreach($about_data as $data_key=>$data_val)
                <div class="col-md-3 col-lg-3 {{$data_val->e_title}}">
                    <div class="media d-flex flex-column   mb-3  ">
                        <div class="media-body ">
                            <h3 class="media-heading mt-3">
                                {{$data_val->title}}
                            </h3>
                            <p class="text-muted">
                                {{$data_val->e_title}}
                            </p>
                        </div>
                        <div class="media-left mr-2">
                            <img src="{{'storage/'. $data_val->image}}" alt="" class="media-object  img-fluid ">
                        </div>

                    </div>
                </div>
            @endforeach
{{--            <div class="col-md-3 col-lg-3 Efficient">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            高效--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            Efficient--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/effcience.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-lg-3 Aggressive">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            进取--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            Aggressive--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/progress.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-lg-3 Legneds">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            传承--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            Legneds--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/extend.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

        </div>

    </div>

</section>


<!--------------------企业文化-end------------------------------>


<!--------------------发展历程-end------------------------------>
<section id="yb_develope" style="background-color: #F4F4F4;padding:60px 0;">
    <!--标题-->

    <div class="container title">
        <h2>发展历程</h2>
        <h2>教育以人为本、坚持规范办学、服务学生满意</h2>
    </div>


    <!-- 内容 -->
    <div class="container">

        <div class="row">
            @foreach($courses_data as $courses_key=>$courses_val)
                <div class="col-md-3 col-lg-3 Responsibility">
                    <div class="media d-flex flex-column   mb-3  ">
                        <div class="media-body ">
                            <h3 class="media-heading mt-3">
                                {{$courses_val->title}}
                            </h3>
                            <p class="text-muted">
                                {{$courses_val->time}}
                            </p>
                        </div>
                        <div class="media-left mr-2">
                            <img src={{'storage/'. $courses_val->image}} alt="" class="media-object  img-fluid ">
                        </div>

                    </div>
                </div>
            @endforeach
{{--            <div class="col-md-3 col-lg-3 Efficient">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            生存--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2011--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/effcience.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-lg-3 Aggressive">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            焦虑--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2012--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/progress.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-lg-3 Legneds">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            蓄势--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2013--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/extend.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-lg-3 Responsibility">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            沉淀--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2014--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/duty.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-lg-3 Efficient">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            渐进--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2015--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/effcience.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-lg-3 Aggressive">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            收获--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2016--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/progress.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-lg-3 Legneds">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            影响--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2017--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/extend.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-lg-3 Responsibility">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            责任--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2018--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/duty.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-lg-3 Efficient">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            拼搏--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2019--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/effcience.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-lg-3 Aggressive">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            飞跃--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2020--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/progress.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-lg-3 Legneds">--}}
{{--                <div class="media d-flex flex-column   mb-3  ">--}}
{{--                    <div class="media-body ">--}}
{{--                        <h3 class="media-heading mt-3">--}}
{{--                            辉煌--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted">--}}
{{--                            2021~未来--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="media-left mr-2">--}}
{{--                        <img src="images/extend.png" alt="" class="media-object  img-fluid ">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

        </div>

    </div>

</section>


<!--------------------发展历程-end------------------------------>


<!--------------------联系我们-end------------------------------>
<section id="yb_contact">
    <div class="container">
        <h2>联系我们</h2>
        <h3>地址:湖北省武汉市洪山区珞瑜路889-1号30楼（整层）</h3>
    </div>

</section>

<!--------------------尾部-begin------------------------------>
@include('home.layouts._footer')
<!--------------------尾部-end------------------------------>


<!--------------------联系我们-end------------------------------>
<script src="lib/js/jquery-3.3.1.js"></script>
<script src="lib/js/popper.js"></script>
<script src="lib/js/bootstrap.js"></script>
<script src="js/index.js"></script>
<script type="text/javascript">
    $(function() {
        var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
        $('.mobile_nav').css('height', _height-107)

        //console.log(Date())
        // 导航跳转
        // $('.nav-link1').click(function () {
        //  $(location).attr('href', '/pc-mb/index.html');
        // })
        // $('.nav-link2').click(function () {

        //   $(location).attr('href', '/pc-mb/ybSchool.html');
        // })
        // $('.nav-link3').click(function () {
        // 	$(location).attr('href', '/pc-mb/education.html');

        // })
        // $('.nav-link4').click(function () {
        // 	 $(location).attr('href', '/pc-mb/news.html');

        // })
        // $('.nav-link5').click(function () {
        // 	 $(location).attr('href', '/pc-mb/active.html');
        // })
        $('.nav-link6').click(function() {
            // 刷新
            location.reload()

        })


    })
</script>
<script type="text/javascript">
    if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $(function() {

            // $('#lk_header .collapse').css("background-color", "black")
            $('#lk_header .collapse').hide()
            $('.navbar-toggler').click(function(){
                $('.mobile_nav').toggle()
            })

        })

    } else {
        // $('#lk_header .collapse').css("background-color", "none")
        $('.mobile_nav').hide()
    }

    // 判断触摸滑动事件
    var body = document.querySelector('body');
    /*绑定touchmove*/
    body.addEventListener('touchmove', function(e) {
        // console.log('touchmove');
        // console.log(e.isTrusted);

        // $('.collapse').collapse('hide')
        $('.mobile_nav').fadeOut("slow");
    })
</script>
</body>
</html>
