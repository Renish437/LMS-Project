<ul>
    <li>
        <p class="shop-cart-btn d-flex align-items-center">
            <i class="la la-shopping-cart"></i>
            <span class="product-count">{{ count($cart) }}</span>
        </p>
        @if(count($cart) > 0)
        <ul class="cart-dropdown-menu">
            @forelse ($cart as $item)
            <li class="media media-card">
                <a href="shopping-cart.html" class="media-img">
                    <img src="{{ asset($item->course->course_image) }}" alt="Cart image">
                </a>
                <div class="media-body">
                    <h5><a href="course-details.html">{{ $item->course->course_name }}</a></h5>
                    <span class="d-block lh-18 py-1">{{ $item->course->user->name }}</span>
                    <p class="text-black font-weight-semi-bold lh-18">${{ $item->course->discount_price }} <span
                            class="before-price fs-14">${{ $item->course->selling_price }}</span></p>
                </div>
            </li>
            <div class="my-2">
                Sub Total: ${{ $subTotal }}
            </div>
            @empty
            <li>No item in cart</li>
            @endforelse

            <li>
                <a href="{{ route('checkout.index') }}" class="btn theme-btn w-100">Go to checkout <i
                        class="la la-arrow-right icon ml-1"></i></a>
            </li>
        </ul>
        @endif
    </li>
</ul>