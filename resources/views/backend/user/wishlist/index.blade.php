@extends('backend.user.master')

@section('content')
<div class="row" id="wishlist-container">
    {{-- Ajax load --}}
    {{-- <div class="col-lg-4 responsive-column-half">
        <div class="card card-item card-preview" data-tooltip-content="#{{ $course->course_name_slug }}">
            <div class="card-image">
                <a href="{{ route('course.details', $course->course_name_slug) }}" class="d-block">
                    <img class="card-img-top lazy" width="240" height="240" src="{{ asset($course->course_image) }}"
                        data-src="{{ asset($course->image) }}" alt="Card image cap">
                </a>
                <div class="course-badge-labels">
                    <div class="course-badge">
                        @if($course->bestseller == 'yes')
                        Bestseller
                        @elseif($course->featured == 'yes')
                        Featured
                        @else
                        Highest Rated
                        @endif
                    </div>
                    <div class="course-badge blue">-{{ round( (($course->selling_price -
                        $course->discount_price) / $course->selling_price) * 100 ) }}%</div>
                </div>
            </div><!-- end card-image -->
            <div class="card-body">
                <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $course->label }}</h6>
                <h5 class="card-title"><a href="{{ route('course.details', $course->course_name_slug) }}">{{
                        Str::limit($course->course_title,50) }}</a></h5>
                <p class="card-text"><a href="teacher-detail.html">{{ $course['user']['name'] }}</a>
                </p>
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
                    <p class="card-price text-black font-weight-bold">12.99 <span
                            class="before-price font-weight-medium">129.99</span></p>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer wishlist-icon"
                        data-course-id="{{ $course->id }}" title="Add to Wishlist">
                        <?php
                                            if(auth()->check()){
                                                $user_id = auth()->user()->id;
                                            // check if the course is already in the wishlist
                                            $isWishlisted = \App\Models\Wishlist::where('user_id', $user_id)->where('course_id', $course->id)->first();
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
    </div><!-- end col-lg-4 --> --}}
</div>

@endsection
@push('scripts')
    <script src="{{ asset('customjs/user/wishlist.js') }}"></script>
@endpush