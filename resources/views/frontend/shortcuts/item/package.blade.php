<article class="hhc-ele hhc-ele-team hhc-team-style-1 mx-3">
    <div class="hhc--post-item">
        <div class="hhc-featured-wrap ">
            <div class="hhc-featured-img-wrapper">
                <div class="hhc-featured-wrapper bg-theme2-light">
                    <img src="{{ asset('images/' . $package->image) }}" alt="" />
                </div>
            </div>
            <div class="hhc-team-btn">
                <a class="hhc-team-text" href="{{ route('public.packages-single',$package->slug) }}">
                    <i class="bi bi-arrow-up-right"></i>
                </a>
                <div class="hhc--box-social-links">
                </div>
            </div>
        </div>
        <div class="hhc--box-content">
            <div class="hhc--box-content-inner">
                <h5 class="hhc-team-title fs-5">
                    <a href="{{ route('public.packages-single',$package->slug) }}">
                        {{ $package->name }}
                    </a>
                </h5>
            </div>
        </div>
    </div>
</article>