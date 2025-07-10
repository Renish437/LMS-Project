 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">Instructor</h4>
         </div>
         <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li class="{{ setActive(['instructor.dashboard']) }}">
             <a href="{{ route('instructor.dashboard') }}">
                 <div class="parent-icon"><i class='bx bx-home-alt'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>

         </li>
         @if (isApprovedUser())
            <li class="{{ setActive(['instructor.course*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title"> Courses</div>
             </a>
             <ul>
                 <li class="{{ setActive(['instructor.course.index']) }}"> <a href="{{ route('instructor.course.index') }}">
                    <i class='bx bx-radio-circle'></i>All course</a>
                 </li>
                
                
             </ul>
         </li>
            <li class="{{ setActive(['instructor.coupon*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Manage Coupons</div>
             </a>
             <ul>
                 <li class="{{ setActive(['instructor.coupon.index']) }}"> 
                    <a href="{{ route('instructor.coupon.index') }}">
                    <i class='bx bx-radio-circle'></i>All coupon 
                    </a>
                 </li>
                
                
             </ul>
         </li>
         @endif
     </ul>
     <!--end navigation-->
 </div>
