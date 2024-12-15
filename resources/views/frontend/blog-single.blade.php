@extends('layouts.master')
@push('header')
    <style>
        .our-services {
            background-color: #f0f7fd;
            border-radius: 25px;
        }

        .our-services ul>li a {
            padding: 16px 60px 16px 25px;
            display: block;
            position: relative;
            border-radius: 0;
            font-size: 14px;
            font-weight: 600 !important;
            color: var(--pbmit-xcare-blackish-color);
            text-transform: uppercase;
            -webkit-transition: all .25s ease-in-out;
            transition: all .25s ease-in-out;
        }

        .our-services ul>li a::after {
            position: absolute;
            content: "";
            left: 0;
            font-size: 20px;
            top: 50%;
            width: 7px;
            height: 7px;
            z-index: 1;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            background-color: #9C27B0;
            border-radius: 50%;
            transition: all 0.4s ease;
        }

        .our-services ul>li {
            border-bottom: 1px solid #031b4e1a;
            line-height: 2;
            padding: 5px;
        }


        .single-service-img {
            height: 500px;
            border-radius: 35px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .aside-services {
          
            padding-bottom: 40px;
        }

        .limited-text {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;  /* Number of lines displayed before it truncate */
            overflow: hidden;
        }
    </style>
@endpush
@section('content')
    <div class="hhc-title-bar-wrapper  hhc-bg-color-transparent hhc-bg-image-yes hhc-titlebar-style-left">
        <div class="container">
            <div class="hhc-title-bar-content">
                <div class="hhc-title-bar-content-inner">
                    <div class="hhc-tbar">
                        <div class="hhc-tbar-inner container">
                            <h1 class="hhc-tbar-title"> {{ $blog->title }}</h1>
                        </div>
                    </div>
                    <div class="hhc-breadcrumb">
                        <div class="hhc-breadcrumb-inner">
                            <span>
                                <a href="{{ route('public.index') }}" class="home">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <a href="{{ route('public.blogs') }}" class="home">
                                    <span>Blogs</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span class="archive small post-hhc-service-archive current-item">
                                    {{ $blog->title }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    
                    <div class="col-lg-9 mb-5">
                        <article id="post-107"
                            class="hhc-service-single-style-1 post-107 hhc-service type-hhc-service status-publish has-post-thumbnail hentry">
                            <div class="hhc-service-single">
                                <div class="col-lg-12 single-service-img"
                                    style="background-image:url({{ asset('images/' . $blog->image) }})">
                                </div>
                                <div class="hhc-entry-content mt-5">
                                    {!! $blog->description !!}
                                </div>

                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <div class="col-lg-12">
                            <aside class="aside-services">
                                <div class="card rounded-5 border-0 shadow-lg our-services">
                                    <h2 class="text-theme fs-4 px-3 pt-4 pb-3 fw-bold"><i class="bi bi-activity text-theme"></i> Categories</h2>

                                    <ul class="px-3">
                                        @foreach ($categories as $categoryItem)
                                            <li>
                                                <a href="{{ route('public.blog-category',$categoryItem->slug) }}">
                                                    {{ $categoryItem->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-12 pt-5">
                            <aside class="aside-services">
                                <div class="card rounded-5 border-0 shadow-lg our-services">
                                    <h2 class="text-theme fs-4 px-3 pt-4 pb-3 fw-bold"><i class="bi bi-activity text-theme"></i> Recent Posts</h2>

                                    <ul class="px-3">
                                        @foreach ($blogs as $blogItem)
                                            <li>
                                                <a href="{{ route('public.blog-single',$blogItem->slug) }}">
                                                    <div class="flex align-items-center gap-3">
                                                        <img src="{{ asset('images/'.$blogItem->image) }}" class="w-50" style="border-radius:9px;">
                                                        <span class="small limited-text">{{ $blogItem->title }}</span>
                                                    </div>
                                                  
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
