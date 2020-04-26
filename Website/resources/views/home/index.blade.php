<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lib/css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">

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
{{--                        <li class="nav-item active">--}}
{{--                            <a class="nav-link nav-link1 color1" href="#">首页<span class="sr-only">(current)</span></a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link nav-link2 color2" href={{ route('home/school') }}>分校</a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link nav-link3 color3" href="education.html">学历</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link nav-link4 color4" href="news.html">新闻</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link nav-link5 color5"  href="active.html">公益</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link nav-link6 color6"  href="about.html">关于研博</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link nav-link7 color7" target="_blank"  href="http://shop.jd.com">研博商城</a>--}}
{{--                        </li>--}}

                        @foreach($column as $name)

                            @if($name->c_route == 'index')
                                    <li class="nav-item active">
                                        <a class="nav-link nav-link1 color1" href={{route($name->c_route)}}>{{$name->column}}<span class="sr-only">(current)</span></a>
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


    <!--------------------头部-end------------------------------>

    <!--------------------轮播图-begin------------------------------>
    <section id="lk_carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#lk_carousel" data-slide-to="1"></li>
            <li data-target="#lk_carousel" data-slide-to="2"></li>
        </ol>

        <!-- <div class="carousel-item active" data-sm-img="images/slide_01_900x410.jpg"
             data-lg-img="images/slide_01_2000x410.jpg"></div>
        <div class="carousel-item" data-sm-img="images/slide_02_900x410.jpg"
             data-lg-img="images/slide_02_2000x410.jpg"></div>
        <div class="carousel-item" data-sm-img="images/slide_03_900x410.jpg"
             data-lg-img="images/slide_03_2000x410.jpg"></div> -->
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

        <!-- 超小屏幕 -->
        <!-- <div class="carousel-inner  d-none d-xs-block d-sm-none ">
            <div class="carousel-item sm active">
                <img src="images/slide_01_900x410.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item sm">
                <img src="images/slide_02_900x410.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item sm">
                <img src="images/slide_03_900x410.jpg" class="d-block w-100" alt="...">
            </div>
        </div> -->

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


        <div class="index1">
            <a href="index.html">首页</a>
        </div>
        <div class="index2">
            <a href="ybSchool.html">分校</a>
        </div>
        <div class="index3">
            <a href="education.html">学历</a>
        </div>
        <div class="index4">
            <a href="news.html">新闻</a>
        </div>
        <div class="index5">
            <a href="active.html">公益</a>
        </div>
        <div class="index6">
            <a href="about.html">关于研博</a>
        </div>
        <div class="index">
            <a href="http://shop.jd.com">研博商城</a>
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
<!--------------------服务介绍-end------------------------------>

<!--------------------分校-begin------------------------------>
<section id="lk_school" >
    <!--标题-->
    <div class="container d-flex justify-content-between align-items-center   mb-3">
        <h2>研博分校</h2>
        <div class="line d-none d-sm-none d-md-block"></div>
        <div class="more"><a class="toSchool" href="ybSchool.html">查看更多</a></div>

    </div>
    <!--内容-->

    <div  class="container d-none d-sm-none d-md-block content">


        <!-- 轮播改变 -->
        <div id="pic" class="carousel carousel1 slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="school" >

                        <div class="schoolList">
                            <img class="img-fluid"  src="images/22.png" >
                            <div class="schoolName">北京分校</div>
                            <div class="intro">这是北京分校</div>
                        </div>

                        <div class="schoolList">
                            <img class="img-fluid" src="images/22.png" >
                            <div class="schoolName">北京分校</div>
                            <div class="intro">这是北京分校</div>
                        </div>



                    </div>
                </div>
                <div class="carousel-item">
                    <div class="school" >

                        <div class="schoolList">
                            <img class="img-fluid"  src="images/22.png" >
                            <div class="schoolName">武汉分校</div>
                            <div class="intro">这是武汉分校</div>
                        </div>

                        <div class="schoolList">
                            <img  src="images/22.png" >
                            <div class="schoolName">武汉分校</div>
                            <div class="intro">这是武汉分校</div>
                        </div>



                    </div>
                </div>
                <div class="carousel-item">
                    <div class="school" >

                        <div class="schoolList">
                            <img class="img-fluid" src="images/22.png" >
                            <div class="schoolName">广州分校</div>
                            <div class="intro">这是广州分校</div>
                        </div>

                        <div class="schoolList">
                            <img class="img-fluid" src="images/22.png" >
                            <div class="schoolName">广州分校</div>
                            <div class="intro">这是广州分校</div>
                        </div>



                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#pic" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pic" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <!--    <div class="school" >

               <div class="schoolList">
                   <img  src="images/22.png" >
                 <div class="schoolName">武汉分校</div>
                 <div class="intro">这是武汉分校</div>
               </div>

               <div class="schoolList">
                   <img  src="images/22.png" >
                   <div class="schoolName">武汉分校</div>
                   <div class="intro">这是武汉分校</div>
               </div>

               <div class="schoolList">
                   <img  src="images/22.png" >
                           <div class="schoolName">武汉分校</div>
                           <div class="intro">这是武汉分校</div>
               </div>

               <div class="schoolList">
                   <img  src="images/22.png" >
                           <div class="schoolName">武汉分校</div>
                           <div class="intro">这是武汉分校</div>
               </div>

               <div class="schoolList">
                   <img  src="images/22.png" >
                           <div class="schoolName">武汉分校</div>
                           <div class="intro">这是武汉分校</div>
               </div>

             </div> -->

    </div>


    <!-- 移动端展示的效果 -->
    <div class="container content1 visible-xs-block d-sm-none ">
        <div  class="school1">

            <div class="schoolList1">
                <img  src="images/22.png" >
                <div class="schoolName">武汉分校</div>
                <div class="intro">这是武汉分校</div>
            </div>

            <div class="schoolList1">
                <img  src="images/22.png" >
                <div class="schoolName">武汉分校</div>
                <div class="intro">这是武汉分校</div>
            </div>

            <div class="schoolList1">
                <img  src="images/22.png" >
                <div class="schoolName">武汉分校</div>
                <div class="intro">这是武汉分校</div>
            </div>

            <div class="schoolList1">
                <img  src="images/22.png" >
                <div class="schoolName">武汉分校</div>
                <div class="intro">这是武汉分校</div>
            </div>

            <div class="schoolList1">
                <img  src="images/22.png" >
                <div class="schoolName">武汉分校</div>
                <div class="intro">这是武汉分校</div>
            </div>




        </div>
    </div>
</section>

<!--------------------分校-end------------------------------>

<!--------------------学历教育-begin------------------------------>
<section id="lk_hot">
    <!--标题-->
    <div class="container d-flex justify-content-between align-items-center   mb-3">
        <h2>学历教育</h2>
        <div class="line d-none d-sm-none d-md-block"></div>
        <div class="more"><a class="toEdu" href="education.html">查看更多</a></div>

    </div>
    <!--内容-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="media d-flex flex-column mb-3 xuelijiaoyu">
                    <div class="media-left mr-2">
                        <img src="images/22.png" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            成人高考
                        </h6>
                        <p class="text-muted">
                            成人高考简单介绍
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="media d-flex flex-column   mb-3  xuelijiaoyu">
                    <div class="media-left mr-2">
                        <img src="images/22.png" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            自学考试
                        </h6>
                        <p class="text-muted">
                            自学考试简单介绍
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="media d-flex flex-column   mb-3  xuelijiaoyu">
                    <div class="media-left mr-2">
                        <img src="images/22.png" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            网络教育
                        </h6>
                        <p class="text-muted">
                            网络教育简单介绍
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="media d-flex flex-column   mb-3  xuelijiaoyu">
                    <div class="media-left mr-2">
                        <img src="images/22.png" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            职业资格证
                        </h6>
                        <p class="text-muted">
                            职业资格证简单介绍
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--------------------学历教育-end------------------------------>

<!--------------------研博新闻-begin------------------------------>
<section id="lk_ybnews">
    <!--标题-->
    <div class="container d-flex justify-content-between align-items-center  mt-3 mb-3">
        <h2>研博新闻</h2>
        <div class="line d-none d-sm-none d-md-block"></div>
        <div class="more"><a class="toYbnew" href="news.html">查看更多</a></div>

    </div>
    <!--内容-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="media d-flex flex-column   mb-3  news">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            2019年研博年度盛典
                        </h6>
                        <p class="text-muted">
                            2020-02-12
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="media d-flex flex-column   mb-3  news">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            研博毕业季：归来仍是少年
                        </h6>
                        <p class="text-muted">
                            2020-02-12
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="media d-flex flex-column   mb-3  news">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            研博毕业季：归来仍是少年
                        </h6>
                        <p class="text-muted">
                            2020-02-12
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!--------------------研博新闻-end------------------------------>

<!--------------------教育新闻-begin------------------------------>
<section id="lk_edu_news">
    <!--标题-->
    <div class="container d-flex justify-content-between align-items-center  mt-3 mb-3">
        <h2>教育新闻</h2>
        <div class="line d-none d-sm-none d-md-block"></div>
        <div class="more"><a class="toEdunew" href="news.html">查看更多</a></div>

    </div>
    <!--内容-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="media d-flex flex-column   mb-3  news">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            2019年研博年度盛典
                        </h6>
                        <p class="text-muted">
                            2020-02-12
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="media d-flex flex-column   mb-3  news">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            研博毕业季：归来仍是少年
                        </h6>
                        <p class="text-muted">
                            2020-02-12
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="media d-flex flex-column   mb-3  news">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="media-body ">
                        <h6 class="media-heading mt-3">
                            研博毕业季：归来仍是少年
                        </h6>
                        <p class="text-muted">
                            2020-02-12
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!--------------------教育新闻-end------------------------------>

<!--------------------公益活动-begin------------------------------>
<section id="lk_active" >
    <!--标题-->
    <div class="container d-flex justify-content-between align-items-center  mt-3 mb-3">
        <h2>公益活动</h2>
        <div class="line d-none d-sm-none d-md-block"></div>
        <div class="more"><a class="toActive" href="active.html">查看更多</a></div>

    </div>
    <!--内容-->
    <div class="container">
        <div class="row">
            <!-- 中大屏幕显示，小屏幕，超小屏幕不显示 -->
            <div class="col-md-6 col-lg-6 d-none d-sm-none d-md-none d-lg-block">
                <div class="media d-flex   mb-3  active">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="d-none d-sm-none d-md-block media-body ">
                        <h6 class="media-heading ">
                            公益助学-巴善小学扶贫助学公益捐赠活动顺利开展！
                        </h6>
                        <p class="text-muted">
                            2019年11月5日，研博教育集团公益事业部联合深圳市尖岗汇聚慈善基金会本通公益慈善基金以及其他社会公益组织、企 业、爱心...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 d-none d-sm-none d-md-none d-lg-block">
                <div class="media d-flex   mb-3  active">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class=" d-none d-sm-none d-md-block media-body ">
                        <h6 class="media-heading ">
                            公益助学-巴善小学扶贫助学公益捐赠活动顺利开展！
                        </h6>
                        <p class="text-muted">
                            2019年11月5日，研博教育集团公益事业部联合深圳市尖岗汇聚慈善基金会本通公益慈善基金以及其他社会公益组织、企 业、爱心...
                        </p>
                    </div>
                </div>
            </div>
            <!-- 中大屏幕显示，小屏幕，超小屏幕不显示 -->

            <!-- 大屏幕不显示，中，小屏幕，超小屏幕才显示 -->
            <div class="col-md-6 col-lg-6 visible-xs-block d-sm-block d-md-block d-lg-none">
                <div class="media d-flex flex-column  mb-3  ">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class=" media-body mt-3">
                        <h6 class="media-heading ">
                            公益助学-巴善小学扶贫助学公益捐赠活动顺利开展！
                        </h6>
                        <p class="text-muted">
                            2019年11月5日，研博教育集团公益事业部联合深圳市尖岗汇聚慈善基金会本通公益慈善基金以及其他社会公益组织、企 业、爱心...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 visible-xs-block  d-sm-block d-md-block d-lg-none">
                <div class="media d-flex flex-column  mb-3 ">
                    <div class="media-left mr-2">
                        <img src="images/ad.jpg" alt="" class="media-object  img-fluid "
                        >
                    </div>
                    <div class="  media-body mt-3">
                        <h6 class="media-heading ">
                            公益助学-巴善小学扶贫助学公益捐赠活动顺利开展！
                        </h6>
                        <p class="text-muted">
                            2019年11月5日，研博教育集团公益事业部联合深圳市尖岗汇聚慈善基金会本通公益慈善基金以及其他社会公益组织、企 业、爱心...
                        </p>
                    </div>
                </div>
            </div>
            <!-- 中大屏幕不显示，小屏幕，超小屏幕才显示 -->


        </div>
    </div>
</section>
<!--------------------公益活动-end------------------------------>

<!--------------------尾部-begin------------------------------>
<footer id="lk_footer" >
    <div class="container ">
        Copyright © 2017 研博教育集团 版权所有 桂ICP备17001896号-3
        <!-- <h3>地址:湖北省武汉市洪山区珞瑜路889-1号30楼（整层）</h3> -->
    </div>
</footer>
<!--------------------尾部-end------------------------------>


<!--[if lt IE 9]>
<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<script src="lib/js/jquery-3.3.1.js"></script>
<script src="lib/js/popper.js"></script>
<script src="lib/js/bootstrap.js"></script>
<script src="js/index.js"></script>


<script>
    $(function(){
        if(!!window.ActiveXObject||"ActiveXObject" in window){
            alert("提示: 您在使用的浏览器内核版本可能导致浏览异常。\n" +
                "\n" +
                "解决方法（任选其一）：\n" +
                "请切换到当前浏览器的极速模式\n" +
                "请安装Chrome(谷歌浏览器）、Firefox（火狐）浏览器、QQ浏览器、搜狐浏览器、360浏览器来使用本系统\n")
        }
    });
</script>





<script type="text/javascript">
    $(function () {
        if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
            $(".full-video").hide()
        } else {
            // 动画

            setTimeout(function () {

                $(".full-video").fadeOut(2000);;

            }, 3000);
        }




        // 分校轮播间隔
        $('#pic').carousel({
            interval: 1200
        })

        var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
        var _width = $(window).width()
        console.log( _height)
        console.log( _width)
        $('#lk_carousel .carousel-item img').css('height', _height)
        $('.mobile_nav').css('height', _height-107)


        // 导航跳转
        $('.nav-link1').click(function () {
            // 刷新
            location.reload()
        })






        // 跳转分页
        $('.school').click(function () {
            $(location).attr('href', 'ybSchool.html');

        })

        $('.xuelijiaoyu').click(function () {
            $(location).attr('href', 'education.html');

        })

        $('.news').click(function () {
            $(location).attr('href', 'news.html');

        })

        $('.active').click(function () {
            $(location).attr('href', 'active.html');

        })


    })
</script>
<script type="text/javascript">
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
