<section class="cart-area section-padding">
    <div class="container">
        <div class="table-responsive">
            <table class="table generic-table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product Details</th>
                        <th scope="col">Price</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cartItems as $item)
                    <tr>
                        <th scope="row">
                            <div class="media media-card">
                                <a href="course-details.html" class="media-img mr-0">
                                    <img src="{{ asset($item->course->course_image) }}" alt="Cart image">
                                </a>
                            </div>
                        </th>
                        <td>
                            <a href="course-details.html" class="text-black font-weight-semi-bold">{{
                                $item->course->course_name }}</a>
                            <p class="fs-14 text-gray lh-20">By <a href="teacher-detail.html"
                                    class="text-color hover-underline">{{ $item->course->user->name }}</a>, {{
                                $item->course->course_title }} &amp; More!</p>
                        </td>
                        <td>
                            <ul class="generic-list-item font-weight-semi-bold">
                                <li class="text-black lh-18">${{ $item->course->discount_price }}</li>
                                <li class="before-price lh-18">${{ $item->course->selling_price }}</li>
                            </ul>
                        </td>

                        <td>
                            <button type="button"
                                class="icon-element icon-element-xs shadow-sm border-0 remove-cart-item"
                                data-cart-id="{{ $item->id }}" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Remove">
                                <i class="la la-times"></i>
                            </button>
                        </td>
                    </tr>
                   @empty
      <p class="text-center text-gray fs-1 fw-bold">No Cart Item</p>
        @endforelse
                </tbody>
            </table>

            <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">
                <form method="post">
                    <div class="input-group mb-2">
                        <input class="form-control form--control pl-3" type="text" name="search"
                            placeholder="Coupon code">
                        <div class="input-group-append">
                            <button class="btn theme-btn">Apply Code</button>
                        </div>
                    </div>
                </form>
                <a href="#" class="btn theme-btn mb-2">Update Cart</a>
            </div>
        </div>
     
        <div class="col-lg-4 ml-auto">
            <div class="bg-gray p-4 rounded-rounded mt-40px">
                <h3 class="fs-18 font-weight-bold pb-3">Cart Totals</h3>
                <div class="divider"><span></span></div>
                <ul class="generic-list-item pb-4">
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Subtotal:</span>
                        <span>${{ $subTotal }}</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                        <span class="text-black">Total:</span>
                        <span>$44.99</span>
                    </li>
                </ul>
                <a href="checkout.html" class="btn theme-btn w-100">Checkout <i
                        class="la la-arrow-right icon ml-1"></i></a>
            </div>
        </div>
    </div><!-- end container -->
</section>