<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="lib/css/bootstrap.css">
		<link rel="stylesheet" href="css/index.css">
		<title>研博分校</title>
	</head>
	<body style="">
	<div class="shouye" >
		<header id="lk_header">
		    <nav class="navbar  navbar-expand-lg navbar-light navbar-lk">
		        <div class="container">
		            <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
		                <img src="images/Yanbo.png" alt="">
		            </a>
		            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lk_nav"
		                    aria-controls="lk_nav" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
		            </button>

		            <div class="collapse  navbar-collapse" id="lk_nav">
		                <ul class="navbar-nav mr-auto">
{{--		                    <li class="nav-item active">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1 " href="index.html">首页<span class="sr-only">(current)</span></a>--}}
{{--		                    </li>--}}
{{--							<li class="nav-item ">--}}
{{--							    <a style="color: #fff;" class="nav-link nav-link2 " href="#">分校</a>--}}
{{--							</li>--}}
{{--		                   --}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link3 " href="education.html">学历</a>--}}
{{--		                    </li>--}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link4 " href="news.html">新闻</a>--}}
{{--		                    </li>--}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link5 "  href="active.html">公益</a>--}}
{{--		                    </li>--}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link6 "  href="about.html">关于研博</a>--}}
{{--		                    </li>--}}
{{--							<li class="nav-item">--}}
{{--							    <a class="nav-link nav-link7 color7" target="_blank"  href="http://shop.jd.com">研博商城</a>--}}
{{--							</li>--}}

                            @foreach($column as $name)

                                @if($name->c_route == 'home/index')
                                    <li class="nav-item active">
                                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1 " href={{route($name->c_route)}}>{{$name->column}}<span class="sr-only">(current)</span></a>
                                    </li>
                                @elseif($name->c_route == 'home/school')
                                    <li class="nav-item ">
                                        <a style="color: #fff;" class="nav-link nav-link2 " href="#">{{$name->column}}</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link6 "  href={{route($name->c_route)}}>{{$name->column}}</a>
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

        <!--------------------轮播图-begin------------------------------>
    @include('home.layouts._banner')
    <!--------------------轮播图-end------------------------------>
	</div>

		<!-- 分校内容 -->
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



		<section id="yb_school2">

		    <!--内容-->
		    <div class="container">
		        <div class="row">

                    @foreach($schools as $school_key=>$school_value)
                        <div class="col-md-6 col-lg-6">
                            <div class="media d-flex flex-column   mb-3 ">
                                <div class="media-left mr-2 img-fluid">
                                    <img src={{'storage/'.$school_value->image  }} alt="{{ $school_value->id  }}" class="media-object   ">

                                </div>
                                <div class="media-body ">
                                    <h6 class="media-heading mt-3">
                                        {{ $school_value->name  }}
                                    </h6>
                                    <p class="text-muted ">
                                        <span class="Tel">Tel:</span>
                                        <span class="number">{{ $school_value->tel  }}</span>
                                    </p>
                                    <p class="text-muted  ">
                                        <span class="Add">Add:</span>
                                        <span class="number">{{ $school_value->address  }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach



		        </div>
		    </div>


 {{--         分页--}}
            <div class="fenye container ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {!! $schools->render() !!}
                    </ul>
                </nav>
            </div>
		</section>
    {{--         分页--}}

	<!--------------------尾部-begin------------------------------>
@include('home.layouts._footer')
	<!--------------------尾部-end------------------------------>

		<script src="lib/js/jquery-3.3.1.js"></script>
		<script src="lib/js/popper.js"></script>
		<script src="lib/js/bootstrap.js"></script>
		<script src="js/index.js"></script>
		<script type="text/javascript">
			$(function () {
				// console.log(Date())

				var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
				  $('.mobile_nav').css('height', _height-107)


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



				$('.media-left img').click(function () {
					{{--var url= "{{route('home/schoolDetail')}}"--}}
                    var url= "{{url('schoolDetail')}}"
				    var picAlt =  $(this).attr('alt')
                    window.location.href = encodeURI(url +'/'+ picAlt);
				})
				})
		</script>
		<script type="text/javascript">
			if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
			   $(function(){

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
