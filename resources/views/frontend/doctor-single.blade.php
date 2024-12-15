@extends('layouts.master')
@push('header')
    <style>
        .our-doctor {
            background-color: #fff;
            border-radius: 25px;
        }

        .our-doctor ul>li a {
            padding: 16px 60px 16px 25px;
            display: block;
            position: relative;
            border-radius: 0;
            font-size: 14px;
            font-weight: 600 !important;
            color: var(--hhc-xcare-blackish-color);
            text-transform: uppercase;
            -webkit-transition: all .25s ease-in-out;
            transition: all .25s ease-in-out;
        }

        .our-doctor ul>li a::after {
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

        .our-doctor ul>li {
            border-bottom: 1px solid #031b4e1a;
            line-height: 2;
            padding: 5px;
        }


        .single-doctor-img {
            height: 500px;
            border-radius: 35px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .aside-doctor {

            padding-bottom: 40px;
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
                            <h1 class="hhc-tbar-title"> {{ $doctor->name }}</h1>
                        </div>
                    </div>
                    <div class="hhc-breadcrumb">
                        <div class="hhc-breadcrumb-inner">
                            <span>
                                <a href="{{ route('public.index') }}" class="home">
                                    <span>Home</span>
                                </a>
                            </span>
                            <small>></small>
                            <span>
                                <a href="{{ route('public.doctors') }}" class="home">
                                    <span>doctor</span>
                                </a>
                            </span>
                            <small>></small>
                            <span>
                                <span class="archive small post-hhc-doctor-archive current-item">
                                    {{ $doctor->name }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <article
                            class="hhc-team-single-style-1 hhc-team-member type-hhc-team-member status-publish has-post-thumbnail hentry">
                            <div class="hhc-team-single">
                                <div class="hhc-team-single-inner hhc-sticky-section">
                                    <div class="hhc-team-single-info">
                                        <div class="row ">
                                            <div class="col-md-12 col-xl-3">
                                                <aside class="aside-services">
                                                    <div class="card rounded-5 border-0 shadow-lg our-doctor">
                                                        <img src="{{ asset('images/' . $doctor->image) }}" class="w-100">
                                                    </div>
                                                    <div class="my-3 text-center">
                                                        <h2 class="mb-2 fw-bold">({{ $doctor->department }})</h2>
                                                        <h2>{{ $doctor->qualifications }}</h2>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="col-md-12 col-xl-9">
                                                <div class="pt-4">
                                                    {!! $doctor->description !!}
                                                </div>
                                                <div class="col-lg-12 pt-5">
                                                    <div class="card rounded-5 border-0 shadow-lg">
                                                        <div class="p-5">
                                                            <h2 class="mb-3 fw-bold">Get Appointment Now</h2>
                                                            @include('frontend.shortcuts.appointment')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
