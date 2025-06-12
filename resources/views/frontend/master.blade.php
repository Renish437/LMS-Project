<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LMS - Home</title>
         @include('frontend.section.link')
</head>
<body>

<!-- start cssload-loader -->
@include('frontend.section.loader')
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
@include('frontend.section.header')
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

@yield('content')

<!-- ================================
         END FOOTER AREA
================================= -->
@include('frontend.section.footer')
<!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->
@include('frontend.section.tooltip')



<!-- template js files -->
@include('frontend.section.script')
</body>
</html>