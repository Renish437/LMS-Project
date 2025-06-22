<div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Course Features</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item generic-list-item-flash">
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-clock mr-2 text-color"></i>Duration</span> {{  $total_lecture_duration}} hours</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-play-circle-o mr-2 text-color"></i>Lectures</span> {{ $total_no_lecture}}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-file-text-o mr-2 text-color"></i>Resources</span> {{ $course->resources }}</li>
                            
                            
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-language mr-2 text-color"></i>Language</span> English</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-lightbulb mr-2 text-color"></i>Skill level</span> {{ $course->label }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-users mr-2 text-color"></i>Students</span> 30,506</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-certificate mr-2 text-color"></i>Certificate</span> {{ $course->certificate ? 'Yes' : 'No' }}</li>
                            </ul>
                        </div>
                    </div><!-- end card -->