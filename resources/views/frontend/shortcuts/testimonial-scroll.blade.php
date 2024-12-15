@if ($testimonials['status'] == 200)
    <section class="padding-section">
        <div class=" hhc-ele-header-align-center homedoc elementor-widget elementor-widget-pbmit_team_element">
            <div
                class="hhc--element hhc--element-team	hhc-element-team-style-1	hhc-element-viewtype-carousel		hhc-element-column-four			hhc-element-sticky-carousel-false			hhc-element-caroursel-dot-false			hhc-infinite-scroll-no			hhc-infinite-scroll-button-no			hhc--gap-default			">
                <div class="hhc-element-inner container">
                    <div class="hhc-ele-header-area">
                        <div class="text-center">

                            <h4 class="sub-title">
                                Testimonials
                            </h4>
                            <h2 class="main-title">
                                Our clients Say
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
                        @foreach ($testimonials['reviews'] ?? [] as $testimonialItem)
                            @if ($testimonialItem['text'] != null)
                                <article class="hhc-ele hhc-ele-testimonial hhc-testimonial-style-1 m-3">
                                    <div class="hhc--post-item">
                                        <div class="hhc-box-content-wrap ">
                                            <div class="hhc--box-star-ratings">
                                                @for ($rating = 1; $rating <= $testimonialItem['rating']; $rating++)
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                @endfor
                                            </div>
                                            <div class="hhc--box-desc">
                                                <blockquote class="hhc--testimonial-text">
                                                    <p>{{ $testimonialItem['text'] }}</p>
                                                </blockquote>
                                            </div>
                                            <div class="hhc--box-author d-flex align-items-center">
                                                {{-- <div class="hhc--box-img"> --}}
                                                {{-- </div> --}}
                                                <div
                                                    class="hhc-auther-content d-flex  flex-wrap gap-3 align-items-center">
                                                    <img class="w-10"
                                                        src="{{ $testimonialItem['profile_photo_url'] }}" />

                                                    <h3 class="hhc--box-title">
                                                        {{ $testimonialItem['author_name'] }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hhc-team-text" href="{{ $testimonialItem['author_url'] }}"
                                            target="_blank" tabindex="-1">
                                            <div class="hhc-testimonial-btn">

                                                <i class="bi bi-arrow-up-right"></i>

                                            </div>
                                        </a>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div
            class=" hhc-btn-shape-rounded elementor-align-center testibtn hhc-btn-color-globalcolor hhc-btn-hover-color-blackish hhc-btn-style-flat hhc-btn-magnatic-yes elementor-widget elementor-widget-button">
            <div class="">
                <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm"
                        href="https://www.google.com/maps/place/?q=place_id:{{ env('GOOGLE_PLACE_ID') }}"
                        target="_blank">
                        <span class="elementor-button-content-wrapper">

                            <span class="elementor-button-text ms-3">Read
                                More</span>
                            <span class="elementor-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" style="enable-background:new 0 0 5000 5000;" xml:space="preserve"
                                    viewBox="1394 931.76 2211.99 3136.48">
                                    <g>
                                        <path
                                            d="M1855.469,1922.189l223.077-378.123c7.493-12.702,7.064-28.57-1.104-40.848l-212.569-319.503   c-92.075-138.407-281.091-178.664-421.562-89.929c-48.315,30.52-63.873,95.242-34.324,144.156l413.459,684.419   C1829.972,1934.819,1848.074,1934.725,1855.469,1922.189z"
                                            style="&#10;    fill: #ffffff;&#10;">
                                        </path>
                                        <path
                                            d="M2145.281,1544.489l-275.995,467.823c-1,7.52-4.931,14.505-11.374,19.279l-325.831,552.299   c-111.704,189.331-141.357,410.4-83.505,622.483s195.66,387.47,388.033,493.868l480.891,265.944   c233.304,129.019,504.554,136.024,744.216,19.203c239.643-116.812,401.217-334.792,443.312-598.041l98.839-618.192   c11.287-70.622-23.024-141.592-85.383-176.598c-45.758-25.701-99.854-29.137-148.447-9.437   c-48.509,19.663-84.886,59.72-99.807,109.91l-205.641,691.134c-4.545,15.278-20.621,23.973-35.87,19.418   c-15.268-4.545-23.963-20.602-19.419-35.87l2.886-9.7c0.137-0.723,291.266-980.281,291.266-980.281   c26.931-92.943-13.353-190.993-98.013-238.253l-6.413-3.568c-51.749-28.893-113.516-34.189-169.471-14.583   c-55.937,19.635-100.84,62.368-123.207,117.272l-336.266,825.524c-1.019,2.504-2.441,4.694-4.02,6.73   c-0.375,0.485-0.748,0.948-1.151,1.405c-1.68,1.903-3.511,3.634-5.589,5.012c-2.281,1.452-4.492,2.423-6.783,3.195   c-0.549,0.184-1.081,0.361-1.641,0.514c-2.403,0.654-4.864,1.081-7.39,1.094c-1.315,0.022-2.489-0.17-3.66-0.314   c-0.615-0.076-1.224-0.06-1.838-0.177c-1.857-0.353-3.706-0.885-5.525-1.627c-14.752-6.01-21.841-22.846-15.832-37.598   l398.221-977.624c39.401-96.708,0.347-208.017-90.839-258.921l-10.329-5.765c-49.044-27.372-105.722-33.701-159.565-17.766   c-47.957,14.164-88.13,44.402-114.946,85.876l-481.64,907.053c-7.474,14.066-24.931,19.438-39.006,11.944   c-8.666-4.599-13.99-13-15.079-22.06c-0.262-2.11-0.264-3.88-0.128-5.648c0.324-4.032,1.39-7.771,3.263-11.299l2.616-4.926   l469.636-886.318c2.866-5.411,6.124-10.516,9.316-15.67l323.513-609.255c51.007-96.088,15.221-217.398-79.768-270.423l-5.08-2.836   c-99.76-55.655-222.948-22.545-280.471,75.411l-292.943,496.552C2152.092,1535.867,2149.356,1540.667,2145.281,1544.489z"
                                            style="&#10;    fill: #ffffff;&#10;">
                                        </path>
                                    </g>
                                </svg> </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </section>
@endif
