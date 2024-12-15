<article class="hhc-ele hhc-ele-service hhc-service-style-2 mx-3 ">
    <div class="hhc--post-item">
        <div class="hhc--box-content">
            <div class="hhc-service-image-wrapper">
                <div class="hhc-featured-img-wrapper">
                    <div class="hhc-featured-wrapper">
                        <img src="{{ asset('images/' . $service->image) }}" alt="" />
                    </div>
                </div>
                <a class="hhc-service-btn" href="{{ route('public.services-single', $service->slug) }}"
                    title="{{ $service->name }}">
                    <span class="hhc-button-icon-wrapper">
                        <span class="hhc-button-icon">
                            <i class="bi bi-arrow-up-right"></i>
                        </span>
                    </span>
                </a>
            </div>
            <div class="hhc-contant-box">
                <div class="hhc-serv-cat">
                </div>
                <h3 class="hhc-service-title">
                    <a href="{{ route('public.services-single', $service->slug) }}">
                        {{ $service->name }}
                    </a>
                </h3>
            </div>
        </div>
        <a class="hhc-link" href="{{ route('public.services-single', $service->slug) }}"></a>
    </div>
</article>
