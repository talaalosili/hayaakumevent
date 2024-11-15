@extends('layouts.master')
@php
	$home = 'home';
@endphp

@section('content')
    <!-- slider -->
    @include('landing.include.home-slider')


    <!-- about -->
    @include('landing.include.about')


    <!-- company -->
    @include('landing.include.company')

    <!-- endcompany -->

    <!-- gallery -->
    @include('landing.include.gallery')

    <!-- endgallery-->

    <!-- testimonial -->
    @include('landing.include.testimonial')

    <!-- endtestimonial -->

    <!-- services -->

    @include('landing.include.services')

    <!-- endservices -->


    <!-- heading -->

    @include('landing.include.heading')

    <!-- endheading -->
@endsection
