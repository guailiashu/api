@include('home.layouts._headerTwo')
        <title>新闻详情</title>
        <style>
           .right-brackets-selected-gray{
               display: inline;
               width:32px !important;
               height:20px !important;
           }
        #yb_news2 .news-detail-container{
            margin-top: 60px;
            padding-bottom: 40px;
        }
        #yb_news2 .new-addr,.news-detail-content-parent{
            padding-bottom: 30px;
            border-bottom:1px solid rgba(153,153,153,1);
            margin-bottom: 40px;
        }
        #yb_news2 .new-addr{
            color: rgba(153,153,153,1);
        }
        .news-detail-subtitle{
            margin-top: 20px;
            color: rgba(153,153,153,1);
        }
        .news-detail-content-text{
            line-height: 30px;
        }
        /* .text-center{
            text-align: center;
        } */
        </style>
	</head>
	<body style="background-color:#F4F4F4">
	  <div class="shouye" >
		<header id="lk_header">

		    <nav class="navbar navbar-expand-lg navbar-light navbar-lk">
		        <div class="container">
		            <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
		                <img src={{ url("images/Yanbo.png") }} alt="">
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
		</div>S
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

                    <div class="index">
                        <a href="http://shop.jd.com" rel="nofollow">研博商城</a>
                    </div>
			</div>
		</div>


		<section id="yb_news2">
			<div class="container news-detail-container">
                <div class="new-addr d-flex align-items-center">
                    <span class='news-detail-action'>您的位置：</span>
                    <span class='page-mark' >
                        <a href="{{ url('index') }}" >首页</a>
                    </span>
                    <img src={{ url("images/right-brackets-selected-gray.png") }} alt="" class='right-brackets-selected-gray'>
                    <span class='page-mark'>
                    <span class='page-mark' >
                        <a href="{{ url('news') }}" >新闻资讯</a>
                    </span>
                    </span>
                    <img src={{ url("images/right-brackets-selected-gray.png") }} alt="" class='right-brackets-selected-gray'>
                    <span class='page-mark'>最新</span>
                </div>
                <div class='news-detail-content'>
                    <div class='d-flex align-items-center flex-column news-detail-content-parent'>
                        <h4 class='news-detail-content-title text-center'>
                            {{$data->title}}
                        </h4>
                        <div class='news-detail-date text-center'>{{$data->created_at }}</div>
{{--                        <div class='news-detail-subtitle'>--}}
{{--                            研博新闻研博新闻研博新闻研博新闻.....--}}
{{--                        </div>--}}
                    </div>
                    <div class="news-detail-content-text">
                        {!! $data->details  !!}
                    </div>
                </div>
			</div>
		</section>


		<!--------------------尾部-begin------------------------------>
      @include('home.layouts._footer')
		<!--------------------尾部-end------------------------------>

      <script src={{url("lib/js/jquery-3.3.1.js")}}></script>
      <script src={{url("lib/js/popper.js")}}></script>
      <script src={{url("lib/js/bootstrap.js")}}></script>
      <script src={{url("js/index.js")}}></script>
		<script type="text/javascript">
			$(function () {
				let _height = $(window).height();  // 获取当前窗口的高度,赋值给轮播图
				let pageItem = $(".pagination1 li").not(".prev1,.next1");
				$('.mobile_nav').css('height', _height-107)

				//研博新闻 分页切换

				$(document).on('click', '.prev1', function () {
					// 1- get first element to check if it has class 'active',
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

				pageItem.click(function() {
					pageItem.removeClass("active");
					$(this).not(".prev1,.next1").addClass("active");
				});



				$('.nav-link4').click(function () {
					// 刷新
					location.reload()
				})

			})

		</script>
		<script type="text/javascript">
			let body = document.querySelector('body');
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

		  	/*绑定touchmove*/
			body.addEventListener('touchmove',function(e){
				// $('.collapse').collapse('hide')
				$('.mobile_nav').fadeOut("slow");
			})
		</script>
	</body>
</html>

