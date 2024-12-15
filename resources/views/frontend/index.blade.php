@extends('layouts.master')

@section('content')
    @include('frontend.shortcuts.hero-section',['slider_in_desktop'=>$slider_in_desktop,'slider_in_mobile'=>$slider_in_mobile])
    @include('frontend.shortcuts.why-choose')
    @include('frontend.shortcuts.home-services-list',['services'=>$services])
    @include('frontend.shortcuts.doctors-scroll',['doctors'=>$doctors])
    @include('frontend.shortcuts.testimonial-scroll',['testimonial'=>$testimonials])
    @include('frontend.shortcuts.blogs-scroll',['blogs'=>$blogs])
@endsection