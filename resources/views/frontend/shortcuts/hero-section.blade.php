<section> 
    <div
        data-slick='{"slidesToShow": 1, "slidesToScroll": 1,"arrows":true,"autoplay":true,"lazyLoad":"progressive","touchMove":true}'>
        @mobile
            @foreach($slider_in_mobile ?? [] as $mobileItem)
                <div>
                    <img src="{{ asset('images/'.$mobileItem) }}">
                </div>
            @endforeach
        @elsemobile
            @foreach($slider_in_desktop ?? [] as $desktopItem)
                <div>
                    <img src="{{ asset('images/'.$desktopItem) }}">
                </div>
            @endforeach
        @endmobile
    </div>
</section>