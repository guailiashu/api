@include('home.layouts._header')
<title>新闻动态</title>
</head>
<body style="background-color:#F4F4F4">
<div class="shouye" >
    <header id="lk_header">

        <nav class="navbar navbar-expand-lg navbar-light navbar-lk">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
                    <img src="images/Yanbo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lk_nav"
                        aria-controls="lk_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="lk_nav">
                    <ul class="navbar-nav mr-auto">


                        @foreach($column as $name)

                            @if($name->c_route == 'home/index')
                                <li class="nav-item active">
                                    <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1" href={{route($name->c_route)}}>{{$name->column}}<span class="sr-only">(current)</span></a>
                                </li>
                            @elseif($name->c_route == 'home/news')
                                <li class="nav-item">
                                    <a style="color: #fff;" class="nav-link nav-link4" href={{route($name->c_route)}}>{{$name->column}}</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link nav-link6 color6"  href={{route($name->c_route)}}>{{$name->column}}</a>
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
    <!--------------------轮播图-begin------------------------------>
    @include('home.layouts._banner')
    <!--------------------轮播图-end------------------------------>
</div>
<!-- 研博新闻内容 -->
<div style="position: absolute;top: 540px;"></div>

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


<section id="yb_news2">
    <div class="container-fluid" style="background-color: #fff;padding: 30px 0;box-shadow:0px 3px 6px rgba(0,0,0,0.16);">


        <div class="container">
            <ul class="nav nav-pills  d-flex justify-content-center " id="pills-tab" role="tablist">

                {{--                    首层--}}
                @foreach($type_data as $type_key=>$type_val)

                    @if('yb_news' == $type_val->type_name)
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="{{"#".$type_val->type_name }}" role="tab" aria-controls="pills-home" aria-selected="true">研博新闻</a>
                        </li>
                    @elseif('edu_news' == $type_val->type_name)

                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="{{"#".$type_val->type_name }}" role="tab" aria-controls="pills-profile" aria-selected="false">教育新闻</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="tab-content" id="pills-tabContent">


            {{--                     对应分层--}}
            @foreach($type_data as $type_key=>$type_val)

                @if('yb_news' == $type_val->type_name)

                    <div class="tab-pane fade show active" id="yb_news" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!--  研博新闻内容 -->
                        <!--内容-->
                        <div class="container container1">
                            <div class="row">



                                @foreach($data as $data_key=>$data_val)

                                    @if($type_val->type_name == $data_val->type_name )
                                        <div class="col-md-4 col-lg-4">

                                            <div class="media d-flex flex-column   mb-3  ">
                                                <div class="media-left mr-2">
                                                    <img src="{{'storage/'.$data_val->image}}" alt="" class="media-object  img-fluid ">
                                                </div>
                                                <div class="media-body ">
                                                    <h6 class="media-heading mt-3" alt="{{ $data_val->id }}">
                                                        {{$data_val->title}}
                                                    </h6>
                                                    <p class="text-muted">
                                                        {{ $data_val->updated_at}}

                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @endforeach



                            </div>
                        </div>

                    </div>

                @elseif('edu_news' == $type_val->type_name)

                    <div class="tab-pane fade" id="edu_news" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <!-- 教育新闻内容 -->
                        <!--内容-->
                        <div class="container container2">
                            <div class="row">

                                @foreach($data as $data_key=>$data_val)

                                    @if($type_val->type_name == $data_val->type_name )
                                        <div class="col-md-4 col-lg-4">

                                            <div class="media d-flex flex-column   mb-3  ">
                                                <div class="media-left mr-2">
                                                    <img src="{{'storage/'.$data_val->image}}" alt="" class="media-object  img-fluid ">
                                                </div>
                                                <div class="media-body ">
                                                    <h6 class="media-heading mt-3" alt="{{ $data_val->id }}">
                                                        {{$data_val->title}}
                                                    </h6>
                                                    <p class="text-muted">
                                                        {{ $data_val->updated_at}}

                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    @endif
                                @endforeach


                            </div>
                        </div>


                    </div>


                @endif

            @endforeach

        </div>



    </div>
</section>


<!--------------------尾部-begin------------------------------>
@include('home.layouts._footer')
<!--------------------尾部-end------------------------------>
<script src="lib/js/jquery-3.3.1.js"></script>
<script src="lib/js/popper.js"></script>
<script src="lib/js/bootstrap.js"></script>
<script src="js/index.js"></script>
<script type="text/javascript">
    $(function () {
        var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
        $('.mobile_nav').css('height', _height-107)






        //研博新闻 分页切换

        $(document).on('click', '.prev1', function () {
            //1- get first element to check if it has class 'active',
            // to prevent class 'active' from moving to prev button on click,
            // if explanation isn't clear try removing if(){} to see it.
            const first = $(this).siblings().first();
            if (!first.hasClass('active')) {
                //$(".prev").removeClass('disabled')
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
            }else{
                // $(".prev").addClass('disabled')
            }
        });
        $(document).on('click', '.next1', function () {
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
        var pageItem = $(".pagination1 li").not(".prev1,.next1");

        pageItem.click(function() {
            pageItem.removeClass("active");
            $(this).not(".prev1,.next1").addClass("active");
        });



        $('.nav-link4').click(function () {
            // 刷新
            location.reload()


        })


    })


    $(function () {
        // 教育新闻 分页切换

        $(document).on('click', '.prev2', function () {
            //1- get first element to check if it has class 'active',
            // to prevent class 'active' from moving to prev button on click,
            // if explanation isn't clear try removing if(){} to see it.
            const first = $(this).siblings().first();
            if (!first.hasClass('active')) {
                //$(".prev").removeClass('disabled')
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
            }else{
                // $(".prev").addClass('disabled')
            }
        });
        $(document).on('click', '.next2', function () {
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
        var pageItem = $(".pagination2 li").not(".prev2,.next2");

        pageItem.click(function() {
            pageItem.removeClass("active");
            $(this).not(".prev2,.next2").addClass("active");
        });

    })
</script>
<script type="text/javascript">
    if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $(function(){

            // $('#lk_header .collapse').css("background-color", "black")
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



    $('.media').click(function(){
        // window.location.href = 'newsDetail.html'
        let url= "{{url('newDetail')}}"
        let picAlt =  $(this).find('.media-heading').attr('alt')
        window.location.href = encodeURI(url +'/'+ picAlt);
    })

    /*绑定touchmove*/
    body.addEventListener('touchmove',function(e){
        // $('.collapse').collapse('hide')
        $('.mobile_nav').fadeOut("slow");
    })

</script>
</body>
</html>

