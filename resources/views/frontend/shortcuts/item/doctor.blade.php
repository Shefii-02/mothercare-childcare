<article class="hhc-ele hhc-ele-team hhc-team-style-1 mx-3">
    <div class="hhc--post-item">
        <div class="hhc-featured-wrap ">
            <div class="hhc-featured-img-wrapper">
                <div class="hhc-featured-wrapper bg-theme2-light">
                    <img src="{{ asset('images/' . $doctor->image) }}" alt="" />
                </div>
            </div>
            <div class="hhc-team-btn">
                <a class="hhc-team-text" href="{{ route('public.doctors-single',$doctor->slug) }}">
                    <i class="bi bi-arrow-up-right"></i>
                </a>
                <div class="hhc--box-social-links">
                </div>
            </div>
        </div>
        <div class="hhc--box-content">
            <div class="hhc--box-content-inner">
                <div class="hhc--box-team-position mt-2">
                    {{ $doctor->qualifications }}
                </div>
                <h3 class="hhc-team-title">
                    <a href="{{ route('public.doctors-single',$doctor->slug) }}">
                        {{ $doctor->name }}
                    </a>
                </h3>
            </div>
        </div>
    </div>
</article>