<!-- Bootstrap JS -->
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

<!--plugins-->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

<!-- Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            const input = $('#show_hide_password input');
            const icon = $('#show_hide_password i');
            if (input.attr("type") === "text") {
                input.attr('type', 'password');
                icon.addClass("bx-hide").removeClass("bx-show");
            } else if (input.attr("type") === "password") {
                input.attr('type', 'text');
                icon.removeClass("bx-hide").addClass("bx-show");
            }
        });
    });
</script>
<script>
        new PerfectScrollbar(".app-container")
    </script>
    {{-- Photo Preview Script --}}
    <script>
        $(document).ready(function () {
            $('#photo').on('change', function (event) {
                const [file] = event.target.files;
                if(file){
                    $('#photoPreview').attr('src', URL.createObjectURL(file)).css('display', 'block');

                }

            })
        })
    </script>
    {{-- End Photo Preview Script --}}
  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--app JS-->
<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/chartjs/js/chart.js') }}"></script>
<script src="{{ asset('backend/assets/js/index.js') }}"></script>
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

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
