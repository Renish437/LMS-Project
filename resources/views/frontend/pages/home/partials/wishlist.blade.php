<ul class="cart-dropdown-menu">

    @forelse($wishlistItems as $item)
    <li class="media media-card">
        <a href="shopping-cart.html" class="media-img">
            <img src="{{ asset($item->course->course_image) }}" alt="Cart image">
        </a>
        <div class="media-body">
            <h5><a href="#">{{ $item->course->course_name }}</a></h5>
            <span class="d-block lh-18 py-1">{{ $item->course->user->name }}</span>
            <p class="text-black font-weight-semi-bold lh-18">
                ${{ $item->course->discount_price }} <span class="before-price fs-14">${{ $item->course->selling_price
                    }}</span>
            </p>
        </div>
    </li>




    @empty
    <li>No items in the wishlist.</li>
    @endforelse
    @php
    $subTotal = 0;
    foreach ($wishlistItems as $item) {
    $subTotal += $item->course->discount_price;
    }
    @endphp
    <div class="my-2">


        Sub Total: ${{ $subTotal }}
    </div>
    <li>
        <a href="{{ route('user.wishlist.index') }}" class="btn theme-btn w-100">Check Wishlist <i class="la la-arrow-right icon ml-1"></i></a>
    </li>
</ul>