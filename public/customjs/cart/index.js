$(document).ready(function () {
    getCart();
})
$(document).on('click', '.add-to-cart-button', function(e) {
    e.preventDefault(); // Optional: Prevent default link/button behavior

    var course_id = $(this).data('course-id');
    var quantity = 1;

    $.ajax({
        url: '/cart/add',
        type: 'POST',
        data: {
            course_id: course_id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            console.log(response);

            if (response.status === 'success') {
                Swal.fire({
                    title: "Success",
                    text: response.message,
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });
                getCart();

                // Update cart count dynamically
              if(response.cart_item){
                $('.cart-count').text(response.cart_item.quantity);
              }
            }
        },
      error: function(xhr, status, error) {
    let message = 'Something went wrong!';

    // Print Laravel's JSON response message if available
    if (xhr.responseJSON && xhr.responseJSON.message) {
        message = xhr.responseJSON.message;
    }

    // Optional: log full details for debugging
    console.error('Status:', status);
    console.error('Error:', error);
    console.error('Response:', xhr.responseText); // raw response
    console.error('Parsed JSON:', xhr.responseJSON); // parsed response if available

    // You can also alert it or show it with Swal
    Swal.fire({
        title: 'Error',
        text: message,
        icon: 'error',
        toast: true,
        position: 'top-end',
        showCloseButton: true,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
}

    });
});
//get all cart data 
function getCart(){
    var url = '/cart/all';
    $.ajax({
        url: url,
        type: 'GET',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if (response.status === 'success') {
                $('#cart').html(response.html);
            }
        },
        error: function(xhr) {
            let message = 'Something went wrong!';
            if (xhr.responseJSON && xhr.responseJSON.message) {
                message = xhr.responseJSON.message;
            }
            console.error(message);
        }
    });
}


// fetch cart data
$(document).ready(function () {
    fetchCart();
    function fetchCart(){
        var url = '/fetch/cart';
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('#cart-main-content').html(response.html);
                }
            },
            error: function(xhr) {
                let message = 'Something went wrong!';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                console.error(message);
            }
        });
    }

    $(document).on('click','.remove-cart-item',function(){
      var id = $(this).data('cart-id');
      var url = 'remove/cart';
      $.ajax({
          url: url,
          type: 'DELETE',
          data: {
              id: id,
              _token: $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
              if (response.status === 'success') {
                 
                  Swal.fire({
                      title: "Success",
                      text: response.success,
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
                          toast.addEventListener('mouseenter', Swal.stopTimer);
                          toast.addEventListener('mouseleave', Swal.resumeTimer);
                      }
                  })
                fetchCart(); // refresh the cart items
                getCart(); // refresh the cart count
              }
          },
          error: function(xhr) {
              let message = 'Something went wrong!';
              if (xhr.responseJSON && xhr.responseJSON.message) {
                  message = xhr.responseJSON.message;
              }
              console.error(message);
          }
      });
    })
});