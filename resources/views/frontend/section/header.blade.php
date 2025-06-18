@php
   $categories = getCategories();
@endphp
<header class="header-menu-area bg-white">
    <div class="header-top pr-100px pl-100px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-phone mr-1"></i><a href="tel:00123456789"> (00) 123 456 789</a></li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a href="mailto:contact@aduca.com"> contact@aduca.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="login.html"> Login</a></li>
                            <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="sign-up.html"> Register</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content pr-100px pl-100px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
               <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{ url('/') }}" class="logo">
                                {{-- <img src="images/logo.png" alt="logo"> --}}
                                {{-- Indigo svg logo --}}
                            {{-- <svg width="203.05" height="60.52039633587513" viewBox="0 0 369.5443037974684 66.49464321649855" class="looka-1j8o68f"><defs id="SvgjsDefs6677"></defs><g id="SvgjsG6678" featurekey="symbolFeature-0" transform="matrix(0.8007628321647644,0,0,0.8007628321647644,-6.765672130923466,-6.815452524108687)" fill="#7267ef"> <path xmlns="http://www.w3.org/2000/svg" d="m88.289 42.23-3.2695-0.48828c-0.30078-0.050782-0.55078-0.26172-0.62109-0.53125-0.82813-3.2617-2.1289-6.3984-3.8594-9.3086-0.14062-0.23828-0.12109-0.57031 0.058594-0.80859l1.9688-2.6602c1.1211-1.5117 0.96094-3.5781-0.37109-4.9102l-5.7188-5.7188c-1.3086-1.3086-3.4219-1.4688-4.9102-0.35938l-2.6602 1.9688c-0.25 0.17969-0.57031 0.21094-0.82031 0.058594-2.9102-1.7305-6.0391-3.0312-9.3086-3.8594-0.26953-0.070312-0.48047-0.32031-0.53125-0.62109l-0.48828-3.2695c-0.28125-1.8594-1.8516-3.2109-3.7305-3.2109h-8.0898c-1.8789 0-3.4492 1.3516-3.7305 3.2109l-0.48828 3.2695c-0.050781 0.30078-0.26172 0.55078-0.53125 0.62109-3.2695 0.83984-6.3984 2.1406-9.3008 3.8594-0.23828 0.14062-0.57031 0.12109-0.82031-0.058594l-2.6719-1.9688c-1.5117-1.1211-3.5781-0.96875-4.9102 0.37109l-5.7305 5.7305c-1.3086 1.3086-1.4688 3.4219-0.37109 4.9102l1.9688 2.6719c0.17969 0.25 0.21094 0.57031 0.058594 0.80859-1.7305 2.8984-3.0312 6.0312-3.8594 9.3008-0.070312 0.26953-0.32031 0.48047-0.62109 0.53125l-3.2695 0.48828c-1.8594 0.28125-3.2109 1.8516-3.2109 3.7305v8.0898c0 1.8789 1.3516 3.4492 3.2109 3.7305l3.2695 0.48828c0.30078 0.050781 0.55078 0.26172 0.62109 0.53125 0.82812 3.2617 2.1289 6.3984 3.8594 9.3086 0.14062 0.23828 0.12109 0.57031-0.058594 0.80859l-1.9688 2.6602c-1.1016 1.4883-0.94922 3.6016 0.35938 4.9102l5.7188 5.7305c1.3281 1.3281 3.3906 1.4805 4.9102 0.37109l2.6602-1.9688c0.23828-0.17969 0.57031-0.21094 0.80859-0.058594 2.9102 1.7305 6.0508 3.0195 9.3086 3.8594 0.26953 0.070312 0.48047 0.32031 0.53125 0.62109l0.48828 3.2695c0.28125 1.8594 1.8516 3.2109 3.7305 3.2109h8.0898c1.8789 0 3.4492-1.3516 3.7305-3.2109l0.48828-3.2695c0.050781-0.30078 0.26172-0.55078 0.53125-0.62109 3.2695-0.82812 6.3984-2.1211 9.3203-3.8516 0.23828-0.14062 0.57031-0.12109 0.80859 0.058594l2.6484 1.9609c1.5117 1.1211 3.5781 0.96875 4.9102-0.37109l5.7188-5.7188c1.3281-1.3281 1.4805-3.3906 0.35938-4.9102l-1.9609-2.6484c-0.17969-0.23828-0.21094-0.57031-0.058594-0.80859 1.7305-2.9219 3.0195-6.0508 3.8516-9.3203 0.070312-0.26953 0.32031-0.48047 0.62109-0.53125l3.2695-0.48828c1.8594-0.28125 3.2109-1.8516 3.2109-3.7305v-8.0898c0.0625-1.9297-1.2891-3.4883-3.1484-3.7695zm0.21094 11.82c0 0.37891-0.28125 0.69922-0.66016 0.76172l-3.2695 0.48828c-1.5117 0.23047-2.7188 1.3086-3.0781 2.7617-0.76172 2.9883-1.9414 5.8594-3.5195 8.5195-0.76172 1.2891-0.67188 2.9102 0.23047 4.1289l1.9609 2.6484c0.23047 0.30859 0.19922 0.73047-0.070312 1l-5.7188 5.7188c-0.26953 0.26953-0.69141 0.30078-1 0.070313l-2.6484-1.9609c-1.2188-0.89844-2.8398-1-4.1289-0.23047-2.6719 1.5781-5.5391 2.7695-8.5195 3.5195-1.4492 0.37109-2.5312 1.5781-2.7617 3.0781l-0.48828 3.2695c-0.058594 0.37891-0.37891 0.66016-0.76172 0.66016h-8.0898c-0.37891 0-0.71094-0.28125-0.76172-0.66016l-0.48828-3.2695c-0.23047-1.5-1.3086-2.7109-2.75-3.0781-2.9883-0.76172-5.8516-1.9492-8.5195-3.5312-0.57812-0.33984-1.2305-0.51172-1.8789-0.51172-0.78906 0-1.5781 0.25-2.25 0.73828l-2.6602 1.9688c-0.30078 0.21875-0.73047 0.19141-1-0.070313l-5.7188-5.7305c-0.26953-0.26953-0.30078-0.69922-0.070313-1l1.9688-2.6602c0.91016-1.2188 1-2.8516 0.23047-4.1289-1.5781-2.6602-2.7695-5.5312-3.5312-8.5117-0.37109-1.4492-1.5781-2.5312-3.0781-2.7617l-3.2695-0.48828c-0.37891-0.058593-0.66016-0.37891-0.66016-0.76172v-8.0898c0-0.37891 0.28125-0.71094 0.66016-0.76172l3.2695-0.48828c1.5-0.23047 2.7109-1.3086 3.0781-2.75 0.76172-2.9883 1.9492-5.8516 3.5312-8.5117 0.76953-1.2891 0.67969-2.9102-0.23047-4.1289l-1.9688-2.6719c-0.21875-0.30078-0.19141-0.73047 0.070313-1l5.7305-5.7305c0.26953-0.26953 0.69141-0.30078 1-0.070312l2.6719 1.9688c1.2188 0.89844 2.8516 0.98828 4.1289 0.23047 2.6484-1.5781 5.5195-2.7695 8.5117-3.5391 1.4492-0.37109 2.5312-1.5781 2.75-3.0781l0.48828-3.2695c0.058593-0.37109 0.37891-0.66016 0.76172-0.66016h8.0898c0.37891 0 0.69922 0.28125 0.76172 0.66016l0.48828 3.2695c0.23047 1.5117 1.3086 2.7188 2.7617 3.0781 2.9805 0.76172 5.8516 1.9414 8.5117 3.5312 1.2891 0.76172 2.9102 0.67188 4.1289-0.23047l2.6602-1.9688c0.30078-0.23047 0.73047-0.19141 1 0.070313l5.7188 5.7188c0.26953 0.26953 0.30078 0.69922 0.078125 1l-1.9922 2.6953c-0.89844 1.2188-0.98828 2.8398-0.23047 4.1289 1.5781 2.6719 2.7695 5.5391 3.5312 8.5195 0.37109 1.4492 1.5781 2.5312 3.0781 2.75l3.2695 0.48828c0.37109 0.058594 0.66016 0.37891 0.66016 0.76172l0.003907 8.1016zm-38.031-1.2305 15.031-5.0117v14.191c0 0.67188-0.44141 1.2617-1.0898 1.4414l-14 4c-0.12891 0.039063-0.26953 0.058594-0.41016 0.058594s-0.28125-0.019531-0.41016-0.058594l-14-4c-0.64844-0.17969-1.0898-0.76953-1.0898-1.4414v-14.191l15.031 5.0117c0.14844 0.050782 0.30859 0.078126 0.46875 0.078126s0.32031-0.027344 0.46875-0.078126zm24.992-12.148c0.03125 0.10156 0.039062 0.21875 0.039062 0.32812v12c0 0.82812-0.67188 1.5-1.5 1.5s-1.5-0.67188-1.5-1.5v-10.68l-7.5586 2.5195-2.3906 0.78906-1.0898 0.37109-11.461 3.8203-11.461-3.8203-1.0898-0.37109-2.3906-0.78906-11.508-3.8398 26.449-8.8203 23.039 7.6797z"></path></g><g id="SvgjsG6679" featurekey="nameFeature-0" transform="matrix(1.5224672555923462,0,0,1.5224672555923462,82.52877477728764,-9.324203184913912)" fill="#7267ef"><path d="M2.28 15.52 l18.2 0 l0 5.56 l-12.2 0 l0 3.92 l9.8 0 l0 5.56 l-9.8 0 l0 3.88 l12.2 0 l0 5.56 l-18.2 0 l0 -24.48 z M32.480000000000004 40 l-8.6 0 l0 -24.48 l8.6 0 c7.48 0 12.6 4.88 12.6 12.24 c0 7.56 -5.4 12.24 -12.6 12.24 z M29.880000000000003 21.08 l0 13.36 l2.6 0 c4.24 0 6.6 -2.68 6.6 -6.68 c0 -0.92 -0.12 -1.76 -0.36 -2.6 c-1.04 -2.92 -3.32 -4.08 -6.24 -4.08 l-2.6 0 z M63.68000000000001 15.52 l6 0 l0 14.48 c0 6.36 -4.56 10.2 -10.6 10.2 c-6.2 0 -10.6 -4.08 -10.6 -10.2 l0 -14.48 l6 0 l0 14.48 c0 2.88 1.72 4.64 4.6 4.64 c2.96 0 4.6 -1.72 4.6 -4.64 l0 -14.48 z M89.48 15.52 l6 0 l0 24.48 l-6 0 l-9.6 -14.32 l0 14.32 l-6 0 l0 -24.48 l6 0 l9.6 14.32 l0 -14.32 z M100.08000000000001 15.52 l18.2 0 l0 5.56 l-12.2 0 l0 3.92 l9.8 0 l0 5.56 l-9.8 0 l0 3.88 l12.2 0 l0 5.56 l-18.2 0 l0 -24.48 z M131.20000000000002 32.64 l-5 7.36 l-7 0 l8.52 -12.52 l-8.12 -11.96 l7 0 l4.6 6.8 l4.6 -6.8 l7 0 l-8.08 11.96 l8.48 12.52 l-7 0 z M160.16 15.52 l6 0 l0 14.48 c0 6.36 -4.56 10.2 -10.6 10.2 c-6.2 0 -10.6 -4.08 -10.6 -10.2 l0 -14.48 l6 0 l0 14.48 c0 2.88 1.72 4.64 4.6 4.64 c2.96 0 4.6 -1.72 4.6 -4.64 l0 -14.48 z M169.16000000000003 39.4 l0 -5.64 c0.48 0.12 1.08 0.24 1.76 0.32 c0.68 0.12 1.4 0.2 2.16 0.24 s1.52 0.08 2.32 0.12 s1.56 0.08 2.24 0.08 c1.88 0 3.2 -0.12 4 -0.32 c0.76 -0.2 1.16 -0.56 1.16 -1.12 c0 -0.48 -0.36 -0.84 -0.72 -1.12 c-1.32 -0.88 -2.88 -1.24 -4.44 -1.6 c-4.4 -0.88 -8.44 -2.64 -8.44 -7.68 c0 -5.96 5.64 -7.36 10.48 -7.36 c2.68 0 5.4 0.28 8 0.92 l0 5.64 c-0.4 -0.12 -0.92 -0.2 -1.56 -0.32 c-0.68 -0.08 -1.36 -0.16 -2.12 -0.24 c-1.56 -0.16 -3.04 -0.24 -4.6 -0.24 c-0.88 0 -2.72 0 -3.56 0.32 c-0.56 0.2 -0.92 0.44 -0.92 1.08 c0 0.32 0.08 0.6 0.24 0.84 c0.16 0.28 0.44 0.48 0.8 0.68 c1.08 0.6 2.48 0.96 3.68 1.24 c1 0.24 2 0.52 3.04 0.8 c3.52 0.96 5.84 2.92 5.84 6.68 c0 6.2 -6.16 7.52 -11.12 7.52 c-2.72 0 -5.56 -0.2 -8.24 -0.84 z"></path></g></svg> --}}
                            {{-- End Indigo svg logo --}}
                            {{-- Purple svg logo --}}
                            <svg width="203.05" height="55.52039633587513" viewBox="0 0 369.5443037974684 66.49464321649855" class="looka-1j8o68f"><defs id="SvgjsDefs6762"></defs><g id="SvgjsG6763" featurekey="symbolFeature-0" transform="matrix(0.8007628321647644,0,0,0.8007628321647644,-6.765672130923466,-6.815452524108687)" fill="#8c52ff"> <path xmlns="http://www.w3.org/2000/svg" d="m88.289 42.23-3.2695-0.48828c-0.30078-0.050782-0.55078-0.26172-0.62109-0.53125-0.82813-3.2617-2.1289-6.3984-3.8594-9.3086-0.14062-0.23828-0.12109-0.57031 0.058594-0.80859l1.9688-2.6602c1.1211-1.5117 0.96094-3.5781-0.37109-4.9102l-5.7188-5.7188c-1.3086-1.3086-3.4219-1.4688-4.9102-0.35938l-2.6602 1.9688c-0.25 0.17969-0.57031 0.21094-0.82031 0.058594-2.9102-1.7305-6.0391-3.0312-9.3086-3.8594-0.26953-0.070312-0.48047-0.32031-0.53125-0.62109l-0.48828-3.2695c-0.28125-1.8594-1.8516-3.2109-3.7305-3.2109h-8.0898c-1.8789 0-3.4492 1.3516-3.7305 3.2109l-0.48828 3.2695c-0.050781 0.30078-0.26172 0.55078-0.53125 0.62109-3.2695 0.83984-6.3984 2.1406-9.3008 3.8594-0.23828 0.14062-0.57031 0.12109-0.82031-0.058594l-2.6719-1.9688c-1.5117-1.1211-3.5781-0.96875-4.9102 0.37109l-5.7305 5.7305c-1.3086 1.3086-1.4688 3.4219-0.37109 4.9102l1.9688 2.6719c0.17969 0.25 0.21094 0.57031 0.058594 0.80859-1.7305 2.8984-3.0312 6.0312-3.8594 9.3008-0.070312 0.26953-0.32031 0.48047-0.62109 0.53125l-3.2695 0.48828c-1.8594 0.28125-3.2109 1.8516-3.2109 3.7305v8.0898c0 1.8789 1.3516 3.4492 3.2109 3.7305l3.2695 0.48828c0.30078 0.050781 0.55078 0.26172 0.62109 0.53125 0.82812 3.2617 2.1289 6.3984 3.8594 9.3086 0.14062 0.23828 0.12109 0.57031-0.058594 0.80859l-1.9688 2.6602c-1.1016 1.4883-0.94922 3.6016 0.35938 4.9102l5.7188 5.7305c1.3281 1.3281 3.3906 1.4805 4.9102 0.37109l2.6602-1.9688c0.23828-0.17969 0.57031-0.21094 0.80859-0.058594 2.9102 1.7305 6.0508 3.0195 9.3086 3.8594 0.26953 0.070312 0.48047 0.32031 0.53125 0.62109l0.48828 3.2695c0.28125 1.8594 1.8516 3.2109 3.7305 3.2109h8.0898c1.8789 0 3.4492-1.3516 3.7305-3.2109l0.48828-3.2695c0.050781-0.30078 0.26172-0.55078 0.53125-0.62109 3.2695-0.82812 6.3984-2.1211 9.3203-3.8516 0.23828-0.14062 0.57031-0.12109 0.80859 0.058594l2.6484 1.9609c1.5117 1.1211 3.5781 0.96875 4.9102-0.37109l5.7188-5.7188c1.3281-1.3281 1.4805-3.3906 0.35938-4.9102l-1.9609-2.6484c-0.17969-0.23828-0.21094-0.57031-0.058594-0.80859 1.7305-2.9219 3.0195-6.0508 3.8516-9.3203 0.070312-0.26953 0.32031-0.48047 0.62109-0.53125l3.2695-0.48828c1.8594-0.28125 3.2109-1.8516 3.2109-3.7305v-8.0898c0.0625-1.9297-1.2891-3.4883-3.1484-3.7695zm0.21094 11.82c0 0.37891-0.28125 0.69922-0.66016 0.76172l-3.2695 0.48828c-1.5117 0.23047-2.7188 1.3086-3.0781 2.7617-0.76172 2.9883-1.9414 5.8594-3.5195 8.5195-0.76172 1.2891-0.67188 2.9102 0.23047 4.1289l1.9609 2.6484c0.23047 0.30859 0.19922 0.73047-0.070312 1l-5.7188 5.7188c-0.26953 0.26953-0.69141 0.30078-1 0.070313l-2.6484-1.9609c-1.2188-0.89844-2.8398-1-4.1289-0.23047-2.6719 1.5781-5.5391 2.7695-8.5195 3.5195-1.4492 0.37109-2.5312 1.5781-2.7617 3.0781l-0.48828 3.2695c-0.058594 0.37891-0.37891 0.66016-0.76172 0.66016h-8.0898c-0.37891 0-0.71094-0.28125-0.76172-0.66016l-0.48828-3.2695c-0.23047-1.5-1.3086-2.7109-2.75-3.0781-2.9883-0.76172-5.8516-1.9492-8.5195-3.5312-0.57812-0.33984-1.2305-0.51172-1.8789-0.51172-0.78906 0-1.5781 0.25-2.25 0.73828l-2.6602 1.9688c-0.30078 0.21875-0.73047 0.19141-1-0.070313l-5.7188-5.7305c-0.26953-0.26953-0.30078-0.69922-0.070313-1l1.9688-2.6602c0.91016-1.2188 1-2.8516 0.23047-4.1289-1.5781-2.6602-2.7695-5.5312-3.5312-8.5117-0.37109-1.4492-1.5781-2.5312-3.0781-2.7617l-3.2695-0.48828c-0.37891-0.058593-0.66016-0.37891-0.66016-0.76172v-8.0898c0-0.37891 0.28125-0.71094 0.66016-0.76172l3.2695-0.48828c1.5-0.23047 2.7109-1.3086 3.0781-2.75 0.76172-2.9883 1.9492-5.8516 3.5312-8.5117 0.76953-1.2891 0.67969-2.9102-0.23047-4.1289l-1.9688-2.6719c-0.21875-0.30078-0.19141-0.73047 0.070313-1l5.7305-5.7305c0.26953-0.26953 0.69141-0.30078 1-0.070312l2.6719 1.9688c1.2188 0.89844 2.8516 0.98828 4.1289 0.23047 2.6484-1.5781 5.5195-2.7695 8.5117-3.5391 1.4492-0.37109 2.5312-1.5781 2.75-3.0781l0.48828-3.2695c0.058593-0.37109 0.37891-0.66016 0.76172-0.66016h8.0898c0.37891 0 0.69922 0.28125 0.76172 0.66016l0.48828 3.2695c0.23047 1.5117 1.3086 2.7188 2.7617 3.0781 2.9805 0.76172 5.8516 1.9414 8.5117 3.5312 1.2891 0.76172 2.9102 0.67188 4.1289-0.23047l2.6602-1.9688c0.30078-0.23047 0.73047-0.19141 1 0.070313l5.7188 5.7188c0.26953 0.26953 0.30078 0.69922 0.078125 1l-1.9922 2.6953c-0.89844 1.2188-0.98828 2.8398-0.23047 4.1289 1.5781 2.6719 2.7695 5.5391 3.5312 8.5195 0.37109 1.4492 1.5781 2.5312 3.0781 2.75l3.2695 0.48828c0.37109 0.058594 0.66016 0.37891 0.66016 0.76172l0.003907 8.1016zm-38.031-1.2305 15.031-5.0117v14.191c0 0.67188-0.44141 1.2617-1.0898 1.4414l-14 4c-0.12891 0.039063-0.26953 0.058594-0.41016 0.058594s-0.28125-0.019531-0.41016-0.058594l-14-4c-0.64844-0.17969-1.0898-0.76953-1.0898-1.4414v-14.191l15.031 5.0117c0.14844 0.050782 0.30859 0.078126 0.46875 0.078126s0.32031-0.027344 0.46875-0.078126zm24.992-12.148c0.03125 0.10156 0.039062 0.21875 0.039062 0.32812v12c0 0.82812-0.67188 1.5-1.5 1.5s-1.5-0.67188-1.5-1.5v-10.68l-7.5586 2.5195-2.3906 0.78906-1.0898 0.37109-11.461 3.8203-11.461-3.8203-1.0898-0.37109-2.3906-0.78906-11.508-3.8398 26.449-8.8203 23.039 7.6797z"></path></g><g id="SvgjsG6764" featurekey="nameFeature-0" transform="matrix(1.5224672555923462,0,0,1.5224672555923462,82.52877477728764,-9.324203184913912)" fill="#8c52ff"><path d="M2.28 15.52 l18.2 0 l0 5.56 l-12.2 0 l0 3.92 l9.8 0 l0 5.56 l-9.8 0 l0 3.88 l12.2 0 l0 5.56 l-18.2 0 l0 -24.48 z M32.480000000000004 40 l-8.6 0 l0 -24.48 l8.6 0 c7.48 0 12.6 4.88 12.6 12.24 c0 7.56 -5.4 12.24 -12.6 12.24 z M29.880000000000003 21.08 l0 13.36 l2.6 0 c4.24 0 6.6 -2.68 6.6 -6.68 c0 -0.92 -0.12 -1.76 -0.36 -2.6 c-1.04 -2.92 -3.32 -4.08 -6.24 -4.08 l-2.6 0 z M63.68000000000001 15.52 l6 0 l0 14.48 c0 6.36 -4.56 10.2 -10.6 10.2 c-6.2 0 -10.6 -4.08 -10.6 -10.2 l0 -14.48 l6 0 l0 14.48 c0 2.88 1.72 4.64 4.6 4.64 c2.96 0 4.6 -1.72 4.6 -4.64 l0 -14.48 z M89.48 15.52 l6 0 l0 24.48 l-6 0 l-9.6 -14.32 l0 14.32 l-6 0 l0 -24.48 l6 0 l9.6 14.32 l0 -14.32 z M100.08000000000001 15.52 l18.2 0 l0 5.56 l-12.2 0 l0 3.92 l9.8 0 l0 5.56 l-9.8 0 l0 3.88 l12.2 0 l0 5.56 l-18.2 0 l0 -24.48 z M131.20000000000002 32.64 l-5 7.36 l-7 0 l8.52 -12.52 l-8.12 -11.96 l7 0 l4.6 6.8 l4.6 -6.8 l7 0 l-8.08 11.96 l8.48 12.52 l-7 0 z M160.16 15.52 l6 0 l0 14.48 c0 6.36 -4.56 10.2 -10.6 10.2 c-6.2 0 -10.6 -4.08 -10.6 -10.2 l0 -14.48 l6 0 l0 14.48 c0 2.88 1.72 4.64 4.6 4.64 c2.96 0 4.6 -1.72 4.6 -4.64 l0 -14.48 z M169.16000000000003 39.4 l0 -5.64 c0.48 0.12 1.08 0.24 1.76 0.32 c0.68 0.12 1.4 0.2 2.16 0.24 s1.52 0.08 2.32 0.12 s1.56 0.08 2.24 0.08 c1.88 0 3.2 -0.12 4 -0.32 c0.76 -0.2 1.16 -0.56 1.16 -1.12 c0 -0.48 -0.36 -0.84 -0.72 -1.12 c-1.32 -0.88 -2.88 -1.24 -4.44 -1.6 c-4.4 -0.88 -8.44 -2.64 -8.44 -7.68 c0 -5.96 5.64 -7.36 10.48 -7.36 c2.68 0 5.4 0.28 8 0.92 l0 5.64 c-0.4 -0.12 -0.92 -0.2 -1.56 -0.32 c-0.68 -0.08 -1.36 -0.16 -2.12 -0.24 c-1.56 -0.16 -3.04 -0.24 -4.6 -0.24 c-0.88 0 -2.72 0 -3.56 0.32 c-0.56 0.2 -0.92 0.44 -0.92 1.08 c0 0.32 0.08 0.6 0.24 0.84 c0.16 0.28 0.44 0.48 0.8 0.68 c1.08 0.6 2.48 0.96 3.68 1.24 c1 0.24 2 0.52 3.04 0.8 c3.52 0.96 5.84 2.92 5.84 6.68 c0 6.2 -6.16 7.52 -11.12 7.52 c-2.72 0 -5.56 -0.2 -8.24 -0.84 z"></path></g></svg>
                            {{-- End Purple svg logo --}}
                            </a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#">Categories <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="cat-dropdown-menu">
                                            @foreach ($categories as $category)
                                                
                                            <li>
                                                <a href="course-grid.html">{{ $category->name }} <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                   
                                                   @foreach ($category->subcategories as  $subcategory)
                                                       
                                                        <li><a href="#">{{ $subcategory->name }}</a></li>
                                                       
                                                   @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end menu-category -->
                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="home-2.html">Home Two</a></li>
                                            <li><a href="home-3.html">Home Three</a></li>
                                            <li><a href="home-4.html">Home four</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">courses <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="course-grid.html">course grid</a></li>
                                            <li><a href="course-list.html">course list</a></li>
                                            <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                                            <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                                            <li><a href="course-list-left-sidebar.html">list left sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                                            <li><a href="course-list-right-sidebar.html">list right sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                                            <li><a href="course-details.html">course details</a></li>
                                            <li><a href="lesson-details.html">lesson details</a></li>
                                            <li><a href="my-courses.html">My courses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Student <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="student-detail.html">student detail</a></li>
                                            <li><a href="student-quiz.html">take quiz</a></li>
                                            <li><a href="student-quiz-results.html">quiz results</a></li>
                                            <li><a href="student-quiz-result-details.html">quiz details</a></li>
                                            <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                                            <li><a href="student-path.html">path details</a></li>
                                            <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                                            <li><a href="student-path-assessment-result.html">Skill result</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-has">
                                        <a href="#">pages <i class="la la-angle-down fs-12"></i></a>
                                        <div class="dropdown-menu-item mega-menu">
                                            <ul class="row no-gutters">
                                                <li class="col-lg-3">
                                                    <a href="dashboard.html">dashboard <span class="ribbon">Hot</span></a>
                                                    <a href="about.html">about</a>
                                                    <a href="teachers.html">Teachers</a>
                                                    <a href="teacher-detail.html">Teacher detail</a>
                                                    <a href="categories.html">categories</a>
                                                    <a href="terms-and-conditions.html">Terms &amp; conditions</a>
                                                    <a href="privacy-policy.html">privacy policy</a>
                                                    <a href="invite.html">invite friend</a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <a href="careers.html">careers</a>
                                                    <a href="career-details.html">career details</a>
                                                    <a href="become-a-teacher.html">become an instructor</a>
                                                    <a href="faq.html">FAQs</a>
                                                    <a href="admission.html">admission</a>
                                                    <a href="gallery.html">gallery</a>
                                                    <a href="pricing-table.html">pricing tables</a>
                                                    <a href="contact.html">contact</a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <a href="for-business.html">for business</a>
                                                    <a href="sign-up.html">sign-up</a>
                                                    <a href="login.html">login</a>
                                                    <a href="recover.html">recover</a>
                                                    <a href="shopping-cart.html">cart</a>
                                                    <a href="checkout.html">checkout</a>
                                                    <a href="error.html">page 404</a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="menu-banner position-relative h-100">
                                                        <div class="overlay rounded-rounded opacity-4"></div>
                                                        <div class="menu-banner-content p-4 position-absolute bottom-0 left-0">
                                                            <h4 class="fs-20 font-weight-bold pb-3 text-white">30 days free trail for new users</h4>
                                                            <a href="sign-up.html" class="btn theme-btn theme-btn-sm theme-btn-white">Start Learning <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </div>
                                                        <img src="images/menu-banner-img.jpg" alt="menu banner image" class="w-100 h-100 rounded-rounded">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">blog <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">blog full width </a></li>
                                            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="shop-cart mr-4">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">
                                            <i class="la la-shopping-cart"></i>
                                            <span class="product-count">2</span>
                                        </p>
                                        <ul class="cart-dropdown-menu">
                                            <li class="media media-card">
                                                <a href="shopping-cart.html" class="media-img">
                                                    <img src="images/small-img.jpg" alt="Cart image">
                                                </a>
                                                <div class="media-body">
                                                    <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li class="media media-card">
                                                <a href="shopping-cart.html" class="media-img">
                                                    <img src="images/small-img.jpg" alt="Cart image">
                                                </a>
                                                <div class="media-body">
                                                    <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li class="media media-card">
                                                <div class="media-body fs-16">
                                                    <p class="text-black font-weight-semi-bold lh-18">Total: <span class="cart-total">$12.99</span> <span class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="shopping-cart.html" class="btn theme-btn w-100">Got to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end shop-cart -->
                            <div class="nav-right-button">
                                <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> Admission</a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="home-2.html">Home Two</a></li>
                    <li><a href="home-3.html">Home Three</a></li>
                    <li><a href="home-4.html">Home four</a></li>
                </ul>
            </li>
            <li>
                <a href="#">courses</a>
                <ul class="sub-menu">
                    <li><a href="course-grid.html">course grid</a></li>
                    <li><a href="course-list.html">course list</a></li>
                    <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                    <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                    <li><a href="course-list-left-sidebar.html">list left sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                    <li><a href="course-list-right-sidebar.html">list right sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                    <li><a href="course-details.html">course details</a></li>
                    <li><a href="lesson-details.html">lesson details</a></li>
                    <li><a href="my-courses.html">My courses</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Student</a>
                <ul class="sub-menu">
                    <li><a href="student-detail.html">student detail</a></li>
                    <li><a href="student-quiz.html">take quiz</a></li>
                    <li><a href="student-quiz-results.html">quiz results</a></li>
                    <li><a href="student-quiz-result-details.html">quiz details</a></li>
                    <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                    <li><a href="student-path.html">path details</a></li>
                    <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                    <li><a href="student-path-assessment-result.html">Skill result</a></li>
                </ul>
            </li>
            <li>
                <a href="#">pages</a>
                <ul class="sub-menu">
                    <li><a href="dashboard.html">dashboard <span class="ribbon">Hot</span></a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="teacher-detail.html">Teacher detail</a></li>
                    <li><a href="careers.html">careers</a></li>
                    <li><a href="career-details.html">career details</a></li>
                    <li><a href="categories.html">categories</a></li>
                    <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                    <li><a href="privacy-policy.html">privacy policy</a></li>
                    <li><a href="for-business.html">for business</a></li>
                    <li><a href="become-a-teacher.html">become an instructor</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="admission.html">admission</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="pricing-table.html">pricing tables</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="sign-up.html">sign-up</a></li>
                    <li><a href="login.html">login</a></li>
                    <li><a href="recover.html">recover</a></li>
                    <li><a href="shopping-cart.html">cart</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="error.html">page 404</a></li>
                </ul>
            </li>
            <li>
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-full-width.html">blog full width </a></li>
                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="course-grid.html">Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Development</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Game Development</a></li>
                    <li><a href="#">Databases</a></li>
                    <li><a href="#">Programming Languages</a></li>
                    <li><a href="#">Software Testing</a></li>
                    <li><a href="#">Software Engineering</a></li>
                    <li><a href="#">E-Commerce</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">business</a>
                <ul class="sub-menu">
                    <li><a href="#">All Business</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Home Business</a></li>
                    <li><a href="#">Communications</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">IT & Software</a>
                <ul class="sub-menu">
                    <li><a href="#">All IT & Software</a></li>
                    <li><a href="#">IT Certification</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Network & Security</a></li>
                    <li><a href="#">Operating Systems</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Finance & Accounting</a>
                <ul class="sub-menu">
                    <li><a href="#"> All Finance & Accounting</a></li>
                    <li><a href="#">Accounting & Bookkeeping</a></li>
                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Investing & Trading</a></li>
                    <li><a href="#">Other Finance & Economics</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">design</a>
                <ul class="sub-menu">
                    <li><a href="#">All Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Design Tools</a></li>
                    <li><a href="#">3D & Animation</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Personal Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Personal Development</a></li>
                    <li><a href="#">Personal Transformation</a></li>
                    <li><a href="#">Productivity</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Personal Finance</a></li>
                    <li><a href="#">Career Development</a></li>
                    <li><a href="#">Parenting & Relationships</a></li>
                    <li><a href="#">Happiness</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Marketing</a>
                <ul class="sub-menu">
                    <li><a href="#">All Marketing</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video & Mobile Marketing</a></li>
                    <li><a href="#">Affiliate Marketing</a></li>
                    <li><a href="#">Growth Hacking</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Health & Fitness</a>
                <ul class="sub-menu">
                    <li><a href="#">All Health & Fitness</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Dieting</a></li>
                    <li><a href="#">Self Defense</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mental Health</a></li>
                    <li><a href="#">Yoga</a></li>
                    <li><a href="#">Dance</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Photography</a>
                <ul class="sub-menu">
                    <li><a href="#">All Photography</a></li>
                    <li><a href="#">Digital Photography</a></li>
                    <li><a href="#">Photography Fundamentals</a></li>
                    <li><a href="#">Commercial Photography</a></li>
                    <li><a href="#">Video Design</a></li>
                    <li><a href="#">Photography Tools</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header>