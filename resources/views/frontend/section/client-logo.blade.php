<section class="client-logo-area section-padding position-relative overflow-hidden text-center">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="section-heading">
            <h5 class="ribbon ribbon-lg mb-2">Our partners</h5>
            <h2 class="section__title">Top companies choose <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> to build
                <br> in-demand career skills</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->
        <div class="client-logo-carousel pt-4">
        @forelse ($all_partners as $partner)
                <a href="{{ $partner->link }}" class="client-logo-item"><img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}"></a>
                @empty
            </div><!-- end client-logo-carousel -->
            <p class="text-center fs-1">No Partners</p>
            @endforelse
           
    </div><!-- end container -->
</section>