<section class="feature-area pb-90px">
    <div class="container">
        <div class="row feature-content-wrap">
            @foreach ($info_boxes as $info_box)
                <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                       
                       {!! $info_box->icon !!}
                    </div>
                    <h3 class="info__title">{{ $info_box->title }}</h3>
                    <p class="info__text">{{ $info_box->description }}</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            @endforeach
        
        </div><!-- end row -->
    </div><!-- end container -->
</section>