@extends('frontend.master')

@section('content')




<!-- ================================
    START BREADCRUMB AREA
================================= -->
@include('frontend.section.breadcrumb', ['title' => 'Category', 'sub_title' => 'All Category'])
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START CATEGORY AREA
======================================-->
<section class="category-area section--padding">
    <div class="container">
        <div class="category-wrapper">
            <div class="row">
               @forelse ($all_categories as $item)
                    <div class="col-lg-4 responsive-column-half">
                    <div class="category-item">
                        <img style="width: 420px; height: 280px; cursor: pointer;"  class="cat__img lazy" src="{{ asset($item->image) }}" data-src="{{ asset($item->image) }}" alt="Category image">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="#">{{ $item->name }}</a></h3>
                                <p class="cat__meta">{{ $item->courses->count() }} courses</p>
                                <a href="{{ route('front.category.single', $item->slug) }}" class="btn theme-btn theme-btn-sm theme-btn-white">Explore<i class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
               @empty
                   <p class="text-center fw-bold fs-1">No category found</p>
               @endforelse
           
            </div><!-- end row -->
        </div><!-- end category-wrapper -->
    </div><!-- end container -->
</section><!-- end category-area -->
<!--======================================
        END CATEGORY AREA
======================================-->


@endsection