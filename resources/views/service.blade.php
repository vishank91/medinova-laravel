@extends('layout.master-layout')
@section('title')
    <title>Medinove | Service</title>
@endsection

@section('main')
    @include('partials.service')
    @include('partials.search')
    @include('partials.appointment')
    @include('partials.testimonial')
@endsection
