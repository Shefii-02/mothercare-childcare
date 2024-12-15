<section class="padding-section">
    <div class=" hhc-ele-header-align-center homedoc elementor-widget elementor-widget-pbmit_team_element">
        <div
            class="hhc--element hhc--element-team	hhc-element-team-style-1	hhc-element-viewtype-carousel		hhc-element-column-four			hhc-element-sticky-carousel-false			hhc-element-caroursel-dot-false			hhc-infinite-scroll-no			hhc-infinite-scroll-button-no			hhc--gap-default			">
            <div class="hhc-element-inner container">
                <div class="hhc-ele-header-area">
                    <div class="text-center">

                        <h4 class="sub-title">
                            our blogs
                        </h4>
                        <h2 class="main-title">
                            Latest news & articles
                        </h2>
                    </div>
                </div>
                <div
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "autoplay": true, "lazyLoad": "progressive", "touchMove": true, "infinite": true,
                    "responsive": [
                            {
                                "breakpoint": 1024,
                                "settings": {
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1
                                }
                            },
                            {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 2,
                                    "slidesToScroll": 1
                                }
                            },
                            {
                                "breakpoint": 480,
                                "settings": {
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1
                                }
                            }
                        ]}'>
                    @foreach ($blogs ?? [] as $blog)
                        @include('frontend.shortcuts.item.blog', compact('blog'))
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    <div
        class=" hhc-btn-shape-rounded elementor-align-center hhc-btn-color-globalcolor hhc-btn-hover-color-blackish hhc-btn-style-flat hhc-btn-magnatic-yes mt-5 elementor-widget elementor-widget-button">
        <div class="">
            <div class="elementor-button-wrapper">
                <a class="elementor-button elementor-button-link elementor-size-sm" href="{{ route('public.blogs') }}">
                    <span class="elementor-button-content-wrapper">

                        <span class="elementor-button-text ms-2">View
                            All</span>
                    </span>
                </a>
            </div>
        </div>
    </div>

</section>
