@extends('layout.app')

@section('content')

    <x-hero-section/>
    <x-acne-type-section :acneTypes="$acne_types" />
    <x-acne-program-section />
    <x-testimonials-section />
    <x-community-section />
    <x-product-carousel :products="$products"/>
    <x-about-section />
 @endsection      
