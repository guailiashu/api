$(function () {
        $(document).on('scroll',function(e){
            if($(document).scrollTop() >= 120){
                $('#lk_header .navbar-lk').addClass('navbar-fixed')
                $('#lk_header .navbar-lk .container').addClass('container-fixed').removeClass('container')
                // $('#lk_header .navbar-lk .container').removeClass('container')
                $('#lk_header .nav-link').not('.nav-link1').addClass('nav-link-fixed')
                $('#lk_header .nav-link1').addClass('navbar-fixed-active')
            }else{
                $('#lk_header .navbar-lk .container-fixed').addClass('container').removeClass('container-fixed')
                // $('#lk_header .navbar-lk .container-fixed').removeClass('container-fixed')
                $('#lk_header .navbar-fixed').removeClass('navbar-fixed')
                $('#lk_header .nav-link').removeClass('nav-link-fixed')
                $('#lk_header .nav-link1').removeClass('navbar-fixed-active')
            }
        })
        // $('.navbar-lk').on().mouseover(function(){
        //     console.log(9999999)
        // })
        $('.nav-link-fixed').on('click',function(){
            console.log('999999999')
            $(this).css({
                'border-bottom':'2px solid #1677FF'
            })
        })
        // $('.nav-link').bind('mouseleave',function(){
        //     $(this).css({
        //         'border-bottom':'none'
        //     })
        // })
        // $('.nav-link-fixed').css({
        //     'border-bottom':'2px solid #1677FF'
        // })
    // 1. 轮播图
    // $(window).on('resize', () => {
    //     // 1.窗口的宽度
    //     let clientW = $(window).width();
    //     // 2. 设置临界点
    //     let isShowBigImage = clientW >= 900;
    //     // 3. 获取所有item
    //     let $allItems = $('#lk_carousel .carousel-item');
    //     // console.log($allItems);
    //     // 4. 遍历
    //     $allItems.each((index, item) => {
    //         // 4.1 取出图片的路径
    //         let src = isShowBigImage ? $(item).data('lg-img') : $(item).data('sm-img');
    //         let imgUrl = `url(${src})`;
    //         // 4.2 设置背景
    //         $(item).css({
    //             backgroundImage: imgUrl
    //         });
    //         // 4.3 创建img标签
    //         if (!isShowBigImage) { // 大屏幕
    //             let imgEle = `<img src="${src}">`;
    //             $(item).empty().append(imgEle);
    //         } else { // 小屏幕
    //             $(item).empty();
    //         }
    //     });
    // });
    // $(window).trigger('resize');

    // // 3. 添加轮播图的滑动
    // let startX = 0, endX = 0;
    // let carouselInner = $('#lk_carousel .carousel-inner')[0];
    // let $carousel = $('#lk_carousel');
    // let carousel = $carousel[0];

    // carouselInner.addEventListener('touchstart', (e) => {
    //     startX = e.targetTouches[0].clientX;
    // });
    // carouselInner.addEventListener('touchmove', (e) => {
    //     endX = e.targetTouches[0].clientX;
    //     if (endX - startX > 0) {  // 上一张
    //         $carousel.carousel('prev');
    //     } else if (endX - startX < 0) { // 下一张
    //         $carousel.carousel('next');
    //     }
    // });

    // 4. 超出内容处理
    // $(window).on('resize', ()=>{
    //     let $ul = $('#lk_product .nav');
    //     let $allLis = $('.nav-item', $ul);
    //     let totalW = 0; // 所有li的宽度
    //     $allLis.each((index, item)=>{
    //         totalW += $(item).width();
    //     });
    //     // console.log(totalW);

    //     // 获取父标签的宽度
    //     let parentW = $ul.parent().width();
    //     // console.log(parentW);
    //     if(totalW > parentW){
    //         $ul.css({
    //             width: totalW + 'px'
    //         })
    //     }else {
    //         $ul.removeAttr('style');
    //     }
    // }).trigger('resize');

    // 2. 工具的提示
    $('[data-toggle="tooltip"]').tooltip();
});