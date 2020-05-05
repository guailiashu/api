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
                                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link1 " href={{url($route_val['c_route'])}}>首页<span class="sr-only">(current)</span></a>
                                    </li>
                                @elseif('education' == $route_val['c_route'])
                                    <li class="nav-item">
                                        <a style="color: #fff;" class="nav-link nav-link3 " href="#">{{$route_val['column']}}</a>
                                    </li>
                                @else

                                    <li class="nav-item">
                                        <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link5 "  href="{{url($route_val['c_route'])}}">{{$route_val['column']}}</a>
                                    </li>
                                @endif
                            @endforeach


{{--							<li class="nav-item ">--}}
{{--							    <a style="color: rgba(255,255,255,0.5);" class="nav-link nav-link2 " href="ybSchool.html">分校</a>--}}
{{--							</li>--}}

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
				            <img src={{url($data->school_badge)}} alt="" class="media-object  img-fluid ">
				        </div>
				        <div class=" d-none d-sm-none d-md-block media-body ">
				            <h5 class="media-heading text-center">
                                {{ $data->name }}
				            </h5>
				            <p class="text-muted">
				               吉林大学应用技术学院是新吉林大学成立后组建的一所新学院，由原吉林大学高等职业技术学院、原吉林工业大学高等技术学院、原长春科技大学工程技术学院合并组成。学院是一所以培养高等技术应用型人才为特色,理、工、文、管、艺兼备的综合性学院。
				            <div class="text-muted">


							吉林大学应用技术学院坐落在风景秀丽的长春南湖湖畔，创建于2000年，是吉林大学以重点培养高等技能型专门人才为目标的直属学院，现设有16个专业，各专业均属与经济建设关系密切的应用技能型专业。其中岩土工程技术、计算机网络技术两个专业为吉林省教学改革示范专业；机电一体化、区域地质调查及矿产普查、汽车检测与维修技术三个专业为吉林省教学改革特色专业。学院各专业的办学特点是以就业为导向，与先进企业紧密合作，走产学研结合的发展道路，培养适应生产、建设、管理、服务第一线需要，德智体美全面发展的高等技能型专门人才。
							 </div>
							</p>
				        </div>
				    </div>
				</div>

				<!-- 大屏幕不显示，中，小屏幕，超小屏幕才显示 -->
				<div class="col-md-6 col-lg-6 visible-xs-block d-sm-block d-md-block d-lg-none" style="margin-top: 60px;">
				    <div class="media d-flex flex-column  mb-3  ">
				        <div class="media-left mr-2">
				            <img src={{url("images/jilin.jpg")}} alt="" class="media-object  img-fluid "
				               >
				        </div>
				        <div class=" media-body mt-3">
				            <h5 class="media-heading text-center">
				              吉林大学
				            </h5>
				            <p class="text-muted">
				             吉林大学应用技术学院是新吉林大学成立后组建的一所新学院，由原吉林大学高等职业技术学院、原吉林工业大学高等技术学院、原长春科技大学工程技术学院合并组成。学院是一所以培养高等技术应用型人才为特色,理、工、文、管、艺兼备的综合性学院。
				           <div class="text-muted">


				           吉林大学应用技术学院坐落在风景秀丽的长春南湖湖畔，创建于2000年，是吉林大学以重点培养高等技能型专门人才为目标的直属学院，现设有16个专业，各专业均属与经济建设关系密切的应用技能型专业。其中岩土工程技术、计算机网络技术两个专业为吉林省教学改革示范专业；机电一体化、区域地质调查及矿产普查、汽车检测与维修技术三个专业为吉林省教学改革特色专业。学院各专业的办学特点是以就业为导向，与先进企业紧密合作，走产学研结合的发展道路，培养适应生产、建设、管理、服务第一线需要，德智体美全面发展的高等技能型专门人才。
				            </div>
							</p>
				        </div>
				    </div>
				</div>


			  </div>


			  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  <div class=" " style="margin-top: 60px;">
					  <h4>工商企业管理</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	工商企业管理，是对企业的生产经营活动进行计划、组织、领导、人员配备、指挥、协调和控制等一系列职能的总称。 这一专业的设置是为了培养在社会主义市场经济条件下从事工商业及其他各类企业管理方面工作的专门人才。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

				  <div class="mt-3 ">
				  	<h4>测绘工程</h4>

				  </div>
				  <div class="" style="text-indent: 2em;">
				  	测绘工程专业是一门专业性很强的综合学科，既要有主干学科的支持，又有众多相关学科的支持。该专业主要研究空间、电子、信息、激光、惯性等科学的基本理论与技术，并研究利用这些技术测定地球与其它星体形状、建筑物（构筑物）的三维特征及其与指定参考系的关系、地球重力场及其内部物理特征、运动物体的特征及其多维参数，研究这些技术在工程、工业和人类生活中应用的基本理论与方法。
				  </div>

			  </div>
			  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				  <div class="text-center " style="margin-top: 30px;">
				  	吉林大学2017年成人高等教育招生简章
				  </div>

				  <div class="text-center mt-3">
				  	学校概况
				  </div>

				  <div class="c1">


				  吉林大学坐落在吉林省省会长春市，是教育部直属的全国重点综合性大学，是国家首批“211工程”和“985工程”重点建设的研究型大学，是我国办学规模最大的高等学府。

				  学校师资力量雄厚，现有教师6599人，其中教授1985人，博士生指导教师1213人。有中国科学院和中国工程院院士39人(双聘29人)，哲学社会科学资深教授7人。

				  继续教育学院是吉林大学成人学历（成人高等教育、网络教育、自学考试）与非学历（各类培训）继续教育的管理部门和办学单位。学院坚持“规范办学、科学管理、质量至上、稳步发展”的办学理念，秉承完善终身教育体系、服务全民终身学习的办学宗旨，逐步建立面向学习者需求的多样化人才培养模式，为社会各行各业培养了大批应用型人才，获得上级主管部门多次嘉奖和社会各界广泛赞誉。经过深化改革、转型发展，逐渐形成继续教育学院、网络教育学院、培训学院“三院一体”的管理体制。我校办学条件优越，拥有功能齐全、设施完备、环境优雅、交通便利的办学场所。
				  </div>

				  <div class="text-center mt-3">
				  招生简章
				  </div>
				  <div class="c1">
				  一、报考条件
				  </div>

				   <div class="c1">
				  1、报考高中起点升本科或高中起点升专科的考生应具有高中毕业文化程度。报考专科起点升本科的考生必须具有经教育部审定核准的国民教育系列高等学校、高等教育自学考试机构颁发的专科毕业证及以上毕业证书的人员，否则不能进行新生学籍电子注册并将取消其入学资格。
				  </div>

				  <div class="c1">
				  2、根据卫生部《关于2004年全国成人高校医学类专业招生条件建议的函》（卫科教便〔2004〕57号）文件要求，报考成人高校医学门类专业的考生应具备以下条件：

				  报考护理学专业的人员应当取得省级卫生行政部门颁发的执业护士证书。
				  </div>

				  <div class="mt-3">
				  二、报名及考试时间
				  </div>

				  <div >
				  按当地省（市、自治区）招生办规定的时间、地点报名，多数省份安排在每年的8月下旬或9月初进行网上报名，9月上旬到所在地省招生办指定的市、县招生办进行现场确认。

				  2017年全国成人高校招生统一考试时间为10月28日、29日。

				  吉林省网上报名时间2017年9月8日至18日，报名网址：http://www.jleea.com.cn/。
				   </div>

				   <div class="mt-3">
				  三、学费标准
				  </div>

				   <div >
				  学费标准执行吉教计字【2000】68号、吉省价综【2013】193号文件规定的标准，根据吉政办发[2006]31号《关于进一步规范高等学校教育收费管理的若干规定》的文件要求收费。
				   </div>

				   <div class="mt-3">
				  四、录取
				   </div>

				    <div >
				  根据教育部和各省招生办有关规定，按照德、智、体、美全面衡量的原则，从高分到低分择优录取。考生成绩达到所在省、直辖市、自治区招生部门规定的最低录取分数线，我校将按有关规定录取。
				  </div>

				   <div class="mt-3">
				  五、学制
				  </div>

				  高中起点升专科学制2.5年；专科起点升本科学制2.5年。


				   <div class="mt-3">
				  六、考试科目
				  </div>

				  <div >
				 （一）高中起点专科（含高职）各专业统考科目
				   </div>

				   <div >
				  1、文史：语文、数学（文科类）、外语
				   </div>

				   <div >
				  2、理工（含医学）：语文、数学（理科类）、外语
				  </div>

				   <div >
				   （二）专科起点本科统考科目
				   </div>

				    <div >
				  1、文史：政治、外语、大学语文
				   </div>

				    <div >
				  2、理工：政治、外语、高等数学（一）
				  </div>

				  <div >
				  3、经管：政治、外语、高等数学（二）
				  </div>

				  <div >
				  4、法学：政治、外语、民法
				  </div>

				   <div >
				  5、医学：政治、外语、医学综合
				  </div>
				  外语分英、日、俄三个语种，由考生任选一种，具体要求按各省招生办有关规定执行。所有统一考试科目满分均为150分；高中起点本科、高中起点专科的统考科目每门考试时间为120分钟，专科起点升本科每门考试时间为150分钟。

					<div class="mt-3">
				  七、学历及学位
				  </div>
				  我校招收的业余、函授学生，完成教学计划规定的全部课程并符合毕业条件者，由吉林大学颁发国家承认学历的成人高等教育毕业证书。本科毕业生符合吉林大学学士学位授予条件，并通过吉林省学位委员会统一组织的成人高等教育学士学位外语考试，授予吉林大学成人高等教育学士学位。

				  <div >
				  成人教育招生办公室联系电话：0431-85095267
				  </div>

				  <div class="mt-3">
				  联系人：郝丽娟、王竞移
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

