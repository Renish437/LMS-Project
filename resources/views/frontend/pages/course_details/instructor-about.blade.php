    <div class="course-overview-card pt-4">
                       <h3 class="fs-24 font-weight-semi-bold pb-4">About the instructor</h3>
                       <div class="instructor-wrap">
                      
                           <div class="media media-card">
                               <div class="instructor-img">
                                   <a href="teacher-detail.html" class="media-img d-block">
                                       <img class="lazy" src="{{ asset($course->user->photo) }}" data-src="{{ asset($course->user->photo) }}" alt="Avatar image">
                                   </a>
                                   <ul class="generic-list-item pt-3">
                                       <li><i class="la la-star mr-2 text-color-3"></i> 4.6 Instructor Rating</li>
                                       <li><i class="la la-user mr-2 text-color-3"></i> 45,786 Students</li>
                                       <li><i class="la la-comment-o mr-2 text-color-3"></i> 2,533 Reviews</li>
                                       <li><i class="la la-play-circle-o mr-2 text-color-3"></i> {{ $course->user->courses->count() }} Courses</li>
                                       <li><a href="teacher-detail.html">View all Courses</a></li>
                                   </ul>
                               </div><!-- end instructor-img -->
                               <div class="media-body">
                                   <h5><a href="teacher-detail.html">{{ $course->user->name }}</a></h5>
                                   <span class="d-block lh-18 pt-2 pb-3">Joined {{ $course->user->created_at->diffForHumans() }}</span>
                                   <p class="text-black lh-18 pb-3">
                                      {!! $course->user->bio !!}
                                    </p>
                                 
                                   {{-- <div class="collapse" id="collapseMoreTwo">
                                       <p class="pb-3">After learning the hard way, Tim was determined to become the best teacher he could, and to make his training as painless as possible, so that you, or anyone else with the desire to become a software developer, could become one.</p>
                                       <p class="pb-3">If you want to become a financial analyst, a finance manager, an FP&A analyst, an investment banker, a business executive, an entrepreneur, a business intelligence analyst, a data analyst, or a data scientist, <strong class="text-black font-weight-semi-bold">Tim Buchalka's courses are the perfect course to start</strong>.</p>
                                   </div>
                                   <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMoreTwo" role="button" aria-expanded="false" aria-controls="collapseMoreTwo">
                                       <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-14"></i></span>
                                       <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-14"></i></span>
                                   </a> --}}
                               </div>
                           </div>
                       </div><!-- end instructor-wrap -->
                   </div><!-- end course-overview-card -->