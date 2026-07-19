@extends('layout.master-layout')
@section('title')
    <title>Medinove | Package</title>
@endsection

@section('main')
    @include('partials.pricing')
    @include('partials.appointment')
    @include('partials.doctor')
    @include('partials.testimonial')
@endsection
