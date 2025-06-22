 <div class="course-overview-card bg-gray p-4 rounded">
                       <h3 class="fs-24 font-weight-semi-bold pb-3">What you'll learn?</h3>
                       <ul class="generic-list-item overview-list-item">
                        @forelse($course->course_goals as $key => $value)
                               <li><i class="la la-check mr-1 text-black"></i> {{ $value->goal_name }}</li>
                        @empty
                            <li><i class="la la-check mr-1 text-black"></i> No goals</li>
                        @endforelse
               
                       </ul>
                   </div><!-- end course-overview-card -->

 <div class="course-overview-card bg-gray p-4 rounded">
                       <h3 class="fs-16 font-weight-semi-bold">Curated for the <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> collection</h3>
                   </div><!-- end course-overview-card -->
                   <div class="course-overview-card">
                       <h3 class="fs-24 font-weight-semi-bold pb-3">Requirements</h3>
                       <ul class="generic-list-item generic-list-item-bullet fs-15">
                       
                          {!! $course->prerequisites !!}
                          
                           
                       </ul>
                   </div><!-- end course-overview-card -->
                    {{-- <div class="course-overview-card border border-gray p-4 rounded">
                       <h3 class="fs-20 font-weight-semi-bold">Top companies trust Aduca</h3>
                       <p class="fs-15 pb-1">Get your team access to Aduca's top 5,000+ courses</p>
                        <div class="pb-3">
                            <img width="85" class="mr-3" src="images/sponsor-img.png" alt="company logo">
                            <img width="80" class="mr-3" src="images/sponsor-img2.png" alt="company logo">
                            <img width="80" class="mr-3" src="images/sponsor-img3.png" alt="company logo">
                            <img width="70" class="mr-3" src="images/sponsor-img4.png" alt="company logo">
                        </div>
                        <a href="for-business.html" class="btn theme-btn theme-btn-sm">Try Aduca for Business</a>
                   </div><!-- end course-overview-card --> --}}
                   <div class="course-overview-card">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">Description</h3>
                     {!! $course->description !!}
                       <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
                           <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-14"></i></span>
                           <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-14"></i></span>
                       </a>
                   </div><!-- end course-overview-card -->