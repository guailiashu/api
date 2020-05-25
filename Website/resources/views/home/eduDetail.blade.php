@include('home.layouts._headerTwo')
		<title>学历教育</title>
	</head>

	<body style="">
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

                            @foreach($column as $route_key=>$route_val)
                                @if('index' == $route_val['c_route'])
                                    <li class="nav-item active">
                                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1 " href={{url($route_val['c_route'])}}>{{$route_val['column']}}<span class="sr-only">(current)</span></a>
                                    </li>
                                @elseif('education' == $route_val['c_route'])
                                    <li class="nav-item">

                                        <a style="color: #fff;" class="nav-link nav-link3 " href="{{url($route_val['c_route'])}}">{{$route_val['column']}}</a>
                                    </li>
                                @else

                                    <li class="nav-item">
                                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link5 "  href="{{url($route_val['c_route'])}}">{{$route_val['column']}}</a>
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

		<!-- 背景图  pc端540px，移动端375px -->
		<img class="d-none d-sm-block" src={{url("images/slide_03_900x410.jpg")}} style="width: 100%;height: 540px;" >
		<img class="visible-xs-block d-sm-none" src={{url("images/slide_01_900x410.jpg")}} style="width: 100%;height: 375px;" >
	</div>

	<div style="position: absolute;top: 540px;"></div>

	<!-- 移动端导航自定义 -->
	<div class="mobile_nav">
		<div class="content">

            @foreach($column as $route_key=>$route_val)
                <div class="index1">
                    <a href="index.html">首页</a>
                </div>
            @endforeach
		<div class="index1">
			<a href="{{url($route_val['c_route'])}}">{{$route_val['column']}}</a>
		</div>
{{--		<div class="index">--}}
{{--			<a href="http://shop.jd.com">研博商城</a>--}}
{{--		</div>--}}
		</div>
	</div>

	<!-- 内容 -->
	<section id="eduDetail">
		<div class="container-fluid" style="background-color: #fff;padding: 30px 0;box-shadow:0px 3px 6px rgba(0,0,0,0.16);">

		<div class="container">
			<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">学校主页</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">招生专业</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">招生简章</a>
			  </li>
			</ul>
			</div>

			</div>
			<div class="container">
			<div class="tab-content" id="pills-tabContent">


			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				   <!-- 中大屏幕显示，小屏幕，超小屏幕不显示 -->
				<div class="col-md-12 col-lg-12 d-none d-sm-none d-md-none d-lg-block" style="margin-top: 60px;">
				    <div class="media d-flex   mb-3  active">
				        <div class="media-left mr-2">
				            <img src={{url('storage/'.$data->school_badge)}} alt="" class="media-object  img-fluid ">
				        </div>
				        <div class=" d-none d-sm-none d-md-block media-body ">
				            <h5 class="media-heading text-center">
                                {{ $data->name }}
				            </h5>
				            <p class="text-muted">
{{--				               吉林大学应用技术学院是新吉林大学成立后组建的一所新学院，由原吉林大学高等职业技术学院、原吉林工业大学高等技术学院、原长春科技大学工程技术学院合并组成。学院是一所以培养高等技术应用型人才为特色,理、工、文、管、艺兼备的综合性学院。--}}
				            <div class="text-muted">

                             {!! $data->add_school_index !!}
{{--							吉林大学应用技术学院坐落在风景秀丽的长春南湖湖畔，创建于2000年，是吉林大学以重点培养高等技能型专门人才为目标的直属学院，现设有16个专业，各专业均属与经济建设关系密切的应用技能型专业。其中岩土工程技术、计算机网络技术两个专业为吉林省教学改革示范专业；机电一体化、区域地质调查及矿产普查、汽车检测与维修技术三个专业为吉林省教学改革特色专业。学院各专业的办学特点是以就业为导向，与先进企业紧密合作，走产学研结合的发展道路，培养适应生产、建设、管理、服务第一线需要，德智体美全面发展的高等技能型专门人才。--}}
							 </div>
							</p>
				        </div>
				    </div>
				</div>


			  </div>


			  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  <div class=" " style="margin-top: 60px;">
{{--					  <h4>工商企业管理</h4>--}}
                            {!! $data->specialty !!}
				  </div>
{{--				  <div class="" style="text-indent: 2em;">--}}
{{--				  	工商企业管理，是对企业的生产经营活动进行计划、组织、领导、人员配备、指挥、协调和控制等一系列职能的总称。 这一专业的设置是为了培养在社会主义市场经济条件下从事工商业及其他各类企业管理方面工作的专门人才。--}}
{{--				  </div>--}}

{{--				  <div class="mt-3 ">--}}
{{--				  	<h4>测绘工程</h4>--}}

{{--				  </div>--}}
			  </div>

			  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				  <div class="text-center " style="margin-top: 30px;">
                      {!! $data->forms !!}
				  </div>
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
				var _height = $(window).height(); //获取当前窗口的高度,赋值给轮播图
				  $('.mobile_nav').css('height', _height-107)


				var urlinfo = window.location.href,//获取url
			value = urlinfo.split("?")[1].split("=")[1]; //拆分url得到”=”后面的参数
			console.log(decodeURI(value))
			//alert(decodeURI(value))



				$('.nav-link3').click(function () {
					 	 // 刷新
					 	 location.reload()
				})





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

