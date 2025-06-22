<div class="course-overview-card pt-4">
                       <h3 class="fs-24 font-weight-semi-bold pb-4">Students also bought</h3>
                       <div class="view-more-carousel owl-action-styled">
                        @forelse ($similar_courses as $similar_course)
                            
                        <div class="card card-item card-item-list-layout border border-gray shadow-none">
                            <div class="card-image">
                                <a href="{{ route('course.details', $similar_course->course_name_slug) }}" class="d-block">
                                    <img class="card-img-top" src="{{ asset($similar_course->course_image) }}" data-src="{{ asset($similar_course->course_image) }}" alt="Card image cap">
                                </a>
                                <div class="course-badge-labels">
                                    <div class="course-badge">
                                        @if($similar_course->bestseller == 'yes')
                                            Bestseller
                                        @elseif($similar_course->featured == 'yes')
                                            Featured
                                        @else
                                            Highest Rated
                                        @endif
                                    </div>
                                    <div class="course-badge blue">- {{ round( (($similar_course->selling_price - $similar_course->discount_price)  / $similar_course->selling_price) * 100 ) }}</div>
                                </div>
                            </div><!-- end card-image -->
                            <div class="card-body">
                                <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $similar_course->label }}</h6>
                                <h5 class="card-title"><a href="{{ route('course.details', $similar_course->course_name_slug) }}">{{ $similar_course->course_title }}</a></h5>
                                <p class="card-text"><a href="#">{{ $similar_course->user->name }}</a></p>
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
                                    <p class="card-price text-black font-weight-bold">${{ $similar_course->discount_price }} <span class="before-price font-weight-medium">${{ $similar_course->selling_price }}</span></p>
                                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        @empty
                          <div class="alert alert-danger">
                            <p>No similar course found</p>
                          </div>
                        @endforelse
                        
                       </div><!-- end view-more-carousel -->
                   </div><!-- end course-overview-card -->