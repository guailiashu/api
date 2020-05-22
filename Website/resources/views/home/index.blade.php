<!doctype html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="lib/css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link rel="shortcut icon"   href="images/Yanbo.ico" type="image/x-icon" />

        <meta name="renderer" content="webkit"/>
        <meta name="force-rendering" content="webkit"/>
        <!-- 解决部分兼容性问题，如果安装了GCF，则使用GCF来渲染页面，如果未安装GCF，则使用最高版本的IE内核进行渲染。 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>研博教育</title>
        <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    </head>
    <style type="text/css">
        .full-video {
            position: absolute;
            background:#000;
            z-index: 9999999;
            top: 0;
            width: 100%;
            height: 100%;
        }
        .full-video video {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
            object-fit:cover;
        }
        .student-swiper {
            position: relative;
            bottom: 10px;
        }
        .student-swiper-container {
            position: relative;
            height:400px;
            /* overflow: hidden; */
        }
        .swiper-slide-active,.swiper-slide {
            width: 550px;
            text-align: center;
            line-height: 2em;
            background-color:#FFF;
            box-shadow:0px 0px 5px #999999 !important;
        }
        .swiper-slide-img {
            height: 276px;
            overflow: hidden;
            /* border: 6px solid #fff; */
        }
        .swiper-slide-img img {
            width: 100%;
        }
        .service-part04{
            overflow: hidden;
            /* background-color: red; */

        }
    </style>
<body>
    <div class="shouye" >


        <!--------------------头部-begin------------------------------>

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

                    <div class="collapse navbar-collapse" id="lk_nav" >
                        <ul class="navbar-nav mr-auto">


                            @foreach($column as $name)

                                @if($name->c_route == 'home/index')
                                    <li class="nav-item active">
                                        <a class="nav-link nav-link1 color1 " href="#" style="font-weight: bold;">{{$name->column}}<span class="sr-only">(current)</span></a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link nav-link6 color6"  href={{route($name->c_route)}}>{{$name->column}}</a>
                                    </li>
                                @endif

                            @endforeach

                            <li class="nav-item">
                                <a class="nav-link nav-link7 color7" target="_blank"  href="https://mall.jd.com/index-10212411.html" rel="nofollow">研博商城</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <!--------------------头部-end------------------------------>

        <!--------------------轮播图-begin------------------------------>
        <section id="lk_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#lk_carousel" data-slide-to="1"></li>
                <li data-target="#lk_carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="images/slide_01_900x410.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_02_900x410.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="images/slide_03_900x410.jpg" class="d-block w-100" alt="...">
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
        <!--------------------轮播图-end------------------------------>


        <!-- 动画效果 -->
        <div class="full-video">
            <video muted class="pcitem" id="index_video" autoplay="autoplay" src="http://boc.adpinxiao.com/bocweb//web/video/banner1.mp4?v=v1"></video>
        </div>

    </div>



    <!-- 移动端导航自定义 -->
    <div class="mobile_nav">
        <div class="content">



            @foreach($column as $name)

                <div class="index">
                    <a href={{route($name->c_route)}}>{{$name->column}}</a>
                </div>

            @endforeach

            <div class="index">
                <a href="https://mall.jd.com/index-10212411.html" rel="nofollow">研博商城</a>
            </div>


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




{{--遍历导航栏目--}}
    @foreach($home as $item => $value)




        {{--                        //根据模块分类--}}
        {{--// 分校模块--}}
        @if( $item == 'school')

            <section id="lk_school" >

                <div  class="container container-clear-padding d-md-block content mb-2">
                    <h2 class='index-school-title'>研博分校</h2>
                    <div class="service-part04">
                        <div class="center w1100">
                            <div class="student-swiper style="top:20px">
                            <div class="student-swiper-container">
                                <div class="swiper-wrapper">

                                    @foreach($value['title'] as $key =>$val)
                                        <div class="swiper-slide">
                                            <div class="swiper-slide-img">
                                                <img class="img-fluid"   src={{'storage/'. $val->image }} >
                                            </div>
                                            <h4 class='index-school-name' alt="{{ $val->id }}">{{$val->name}}</h4>
                                            <div class="intro">{{$val->title}}</div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
                </div>
                </div>
            </section>


        @elseif($item == 'education')

            <section id="lk_hot">
                <!--标题-->
                <div class="container d-flex justify-content-center align-items-center   mb-5">
                    <h2>学历教育</h2>
                    <!-- <div class="line d-none d-sm-none d-md-block"></div>
                    <div class="more"><a class="toEdu" href="education.html">查看更多</a></div>	 -->

                </div>
                <!--内容-->
                <div class="container">
                    <div class="row mb-3">

                        @foreach($value['title'] as $education_key=>$education_val)
                            <div class="col-md-4 col-lg-4 academic-education-list">
                                <div class="media d-flex flex-column mb-3 xuelijiaoyu academic-education">
                                    <div class="media-left ">
                                        <img src={{'storage/'. $education_val->image }} alt="" class="media-object  img-fluid "
                                        >
                                    </div>
                                    <div class="mt-3 d-flex flex-column align-items-center academic-education-intro">
                                        <h4 class="media-heading ">
                                            {{ $education_val->name }}
                                        </h4>
                                        <p class="text-muted">
                                            {{ $education_val->title }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex justify-content-center">
                        <a class='index-scan-more ' href={{ route($value['routes']->c_route) }}>更多</a>
                    </div>
                </div>


            </section>




        @elseif($item == 'news')

            <!--------------------研博新闻-begin------------------------------>
            <section id="lk_ybnews">
                <!--标题-->
                <div class="container d-flex justify-content-center align-items-center  mt-4 mb-3">
                    <h2>研博新闻</h2>
                    <!-- <div class="line d-none d-sm-none d-md-block"></div>
                    <div class="more"><a class="toYbnew" href="news.html">查看更多</a></div>	 -->

                </div>
                <!--内容-->
                <div class="container">
                    <div class="row mb-3">

                        @foreach($value['title'] as $news_key=>$news_val)
                        <div class="col-md-4 col-lg-4">
                            <div class="media d-flex flex-column     news">
                                <div class="media-left index-news-content-img">
                                    <img src="{{'storage/'.$news_val->image}} " alt="" class="media-object  img-fluid "
                                    >
                                </div>
                                <h6 class="media-heading mt-3">
                                    {{$news_val->title}}
                                </h6>
                                <p class="index-news-line"></p>
                                <div class="index-news-date-parent d-flex justify-content-between">
                                    <div class="index-news-date"> {{$news_val->created_at}}</div>
                                    <img class="index-right-brackets" src="images/right-brackets-selected.png" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                    <div class="d-flex justify-content-center">
                        <a class='index-scan-more ' href={{ route($value['routes']->c_route) }}>更多</a>
                    </div>

                </div>
            </section>


        @elseif($item == 'active')
            <section id="lk_active" >
                <!--标题-->
                <div class="container d-flex justify-content-between align-items-center   mb-3">
                    <h2> {{ $value['routes']->column}}</h2>
                    <div class="line d-none d-sm-none d-md-block"></div>
                    <div class="more"><a class="toSchool" href={{ route($value['routes']->c_route) }}>查看更多</a></div>
                </div>
                <!--内容-->

                <div class="container">
                    <div class="row">
                    @foreach($value['title'] as $active_key=>$active_val)

                        <!-- 中大屏幕显示，小屏幕，超小屏幕不显示 -->
                            <div class="col-md-6 col-lg-6 d-none d-sm-none d-md-none d-lg-block ">
                                <div class="media d-flex   mb-3  active index-public-welfare">
                                    <div class="media-left mr-2">
                                        <img src={{'storage/'.$active_val->image  }} alt="" class="media-object  img-fluid ">
                                    </div>
                                    <div class="d-none d-sm-none d-md-block media-body ">
                                        <h6 class="media-heading ">
                                            {{$active_val->title}}
                                        </h6>
                                        <p class="text-muted">
                                            {{$active_val->details}} . . .                                        </p>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <a class='index-scan-more ' href={{ route($value['routes']->c_route) }}>更多</a>--}}
{{--                    </div>--}}
                </div>
            </section>


        @endif



    @endforeach







<!--------------------公益活动-end------------------------------>

<!--------------------尾部-begin------------------------------>
    @include('home.layouts._footer')
<!--------------------尾部-end------------------------------>


<!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    <script src="lib/js/jquery-3.3.1.js"></script>
    <script src="lib/js/popper.js"></script>
    <script src="lib/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.js"> </script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"> </script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js"></script>


    <script>
        $(function(){
            if(!!window.ActiveXObject||"ActiveXObject" in window){
                alert("提示: 您在使用的浏览器内核版本可能导致浏览异常。\n" +
                    "\n" +
                    "解决方法（任选其一）：\n" +
                    "请切换到当前浏览器的极速模式\n" +
                    "请安装Chrome(谷歌浏览器）、Firefox（火狐）浏览器、QQ浏览器、搜狐浏览器、360浏览器来使用本系统\n")
            } else{
                $('#css-style-sheet').attr('href','css/index.css')
            }
        });

    </script>



    <script type="text/javascript">
        $(function () {
            let _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
            let _width = $(window).width();
            if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                $(".full-video").hide()
            } else {
                // 动画

                setTimeout(function () {

                    $(".full-video").fadeOut(2000);;

                }, 3000);
            }



            $('#pic-mobile').carousel({
                interval: 1200
            })

            // 分校轮播间隔
            $('#pic').carousel({
                interval: 2000
            })
            $('#lk_carousel .carousel-item img').css('height', _height)
            $('.mobile_nav').css('height', _height-107)

            // 导航跳转
            $('.nav-link1').click(function () {
                // 刷新
                location.reload()
            })




            // 跳转分页
            $('.school').click(function () {
                window.location.href="{{route('home/school')}}";
            })

            $('.xuelijiaoyu').click(function () {
                window.location.href="{{route('home/education')}}";
            })

            $('.news').click(function () {
                window.location.href="{{route('home/news')}}";
            })

            $('.active').click(function () {
                {{--$(location).attr('href', {{route('home/active')}});--}}
                    window.location.href="{{route('home/active')}}";
            })


            $('.swiper-slide').click(function () {
                    {{--var url= "{{route('home/schoolDetail')}}"--}}
                let url= "{{url('schoolDetail')}}"
                let picAlt =  $(this).find('.index-school-name').attr('alt')
                window.location.href = encodeURI(url +'/'+ picAlt);
            })
        })
    </script>

    <script type="text/javascript">
        let body = document.querySelector('body');
        if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
            $(function(){
                $('#lk_header .collapse').hide()
                // $('#lk_header .collapse').css("background-color", "lightblue")

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
            $('.mobile_nav').fadeOut("slow");
        })
        /*学历板块鼠标移入特效*/
        $('.academic-education-list').mouseover(function(){
            $(this).css({'margin-top':-15+'px'})
            $(this).find(".academic-education-intro").addClass('index-box-shadow')
        })
        $('.academic-education-list').mouseout(function(){
            $(this).css({'margin-top':0+'px'})
            $(this).find('.academic-education-intro').removeClass('index-box-shadow')
        })
        /*新闻板块鼠标移入特效*/
        $('.news').bind("mouseenter",function(){
            $(this).find('.img-fluid').css({'transform':'scale(1.01)'})
            $(this).find('h6').css({'color':'#1677FF'})
            $(this).find('.index-news-line').animate({'background-color':'#1677FF',queue:true},2000)
            $(this).find('.index-right-brackets').stop().fadeIn()
            $(this).find('.index-right-brackets').stop().fadeIn("slow");
            $(this).find('.index-right-brackets').stop().fadeIn(1000);
            $(this).find('.index-news-date').css({'color':'#1677FF'})
        })
        $('.news').bind("mouseleave",function(){
            $(this).find('.img-fluid').css({'transform':'scale(1)'})
            $('.index-right-brackets').stop().fadeOut()
            $('.index-right-brackets').stop().fadeOut("slow");
            $('.index-right-brackets').stop().fadeOut(1000);
            $(this).find('.index-news-line').animate({'background-color':'#8b8888',queue:true},0)
            $(this).find('.index-news-date').css({'color':'#000'})
            $(this).find('h6').css({'color':'#000000'})
        })
        /*公益活动鼠标移入特效*/
        $('.index-public-welfare').bind('mouseenter',function(){
            $(this).find('.media-heading').css({'color':'#1677FF'})
        })
        $('.index-public-welfare').bind('mouseleave',function(){
            $(this).find('.media-heading').css({'color':'rgba(51,51,51,1)'})
        })
    </script>

    <script>
        $(function() {
            new Swiper('.student-swiper .student-swiper-container', {
                watchSlidesProgress: true,
                slidesPerView: 'auto',
                centeredSlides: true,
                grabCursor : true,
                // loopAdditionalSlides:0,
                loop: true,
                loopedSlides: 5,
                autoplay: {
                    delay: 2000,
                    stopOnLastSlide: false,
                    disableOnInteraction: true,
                },
                on: {
                    progress: function(progress) {
                        for (let i = 0; i < this.slides.length; i++) {
                            let slide = this.slides.eq(i);
                            let slideProgress = this.slides[i].progress;
                            modify = 1;
                            if (Math.abs(slideProgress) > 1) {
                                modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
                            }
                            //长度 221是每个swiper-slide宽度的一半
                            translate = slideProgress * modify * 221 + 'px';
                            scale = 1 - Math.abs(slideProgress) / 5;
                            zIndex = 2000 - Math.abs(Math.round(10 * slideProgress));
                            slide.transform('translateX(' + translate + ') scale(' + scale + ')');
                            slide.css('zIndex', zIndex);
                            slide.css('opacity', 1);
                            if (Math.abs(slideProgress) > 1) {
                                slide.css('opacity', 0);
                            }
                        }
                    },
                    setTransition: function(transition) {
                        for (let i = 0; i < this.slides.length; i++) {
                            let slide = this.slides.eq(i)
                            slide.transition(transition);
                        }

                    }
                }

            })

        })
    </script>

</body>
</html>
