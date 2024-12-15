<section class="padding-section">
    <div class=" hhc-ele-header-align-center homedoc elementor-widget elementor-widget-pbmit_team_element">
        <div
            class="hhc--element hhc--element-team	hhc-element-team-style-1	hhc-element-viewtype-carousel		hhc-element-column-four			hhc-element-sticky-carousel-false			hhc-element-caroursel-dot-false			hhc-infinite-scroll-no			hhc-infinite-scroll-button-no			hhc--gap-default			">
            <div class="hhc-element-inner container">
                <div class="hhc-ele-header-area">
                    <div class="text-center">

                        <h4 class="sub-title">
                            Our Team
                        </h4>
                        <h2 class="main-title">
                            Our Specialist Doctors
                        </h2>
                    </div>
                </div>

                <div
                    data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows": true, "autoplay": true, "lazyLoad": "progressive", "touchMove": true, "infinite": true,
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
                    @foreach ($doctors ?? [] as $doctor)
                        @include('frontend.shortcuts.item.doctor', compact('doctor'))
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
