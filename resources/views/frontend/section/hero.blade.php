<section class="hero-area">
    <div class="hero-slider owl-action-styled">
       @foreach ($sliders as $key => $slider) 
        <div class="hero-slider-item " style="background-image: url({{ asset($slider->image) }})">
            
            <div class="container">
                <div class="hero-content">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3">{!! $slider->title !!}</h2>
                        <p class="section__desc text-white pb-4">
                            {!! $slider->short_description !!}
                        </p>
                    </div><!-- end section-heading -->
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        <a href="admission.html" class="btn theme-btn mr-4 mb-4">Join with Us <i class="la la-arrow-right icon ml-1"></i></a>
                        <a href="#" class="btn-text video-play-btn mb-4" data-fancybox data-src="{{ $slider->video_url }}" autoplay="false">
                            Watch Preview<i class="la la-play icon-btn ml-2"></i>
                        </a>
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div>
           
       @endforeach
        <!-- end hero-slider-item -->
       
   
</section>