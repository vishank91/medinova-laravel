@extends('layout.master-layout')
@section('title')
    <title>Medinove | About Us</title>
@endsection

@section('main')
    @include('partials.about')
    @include('partials.search')
    @include('partials.doctor')
    @include('partials.testimonial')
@endsection
