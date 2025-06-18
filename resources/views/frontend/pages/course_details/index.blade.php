
@extends('frontend.master')

@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
@include('frontend.pages.course_details.breadcrumb')
<!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START COURSE DETAILS AREA
======================================-->
<section class="course-details-area pb-20px">
    <div class="container">
        <div class="row">
           <div class="col-lg-8 pb-5">
               <div class="course-details-content-wrap pt-90px">

                @include('frontend.pages.course_details.learn-section')
                  
                  
@include('frontend.pages.course_details.course-content')


@include('frontend.pages.course_details.student-bought')

@include('frontend.pages.course_details.instructor-about') 
                   
               


                 @include('frontend.pages.course_details.student-feedback')
                  @include('frontend.pages.course_details.student-review')
                  
                  @include('frontend.pages.course_details.add-review')
               </div><!-- end course-details-content-wrap -->
           </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
               @include('frontend.pages.course_details.right-sidebar')
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end course-details-area -->
<!--======================================
        END COURSE DETAILS AREA
======================================-->

<!--======================================
        START RELATED COURSE AREA
======================================-->
@include('frontend.pages.course_details.course-preview-modal')
@include('frontend.pages.course_details.related-course')
<!-- end related-course-area -->
<!--======================================
        END RELATED COURSE AREA
======================================-->

<!--======================================
        START CTA AREA
======================================-->
@include('frontend.pages.course_details.become-teacher')
<!-- end cta-area -->
<!--======================================
        END CTA AREA
======================================-->

<div class="section-block"></div>


@push('scripts')
    
@endpush




@endsection

