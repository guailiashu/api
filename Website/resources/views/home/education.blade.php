<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="lib/css/bootstrap.css">
		<link rel="stylesheet" href="css/index.css">
		<title>学历教育</title>
	</head>
	<body style="background-color: #F4F4F4;">
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

			<!-- 背景图  pc端540px，移动端375px -->
			<img class="d-none d-sm-block" src="images/slide_01_900x410.jpg" style="width: 100%;height: 540px;">
			<img class="visible-xs-block d-sm-none" src="images/slide_01_900x410.jpg" style="width: 100%;height: 375px;">
		</div>
		<!-- 研博教育内容 -->
		<div style="position: absolute;top: 540px;"></div>

		<div class="mobile_nav">
			<div class="content">
                @foreach($column as $name)

                    <div class="index">
                        <a href={{route($name->c_route)}}>{{$name->column}}</a>
                    </div>

                @endforeach
			</div>
		</div>

		<section id="yb_education2">
			<!-- 研博教育内容 -->
            <div class="container-fluid" style="background-color: #fff;padding: 20px 0;">
                <div class="container">
                    <!-- 第一栏 -->
                    <ul class="nav nav-pills " id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link staic disabled" id="pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-home"
                               aria-selected="false">类型</a>
                        </li>

                        @foreach($edu_data as $key=>$val)


                            @if('pills-zixue'==$val->type_name)

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-zixue" role="tab" aria-controls="pills-home"
                                       aria-selected="true">自学考试</a>
                                </li>

                            @elseif('pills-adult'==$val->type_name)

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-adult" role="tab" aria-controls="pills-profile"
                                       aria-selected="false">成人高考</a>
                                </li>

                            @elseif('pills-web'==$val->type_name)

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-web" role="tab" aria-controls="pills-contact"
                                       aria-selected="false">网络教育</a>
                                </li>

                            @endif


                        @endforeach

                    </ul>
                </div>
            </div>


			<div class="tab-content" id="pills-tabContent">

{{--                一级目录（分类）--}}
                @foreach($edu_data as $key=>$val)


                    @if('pills-zixue'==$val->type_name)

                        <div class="tab-pane fade show active" id="pills-zixue" role="tabpanel" aria-labelledby="pills-home-tab">
                            <!-- 第二栏 地区 -->
                            <div class="container-fluid" style="background-color: #fff;padding:19px 0;box-shadow:0px 3px 6px rgba(0,0,0,0.16);">
                                <div class="container">
                                    <ul class="nav  nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link staic disabled" id="pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-home"
                                               aria-selected="false">地区</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-hot" role="tab" aria-controls="pills-home"
                                               aria-selected="true">热点</a>
                                        </li>

{{--                                       二级目录（地区）--}}
                                         @foreach($edu_address as $edu_key=>$edu_val)

                                             @if($val->type_name == $edu_val->type_name)

                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="{{"#".$edu_val->add_type_name}}" role="tab" aria-controls="pills-profile"
                                                       aria-selected="false">{{$edu_val->address}}</a>
                                                </li>

                                            @endif

                                        @endforeach

                                        {{--								<li class="nav-item">--}}
                                        {{--									<a class="nav-link" href="https://www.eol.cn/" target="_blank" role="tab">更多</a>--}}
                                        {{--								</li>--}}
                                    </ul>
                                </div>
                            </div>


                            <div class=" nav-pills1 tab-content" id="pills-tabContent">



                                <div class="tab-pane fade show active" id="pills-hot" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <!-- 第三栏热点院校 -->
                                    <div id="lk_hotschool" class="mt-3">

                                        rrrrrr
                                    </div>
                                </div>





                                <div class="tab-pane fade" id="pills-place2" role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <div id="lk_hotschool" class="mt-3">

                                        rrrrr
                                    </div>
                                </div>

                            {{--  三级目录 其他栏目   对应学校--}}


                            <!--内容-->
                                @foreach($edu_address as $edu_key=>$edu_val)


                                    @foreach($data as $data_key=>$data_val)


                                        @if('pills-place1'==$edu_val->add_type_name && $edu_val->enducation_id == $data_val->enducation_id)

                                            <div class="tab-pane fade" id="{{$edu_val->add_type_name}}" role="tabpanel" aria-labelledby="pills-profile-tab">

                                                <div id="lk_hotschool" class="mt-3">

                                                    <div class="container">
                                                        <div class="row">



                                                            <div class="col-md-4 col-lg-4">
                                                                <div class="media d-flex flex-column align-items-center  mb-3  ">

                                                                    <div class="media-left mr-2">
                                                                        <img src="{{$data_val->image}}" alt="" class="media-object  img-fluid ">
                                                                    </div>
                                                                    <div class="media-body text-center">
                                                                        <h6 class="media-heading mt-3">
                                                                            {{$data_val->name}}
                                                                        </h6>
                                                                        <p class="text-muted">
                                                                            <a href="#" rel="北京大学">招生简章</a> <a href="#" rel="北京大学">主考专业</a> <a href="#" rel="北京大学">专业选择</a>
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        @elseif('pills-place2'==$edu_val->add_type_name && $edu_val->enducation_id == $data_val->enducation_id)


                                            <div class="tab-pane fade" id="{{$edu_val->add_type_name}}" role="tabpanel" aria-labelledby="pills-profile-tab">

                                                <div id="lk_hotschool" class="mt-3">

                                                    222
                                                </div>
                                            </div>

                                        @endif

                                    @endforeach


                                @endforeach


                            </div>

                        </div>

                    @elseif('pills-adult'==$val->type_name)

                        <div class="tab-pane fade" id="pills-adult" role="tabpanel" aria-labelledby="pills-profile-tab">

                            1111

                        </div>

                    @elseif('pills-web'==$val->type_name)

                        <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-contact-tab">

                            222

                        </div>

                    @endif


                @endforeach



			</div>

		</section>

		<!-- 分页 -->
		<div class="fenye container ">
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item prev ">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item next">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>

		<!--------------------尾部-begin------------------------------>
		<footer id="lk_footer">
			<div class="container ">
				Copyright © 2017 研博教育集团 版权所有 桂ICP备17001896号-3
				<!-- <h3>地址:湖北省武汉市洪山区珞瑜路889-1号30楼（整层）</h3> -->
			</div>
		</footer>
		<!--------------------尾部-end------------------------------>

		<script src="lib/js/jquery-3.3.1.js"></script>
		<script src="lib/js/popper.js"></script>
		<script src="lib/js/bootstrap.js"></script>
		<script src="js/index.js"></script>
		<script type="text/javascript">
			$(function() {

				var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
				  $('.mobile_nav').css('height', _height-107)





				// 招生专业，简章等
				$('#yb_education2 #lk_hotschool .container p a').click(function(event) {
					event.stopPropagation();
					var url = 'eduDetail.blade.php'
					var schoolName = $(this).attr('rel')
					// $(location).attr('href', url+"?value="+picAlt);
					// window.open("http://www.jb51.net");
					window.location.href = encodeURI(url + "?value=" + schoolName);

				})



				$('.nav-link3').click(function() {
					// 刷新
					location.reload()

				})



				// 分页切换
				// 3.
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
				var pageItem = $(".pagination li").not(".prev,.next");

				pageItem.click(function() {
					pageItem.removeClass("active");
					$(this).not(".prev,.next").addClass("active");
				});

				//2. var pageItem = $(".pagination li").not(".prev,.next");
				//  var prev = $(".pagination li.prev");
				//  var next = $(".pagination li.next");
				//    pageItem.click(function() {
				//      pageItem.removeClass("active");
				//      $(this).not(".prev,.next").addClass("active");
				//    });
				// // 判断页码在第一个还是最后一个，页码在第一个，pre不可点击，页码在最后一个，next不可点击
				// // if( $(".pagination").children())
				//  next.click(function() {
				//     $('li.active').removeClass('active').next().addClass('active');
				//   });

				//   prev.click(function() {
				//     $('li.active').removeClass('active').prev().addClass('active');
				//   });




				//1. $('.pagination li').on('click',function () {

				//       $('.pagination li').removeClass('active');

				//       $(this).addClass('active');

				//   });

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
