
<section id="lk_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#lk_carousel" data-slide-to="1"></li>
                <li data-target="#lk_carousel" data-slide-to="2"></li>
            </ol>





    <!-- 背景图  pc端 -->
    <div class="carousel-inner d-none d-sm-block">
     @foreach($banner as $key=>$val)
         @if($val->type_id == 1)
            <div class="carousel-item active">
                <img src="{{url('storage/'. $val->image )}}" class="d-block w-100" alt="...">
            </div>
         @endif
     @endforeach
    </div>


    <!-- 背景图  移动端375px -->
    <div class="carousel-inner d-block d-sm-none">
    @foreach($banner as $key=>$val)
        @if($val->type_id == 2)
                <div class="carousel-item active">
                    <img src="{{url('storage/'. $val->image )}}" class="d-block w-100" alt="...">
                </div>
        @endif
    @endforeach
    </div>
            <!-- 背景图  pc端 -->
{{--            <div class="carousel-inner d-none d-sm-block">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img src="images/slide_01_900x410.jpg" class="d-block w-100" alt="...">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="images/slide_02_900x410.jpg" class="d-block w-100" alt="...">--}}
{{--                </div>--}}
{{--                <div class="carousel-item ">--}}
{{--                    <img src="images/slide_03_900x410.jpg" class="d-block w-100" alt="...">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- 背景图  移动端375px -->--}}
{{--            <div class="carousel-inner d-block d-sm-none">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img src="images/slide_01_900x410.jpg" class="d-block w-100" alt="...">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img src="images/slide_02_900x410.jpg" class="d-block w-100" alt="...">--}}
{{--                </div>--}}
{{--                <div class="carousel-item ">--}}
{{--                    <img src="images/slide_03_900x410.jpg" class="d-block w-100" alt="...">--}}
{{--                </div>--}}
{{--            </div>--}}



            <a class="carousel-control-prev" href="#lk_carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#lk_carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
