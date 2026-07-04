@extends('layout.master-layout')
@section('title')
    <title>Medinove | Search</title>
@endsection

@section('main')
    @include('partials.search')
    @include('partials.service')
    @include('partials.testimonial')
@endsection
