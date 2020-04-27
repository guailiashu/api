<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="lib/css/bootstrap.css">
		<link rel="stylesheet" href="css/index.css">
		<title>集团公益</title>
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
{{--		                    <li class="nav-item active">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1" href="index.html">首页<span class="sr-only">(current)</span></a>--}}
{{--		                    </li>--}}
{{--							<li class="nav-item ">--}}
{{--							    <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link2" href="ybSchool.html">分校</a>--}}
{{--							</li>--}}
{{--		                   --}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link3" href="education.html">学历</a>--}}
{{--		                    </li>--}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link4" href="news.html">新闻</a>--}}
{{--		                    </li>--}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: #fff;" class="nav-link nav-link5"  href="active.html">公益</a>--}}
{{--		                    </li>--}}
{{--		                    <li class="nav-item">--}}
{{--		                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link6"  href="about.html">关于研博</a>--}}
{{--		                    </li>--}}
{{--							<li class="nav-item">--}}
{{--							    <a class="nav-link nav-link7 color7" target="_blank"  href="http://shop.jd.com">研博商城</a>--}}
{{--							</li>--}}

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
		<img class="d-none d-sm-block" src="images/slide_01_900x410.jpg" style="width: 100%;height: 540px;" >
		<img class="visible-xs-block d-sm-none" src="images/slide_01_900x410.jpg" style="width: 100%;height: 375px;" >
		</div>
		<!-- 研博公益内容 -->
		<div style="position: absolute;top:540px;"></div>

		<!-- 移动端导航自定义 -->
		<div class="mobile_nav">
			<div class="content">


{{--			<div class="index1">--}}
{{--				<a href="index.html">首页</a>--}}
{{--			</div>--}}
{{--			<div class="index2">--}}
{{--				<a href="ybSchool.html">分校</a>--}}
{{--			</div>--}}
{{--			<div class="index3">--}}
{{--				<a href="education.html">学历</a>--}}
{{--			</div>--}}
{{--			<div class="index4">--}}
{{--				<a href="news.html">新闻</a>--}}
{{--			</div>--}}
{{--			<div class="index5">--}}
{{--				<a href="active.html">公益</a>--}}
{{--			</div>--}}
{{--			<div class="index6">--}}
{{--				<a href="about.html">关于研博</a>--}}
{{--			</div>--}}
{{--			<div class="index">--}}
{{--				<a href="http://shop.jd.com">研博商城</a>--}}
{{--			</div>--}}
                @foreach($column as $name)

                    <div class="index">
                        <a href={{route($name->c_route)}}>{{$name->column}}</a>
                    </div>

                @endforeach

			</div>
		</div>


		<section id="yb_active2">

				<!--  研博新闻内容 -->
				<!--内容-->
				<div class="container ">
				    <div class="row">
				        <div class="col-md-4 col-lg-4">
				            <div class="media d-flex flex-column   mb-3  ">
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
				           <div class="media d-flex flex-column   mb-3  ">
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
				           <div class="media d-flex flex-column   mb-3  ">
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
				          <div class="media d-flex flex-column   mb-3  ">
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
					      <div class="media d-flex flex-column   mb-3  ">
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
					      <div class="media d-flex flex-column   mb-3  ">
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

				    </div>
				</div>

		</section>

		<!-- 分页 -->

		<div class="fenye container ">
			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center">
			    <li class="page-item prev ">
			      <a class="page-link" href="#"  aria-label="Previous">
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
			$(function () {
				var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
				  $('.mobile_nav').css('height', _height-107)


				// 分页切换
				// 3.
				  $(document).on('click', '.prev', function () {
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
				      }else{
						   // $(".prev").addClass('disabled')
					  }
				    });
				    $(document).on('click', '.next', function () {
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

				$('.nav-link5').click(function () {
					// 刷新
					location.reload()

				})


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
		</script>
	</body>
</html>
