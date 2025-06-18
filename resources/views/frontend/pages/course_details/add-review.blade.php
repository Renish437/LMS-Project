 <div class="course-overview-card pt-4">
                       <h3 class="fs-24 font-weight-semi-bold pb-4">Add a Review</h3>
                       <div class="leave-rating-wrap pb-4">
                           <div class="leave-rating leave--rating">
                               <input type="radio" name='rate' id="star5"/>
                               <label for="star5"></label>
                               <input type="radio" name='rate' id="star4"/>
                               <label for="star4"></label>
                               <input type="radio" name='rate' id="star3"/>
                               <label for="star3"></label>
                               <input type="radio" name='rate' id="star2"/>
                               <label for="star2"></label>
                               <input type="radio" name='rate' id="star1"/>
                               <label for="star1"></label>
                           </div><!-- end leave-rating -->
                       </div>
                       <form method="post" class="row">
                           <div class="input-box col-lg-6">
                               <label class="label-text">Name</label>
                               <div class="form-group">
                                   <input class="form-control form--control" type="text" name="name" placeholder="Your Name">
                                   <span class="la la-user input-icon"></span>
                               </div>
                           </div><!-- end input-box -->
                           <div class="input-box col-lg-6">
                               <label class="label-text">Email</label>
                               <div class="form-group">
                                   <input class="form-control form--control" type="email" name="email" placeholder="Email Address">
                                   <span class="la la-envelope input-icon"></span>
                               </div>
                           </div><!-- end input-box -->
                           <div class="input-box col-lg-12">
                               <label class="label-text">Message</label>
                               <div class="form-group">
                                   <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5"></textarea>
                               </div>
                           </div><!-- end input-box -->
                           <div class="btn-box col-lg-12">
                               <div class="custom-control custom-checkbox mb-3 fs-15">
                                   <input type="checkbox" class="custom-control-input" id="saveCheckbox" required>
                                   <label class="custom-control-label custom--control-label" for="saveCheckbox">
                                       Save my name, and email in this browser for the next time I comment.
                                   </label>
                               </div><!-- end custom-control -->
                               <button class="btn theme-btn" type="submit">Submit Review</button>
                           </div><!-- end btn-box -->
                       </form>
                   </div><!-- end course-overview-card -->