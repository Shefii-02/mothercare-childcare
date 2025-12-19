@extends('layouts.master')

@section('content')
    <div class="hhc-title-bar-wrapper  hhc-bg-color-transparent hhc-bg-image-yes hhc-titlebar-style-left">
        <div class="container">
            <div class="hhc-title-bar-content">
                <div class="hhc-title-bar-content-inner">
                    <div class="hhc-tbar">
                        <div class="hhc-tbar-inner container">
                            <h1 class="hhc-tbar-title"> Contact us</h1>
                        </div>
                    </div>
                    <div class="hhc-breadcrumb">
                        <div class="hhc-breadcrumb-inner">
                            <span>
                                <a title="" href="#" class="home">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span class="archive post-hhc-service-archive current-item">
                                    Contact us</span>
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
                    <div class="col-lg-4 mb-3">
                        <article class="hhc-ele hhc-ele-team hhc-team-style-1 mx-3">
                            <div class="hhc--post-item">
                                <div class="hhc-featured-wrap ">
                                    <div class="hhc-featured-img-wrapper">
                                        <div class="hhc-featured-wrapper bg-theme-light" style="height:350px">
                                            <div class="p-5 position-relative">
                                                <div>
                                                    <i class="bi bi-envelope fs-2 text-light"></i>
                                                </div>
                                                <hr class="text-light">
                                                <div class="pt-4">
                                                    <h2 class="text-light fw-bold">Mail us 24/7</h2>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="mailto:hayathmotherandchildcare@gmail.com"
                                                        class="text-decoration-none text-light">hayathmotherandchildcare@gmail.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hhc-team-btn">
                                        <a class="hhc-team-text" href="mailto:hayathmotherandchildcare@gmail.com">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <article class="hhc-ele hhc-ele-team hhc-team-style-1 mx-3">
                            <div class="hhc--post-item">
                                <div class="hhc-featured-wrap ">
                                    <div class="hhc-featured-img-wrapper">
                                        <div class="hhc-featured-wrapper bg-theme-light" style="height:350px">
                                            <div class="p-5 position-relative">
                                                <div>
                                                    <i class="bi bi-telephone-inbound-fill fs-2 text-light"></i>
                                                </div>
                                                <hr class="text-light">
                                                <div class="pt-4">
                                                    <h2 class="text-light fw-bold">Call us 24/7</h2>
                                                </div>
                                                <div class="bottom-0 mt-4">
                                                    <a href="tel:+918089111286"
                                                        class="text-decoration-none text-light">Mobile : +91 8089 111 286</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hhc-team-btn">
                                        <a class="hhc-team-text" href="mailto:marketing@gmail.com">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <article class="hhc-ele hhc-ele-team hhc-team-style-1 mx-3">
                            <div class="hhc--post-item">
                                <div class="hhc-featured-wrap ">
                                    <div class="hhc-featured-img-wrapper">
                                        <div class="hhc-featured-wrapper bg-theme-light" style="height:350px">
                                            <div class="p-5 position-relative">
                                                <div>
                                                    <i class="bi bi-geo-alt-fill fs-2 text-light"></i>
                                                </div>
                                                <hr class="text-light">
                                                <div class="pt-4">
                                                    <h2 class="text-light fw-bold">Address</h2>
                                                </div>
                                                <div class=" mt-4">
                                                    <a href="mailto:marketing@gmail.com"
                                                        class="text-decoration-none text-light">
                                                        Hayath Mother & Child Care LLP<br>
                                                        Tirur - Kuttippuram Rd, Kavumopuram, Kuttippuram, Kerala 679571.                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hhc-team-btn">
                                        <a class="hhc-team-text" href="mailto:marketing@gmail.com">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="pt-5">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/images/contact-image.png') }}" class="w-100"/>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="form">
                                <form class="row" method="POST" action="{{ route('public.contact-send') }}">
                                    @csrf
                                    <!-- form group -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="contactFistName">
                                            Full Name:
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" type="text" name="fullname" id="contactFistName"
                                            placeholder="First Name" required="">
                                    </div>
                                    <!-- form group -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label"  for="contactPhone">
                                            Phone Number:
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" type="text" id="contactPhone" name="phone"
                                            placeholder="Phone" required="">
                                        <div class="invalid-feedback">Please enter Phone Number</div>
                                    </div>
                                    <!-- form group -->
                                    <div class="mb-3 col-12">
                                        <label class="text-dark form-label" for="contactMessages">Message:</label>
                                        <textarea class="form-control" id="contactMessages" name="message" rows="3" placeholder="Messages"></textarea>
                                    </div>
                                    <!-- button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn bg-dark text-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5">
        <div class="container">
            <div class="col-lg-12 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.551063714685!2d76.02932177504293!3d10.845627289307357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7b73c80314e33%3A0x49cf3b197f4eaa49!2sHayath%20Medicare%20Hospital!5e0!3m2!1sen!2sin!4v1734192894290!5m2!1sen!2sin"
                    width="100%" height="550" style="border:0;    border-radius: 25px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
