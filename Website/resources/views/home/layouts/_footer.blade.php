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
