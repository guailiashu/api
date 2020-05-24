@include('home.layouts._headerTwo')
    <title>研博分校</title>
</head>
<style type="text/css">

    .pic02{
        display: none;
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background:rgba(0, 0, 0, .7);
        z-index:10001;
    }
    .pic02 .enlarged-pic{
        width: 100%;
        height:100%;
    }
    .pic02 div{
        z-index: 99;
        /* width: 500px;
        height: 500px;
        position: absolute;
        top: 50%;
        margin-left: -250px;
        margin-top: -250px;
        left: 50%; */
        width: 50%;
        height: 50%;
        cursor: pointer;
        position: absolute; left: 50%; top: 50%;
        transform: translate(-50%, -50%);    /* 50%为自身尺寸的一半 */
    }
    .pic02 .close-enlarge-pic{
        /* position: absolute; */
        z-index: 100;
        position: absolute;
        left: 75%;
        top:25%;
        transform: translate(-50%, -50%);    /* 50%为自身尺寸的一半 */
        cursor: pointer;
    }
</style>
<body style="background-color: lightblue;">
<div class="shouye" >
    <header id="lk_header">
        <nav class="navbar  navbar-expand-lg navbar-light navbar-lk">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
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
                                    <a style="color: #fff;" class="nav-link nav-link2 " href={{url($name['c_route'])}}>{{ $name['column'] }}</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link nav-link6 color6"  href={{url($name['c_route'])}}>{{ $name['column'] }}</a>
                                </li>

                            @endif

                        @endforeach

                        <li class="nav-item">
                            <a class="nav-link nav-link7 color7" target="_blank"  href="http://shop.jd.com" rel="nofollow">研博商城</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section id="lk_carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#lk_carousel" data-slide-to="1"></li>
            <li data-target="#lk_carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="{{url('/images/slide_01_900x410.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('/images/slide_02_900x410.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="{{url('/images/slide_03_900x410.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>


        <a class="carousel-control-prev" href="#lk_carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#lk_carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

</div>
    <!-- 图片内容 -->
    <!-- 页面传参。哪个分校就展示哪个分校的所有图片，点击小图，全图展示 -->
<div class="container d-flex flex-column align-items-center mt-3">
    <h2 class='new-school-chinese-name'>{{$school}}</h2>
{{--    <h2  class='new-school-english-name'>GuiZhou Branch</h2>--}}
</div>

    <section id="schoolDetail">
        <!--内容-->
        <div class="container">
            <div class="row">

                @foreach($school_data as $school_key=>$school_val)

                    <div class="col-md-4 col-lg-4">
                        <div class=" mb-3  ">
                            <div class="">
                                <img src={{ url('storage/'.$school_val->image_route) }} alt="" class="media-object pic01 img-fluid single-left-img">
                            </div>
                            <div class='image-parent d-flex justify-content-center align-items-center'>
                                <img src={{ url('images/enlarge-pic.png') }} alt="" class='enlarge-pic'>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        {{--         分页--}}
{{--        <div class="fenye container ">--}}
{{--            <nav aria-label="Page navigation example">--}}
{{--                <ul class="pagination justify-content-center">--}}
{{--                    {!! $school_data->render() !!}--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
        {{--         分页--}}

    </section>






<!-- 移动端导航自定义 -->
<div class="mobile_nav">
    <div class="content">



        @foreach($column as $name)
                    <div class="index1">
                        <a {{url($name['c_route'])}}>{{$name['column']}}</a>
                    </div>
        @endforeach

            <div class="index">
                <a href="http://shop.jd.com" rel="nofollow">研博商城</a>
            </div>
    </div>
</div>

<!--------------------尾部-begin------------------------------>
@include('home.layouts._footer')
<!--------------------尾部-end------------------------------>

<div class="pic02">
    <img src="{{url('images/colse.png')}}" alt="" class='close-enlarge-pic'>
    <div>
        <img src="#" alt="" class="enlarged-pic">
    </div>

</div>

<script src={{url("lib/js/jquery-3.3.1.js")}}></script>
<script src={{url("lib/js/popper.js")}}></script>
<script src={{url("lib/js/bootstrap.js")}}></script>
<script src={{url("js/index.js")}}></script>
<script type="text/javascript">
    $(function () {
        let _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
        let urlinfo = window.location.href;//获取url
        $('.mobile_nav').css('height', _height-107)

        //  value = urlinfo.split("?")[1].split("=")[1]; //拆分url得到”=”后面的参数
        //alert("点击了"+decodeURI(value))

        // 点击放大
        $('.pic01').on('click',function(){
            let picSrc =  $(this).attr('src')
            $('.pic02 img').attr('src',picSrc)
            $('.pic02').show()
            $('.pic01').hide()
            $('#lk_footer').hide()
            $('#lk_carousel').hide()
            $('#lk_header').hide()
            $('.fenye').hide()
        })
        $('.pic02').on('click',function(){
            $('.pic02').hide()
            $('.pic01').show()
            $('#lk_footer').show()
            $('#lk_carousel').show()
            $('#lk_header').show()
            $('.fenye').show()
        })
        // 导航跳转
        $('.nav-link2').click(function () {
            // 刷新
            location.reload()
        })

    })
</script>
<script type="text/javascript">
    let body = document.querySelector('body');
    let pageItem = $(".pagination li").not(".prev,.next");
    $(document).on('click', '.prev', function() {
        //1- get first element to check if it has class 'active',
        // to prevent class 'active' from moving to prev button on click,
        // if explanation isn't clear try removing if(){} to see it.
        const first = $(this).siblings().first();
        if (!first.hasClass('active')) {
            $(".prev").removeClass('disabled')
            //2- search <li>'s to get the one that has 'active' class.
            const active = $(this).siblings('.active');
            //3- get the previous item of the <li class"active"> to move to.
            const prevItem = active.prev();
            //4- get href of the item to redirect to.
            const link = prevItem.children('a').prop('href');
            //5- remove 'active' class from the current <li> and give it to prev <li>.
            active.removeClass('active');
            prevItem.addClass('active');
            //6- redirect to href of the new <li>.
            window.location.href = link;
        } else {
            // $(".prev").addClass('disabled')
        }
    });
    $(document).on('click', '.next', function() {
        const last = $(this).siblings().last();
        if (!last.hasClass('active')) {
            const active = $(this).siblings('.active');
            const nextItem = active.next();
            const link = nextItem.children('a').prop('href');
            active.removeClass('active');
            nextItem.addClass('active');
            window.location.href = link;
        }
    });

    pageItem.click(function() {
        pageItem.removeClass("active");
        $(this).not(".prev,.next").addClass("active");
    });
    $('.jump-education-detail').click(function () {
        let url='eduDetail.html'
        let picAlt =  $(this).find('a').attr('rel')
        window.location.href = encodeURI(url + "?value=" + picAlt);
    })
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

    /*绑定touchmove*/
    body.addEventListener('touchmove',function(e){
        // $('.collapse').collapse('hide')
        $('.mobile_nav').fadeOut("slow");
    })
    $('.image-parent').bind('mouseenter',function(){
        $(this).css({
            'opacity':1
        })
    })
    $('.image-parent').bind('mouseleave',function(){
        $(this).css({
            'opacity':0
        })
    })
    $('.enlarge-pic').on('click',function(){
        let picSrc = $(this).parent().siblings().find('.pic01').attr('src')
        $('.pic02').css({
            'display':'block'
        })
        $('.pic02 .enlarged-pic').attr('src',picSrc)
    })
    $('.close-enlarge-pic').on('click',function(){
        $('.pic02').css({
            'display':'none'
        })
        $('.pic02 .enlarged-pic').attr('src','')
    })
</script>
</body>
</html>


