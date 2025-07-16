@extends('frontend.master')

@section('content')







<!-- ================================
    START BREADCRUMB AREA
================================= -->
@include('frontend.section.breadcrumb', ['title' => 'Category', 'sub_title' => "All  $slug->name  Courses"])
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area section-padding">
    <div class="container">
      
        <div class="row">
           @forelse ($all_courses as $index =>$item)
                <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview"  data-tooltip-content="#{{ $item->course_name_slug }}">
                    <div class="card-image">
                        <a href="{{ route('course.details', $item->course_name_slug) }}" class="d-block">
                            <img class="card-img-top lazy" src="{{ asset($item->course_image) }}" data-src="{{ asset($item->course_image) }}" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">
                                @if($item->bestseller == 'yes')
                                    BestSeller
                                @else
                                    New
                                @endif
                            </div>
                            <div class="course-badge blue">-{{ round((($item->selling_price-$item->discount_price)/$item->selling_price) *100 ) }}%</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                            {{ $item->label }}
                        </h6>
                        <h5 class="card-title"><a href="course-details.html">{{ $item->course_title }}</a></h5>
                        <p class="card-text"><a href="teacher-detail.html">{{ $item->user->name }}</a></p>
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
                            <p class="card-price text-black font-weight-bold">${{ $item->discount_price }} <span class="before-price font-weight-medium">${{ $item->selling_price }}</span></p>
                              <div class="icon-element icon-element-sm shadow-sm cursor-pointer wishlist-icon"
                                            data-course-id="{{ $item->id }}" title="Add to Wishlist">
                                            <?php
                                            if(auth()->check()){
                                                $user_id = auth()->user()->id;
                                            // check if the course is already in the wishlist
                                            $isWishlisted = \App\Models\Wishlist::where('user_id', $user_id)->where('course_id', $item->id)->first();
                                            }else{
                                                $isWishlisted = null;
                                            }
                                            ?>
                                            @if($isWishlisted)
                                            <i class="la la-heart"></i>
                                            @else
                                            <i class="la la-heart-o"></i>
                                            @endif
                                        </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
           @empty
               <p class="text-center fw-bold fs-1">No Courses available</p>
           @endforelse
         
          
        </div><!-- end row -->
        <div class="text-center pt-3">
            <nav aria-label="Page navigation example" class="pagination-box">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="fs-14 pt-2">Showing 1-6 of 56 results</p>
        </div>
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->


@endsection