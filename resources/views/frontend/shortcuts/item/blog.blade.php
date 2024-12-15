<article class="hhc-ele hhc-ele-blog hhc-blog-style-1 mx-3">
    <div class="post-item">
        <div class="hhc--box-content">
            <div class="hhc-featured-container">
                <div class="hhc-featured-img-wrapper">
                    <div class="hhc-featured-wrapper">
                        <img src="{{ asset('images/' . $blog->image) }}"
                            alt="pregnancy physiotherapy" />
                    </div>
                </div>
                <a class="hhc-blog-btn"
                    href="{{ route('public.blog-single', $blog->slug) }}"><span
                        class="hhc-button-icon-wrapper">
                        <span class="hhc-button-icon">
                            <i class="bi bi-arrow-up-right"></i>
                        </span>
                    </span>
                </a>
                <div class="hhc-meta-cat-wrapper hhc-meta-line">
                    <div class="hhc-meta-category">
                        <a href="category/maternity-obstetrics/index.html"
                            rel="category tag">{{ $blog->category->name }}</a>
                    </div>
                </div>
                <a class="hhc-link"
                    href="{{ route('public.blog-single', $blog->slug) }}"></a>
            </div>
            <div class="hhc-category-date-wraper d-flex align-items-center">
                <div class="hhc-meta-date-wrapper hhc-meta-line">
                    <div class="hhc-meta-date">
                        <span class="hhc-post-date">
                            <i class="hhc-base-icon-calendar-3"></i>
                            {{ date('M D, Y', strtotime($blog->created_at)) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="hhc-content-wrapper">
                <h4 class="hhc-post-title fs-5">
                    <a href="{{ route('public.blog-single', $blog->slug) }}">
                        {{ $blog->title }}
                    </a>
                </h4>
            </div>
        </div>
    </div>
</article>