<script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.js') }}"></script>
<script src="{{ asset('frontend/js/waypoint.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox.js') }}"></script>
<script src="{{ asset('frontend/js/datedropper.min.js') }}"></script>
<script src="{{ asset('frontend/js/emojionearea.min.js') }}"></script>
<script src="{{ asset('frontend/js/tooltipster.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('customjs/wishlist/index.js') }}"></script>

  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- Sweet Alert toast --}}
<script>
    @if (Session::has('success'))
    Swal.fire({
            title: "Success",
            text: "{{ Session::get('success') }}",
            icon: "success",
            toast: true,
            position: "top-end",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'rounded-xl shadow-md text-sm bg-white',
                title: 'font-semibold text-lg text-gray-800',
                closeButton: 'text-gray-500 hover:text-red-500',
            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        @elseif (Session::has('error'))
        Swal.fire({
            title: "Error",
            text: "{{ Session::get('error') }}",
            icon: "error",
            toast: true,
            position: "top-end",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'rounded-xl shadow-md text-sm bg-white',
                title: 'font-semibold text-gray-800',
                closeButton: 'text-gray-500 hover:text-red-500',
            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        
    @endif
</script>
{{--End of Sweet Alert toast --}}


@stack('scripts')
{{-- <script>
    var player = new Plyr('#player');
</script> --}}
