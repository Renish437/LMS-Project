<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h5 class="ribbon ribbon-lg mb-2">Learn on your schedule</h5>
                <h2 class="section__title">Students are viewing</h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach ($all_categories as $key => $data)
                @foreach ($data->courses as $course)
                    <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                    <div class="card-image">
                        <a href="{{ route("course.details",$course->course_name_slug) }}" class="d-block">
                            <img  width="250" height="250" class="card-img-top" src="{{ asset($course->course_image) }}" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge"></div>
                            <div class="course-badge blue">-{{ round((($course->selling_price-$course->discount_price)/$course->selling_price) *100 )}}%</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $course->label }}</h6>
                        <h5 class="card-title"><a href="{{ route("course.details",$course->course_name_slug) }}">{{ Str::limit($course->course_title,50) }}</a></h5>
                        <p class="card-text"><a href="teacher-detail.html">{{ $course->user->name }}</a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price text-black font-weight-bold">${{ $course->discount_price }} <span
                                    class="before-price font-weight-medium">${{ $course->selling_price }}</span></p>
                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
                                <i class="la la-heart-o"></i></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                    
                @endforeach
                @endforeach

            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>