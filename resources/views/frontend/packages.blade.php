@extends('layouts.master')

@section('content')
    <div class="hhc-title-bar-wrapper  hhc-bg-color-transparent hhc-bg-image-yes hhc-titlebar-style-left">
        <div class="container">
            <div class="hhc-title-bar-content">
                <div class="hhc-title-bar-content-inner">
                    <div class="hhc-tbar">
                        <div class="hhc-tbar-inner container">
                            <h1 class="hhc-tbar-title"> Packages</h1>
                        </div>
                    </div>
                    <div class="hhc-breadcrumb">
                        <div class="hhc-breadcrumb-inner">
                            <span>
                                <a title=""
                                    href="#" class="home">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span class="archive post-hhc-service-archive current-item">
                                    Packages
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="container">
            <div class="col-lg-12">
                <div class="row justify-center">
                    @foreach ($packages as $package)
                        <div class="col-lg-3 mb-3 ">
                            @include('frontend.shortcuts.item.package', compact('package'))
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
