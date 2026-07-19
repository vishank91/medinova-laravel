@extends('layout.master-layout')
@section('title')
    <title>Medinove | Team</title>
@endsection

@section('main')
    @include('partials.doctor')
    @include('partials.service')
    @include('partials.testimonial')
@endsection
