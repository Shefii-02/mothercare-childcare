<section style="margin-top:100px">
    <div x-data="scrollBox" class="flex justify-center items-center h-screen ">
        <div class="box bg-theme2 padding-section rounded-5 mb-5" style="border-radius:25px;padding-bottom: 100px;"
            :style="{ width: boxWidth + '%', transition: 'width 10s' }">


            <div class="background-overlay"></div>
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <h4 class="sub-title text-light">
                            Our Services
                        </h4>
                        <h2 class="main-title text-light fw-bold">
                            We Care For Every Mother & Child
                        </h2>
                    </div>
                </div>

                <div>
                    <div class="col-lg-12">
                        <div
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 1,"arrows":true,"autoplay":true,"lazyLoad":"progressive","touchMove":true,
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
                            @foreach ($services ?? [] as $service)
                                @include('frontend.shortcuts.item.service', compact('service'))
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
