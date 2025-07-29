 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">Admin</h4>
         </div>
         <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li  class="{{ setActive(['admin.dashboard']) }}" >
             <a href="{{ route('admin.dashboard') }}">
                 <div class="parent-icon"><i class='bx bx-home-alt'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>

         </li>
         <li class="{{ setActive(['admin.category*','admin.subcategory*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Manage Category</div>
             </a>
             <ul>
                 <li class="{{ setActive(['admin.category*']) }}"> <a href="{{ route('admin.category.index') }}">
                    <i class='bx bx-radio-circle'></i>Category</a>
                 </li>
                 <li class="{{ setActive(['admin.subcategory*']) }}"> <a href="{{ route('admin.subcategory.index') }}" >
                    <i class='bx bx-radio-circle'></i>SubCategory</a>
                 </li>
                
             </ul>
         </li>
            <li class="{{ setActive(['admin.instructor*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Manage Instructor</div>
             </a>
             <ul>
                 <li class="{{ setActive(['admin.instructor.status']) }}"> <a href="{{ route('admin.instructor.index') }}">
                    <i class='bx bx-radio-circle'></i>All Instructor</a>
                 </li>
                  <li class="{{ setActive(['admin.active.list']) }}"> <a href="{{ route('admin.active.list') }}">
                    <i class='bx bx-radio-circle'></i>Active Instructor</a>
                 </li> 
              
                
             </ul>
         </li>
            <li class="{{ setActive(['admin.course*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Manage Courses</div>
             </a>
             <ul>
                 <li class="{{ setActive(['admin.course.index']) }}"> <a href="{{ route('admin.course.index') }}">
                    <i class='bx bx-radio-circle'></i>All course</a>
                 </li>
                
                
             </ul>
         </li>
            <li class="{{ setActive(['admin.order*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Manage Order</div>
             </a>
             <ul>
                 <li class="{{ setActive(['admin.order.index']) }}"> <a href="{{ route('admin.order.index') }}">
                    <i class='bx bx-radio-circle'></i>All Orders</a>
                 </li>
                
                
             </ul>
         </li>
         </li>
            <li class="{{ setActive(['admin.partner*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Manage Partners</div>
             </a>
             <ul>
                 <li class="{{ setActive(['admin.partner.index']) }}"> <a href="{{ route('admin.partner.index') }}">
                    <i class='bx bx-radio-circle'></i>All Partners</a>
                 </li>
                 <li class="{{ setActive(['admin.partner.create']) }}"> <a href="{{ route('admin.partner.create') }}">
                    <i class='bx bx-radio-circle'></i>Create Partners</a>
                 </li>
                
                
                
             </ul>
         </li>
         <li class="{{ setActive(['admin.slider*','admin.infobox*','admin.site-setting*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Application Settings</div>
             </a>
             <ul>
                 <li class="{{ setActive(['admin.slider*']) }}"> <a href="{{ route('admin.slider.index') }}">
                    <i class='bx bx-radio-circle'></i>Manage Slider</a>
                 </li>
                 <li class="{{ setActive(['admin.infobox*']) }}"> <a href="{{ route('admin.infobox.index') }}">
                    <i class='bx bx-radio-circle'></i>Manage Infobox</a>
                 </li>
                  <li class="{{ setActive(['admin.site-setting*']) }}">
                    <a href="{{route('admin.site-setting.index')}}"><i class='bx bx-radio-circle'></i>Site Settings</a>
                </li>
              
              
                
             </ul>
         </li>
           </li>
         
         <li class="{{ setActive(['admin.stripe*']) }}">
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Configuration Settings</div>
             </a>
             <ul>
                 {{-- <li class="{{ setActive(['admin.stripe*']) }}"> <a href="{{ route('admin.stripe.setting') }}">
                    <i class='bx bx-radio-circle'></i>Mail Setting</a>
                 </li> --}}
                 <li class="{{ setActive(['admin.stripe*']) }}"> <a href="{{ route('admin.stripe.setting') }}">
                    <i class='bx bx-radio-circle'></i>Stripe Setting</a>
                 </li>
                 <li class="{{ setActive(['admin.google*']) }}"> <a href="{{ route('admin.google.setting') }}">
                    <i class='bx bx-radio-circle'></i>Google Setting</a>
                 </li>
                 <li class="{{ setActive(['admin.github*']) }}"> <a href="{{ route('admin.github.setting') }}">
                    <i class='bx bx-radio-circle'></i>Github Setting</a>
                 </li>
                 <li class="{{ setActive(['admin.mailSetting*']) }}"> <a href="{{ route('admin.mailSetting') }}">
                    <i class='bx bx-radio-circle'></i>Mail Setting</a>
                 </li>
              
                
             </ul>
         </li>
     </ul>
     <!--end navigation-->
 </div>
