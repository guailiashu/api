
<section id="lk_carousel" class="carousel slide d-none d-sm-block" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#lk_carousel" data-slide-to="1"></li>
        <li data-target="#lk_carousel" data-slide-to="2"></li>
    </ol>
    <!-- 背景图  pc端 -->
    <div class="carousel-inner  ">
        @foreach($banner_pc as $key=>$val)


            @if($key==0)
                <div class="carousel-item active">
                    <img src="{{url('storage/'. $val->image )}}" class="d-block w-100" alt="...">
                </div>
            @else
                <div class="carousel-item">
                    <img src="{{url('storage/'. $val->image )}}" class="d-block w-100" alt="...">
                </div>
            @endif

        @endforeach
    </div>
    <a class="carousel-control-prev" href="#lk_carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#lk_carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section id="lk_carousel_mobail" class="carousel slide d-block d-sm-none" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#lk_carousel_mobail" data-slide-to="0" class="active"></li>
        <li data-target="#lk_carousel_mobail" data-slide-to="1"></li>
        <li data-target="#lk_carousel_mobail" data-slide-to="2"></li>
    </ol>
    <!-- 背景图  移动端375px -->
    <div class="carousel-inner ">
        @foreach($banner_pc  as $key=>$val)

                @if($key==0)
                    <div class="carousel-item active">
                        <img src="{{url('storage/'. $val->image )}}" class="d-block w-100" alt="...">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{url('storage/'. $val->image )}}" class="d-block w-100" alt="...">
                    </div>
                @endif

        @endforeach
    </div>
    <a class="carousel-control-prev" href="#lk_carousel_mobail" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#lk_carousel_mobail" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

