@extends('layout.master-layout')
@section('title')
    <title>Medinove | Admin</title>
@endsection

@section('main')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-lg-3">
                @include('partials.admin-sidebar')
            </div>
            <div class="col-lg-9">
                <h5 class="bg-primary p-2 text-center text-light">Service <a href="{{route('admin-service-create')}}"><i class="bi bi-plus text-light float-end"></i></a></h5>
            </div>
        </div>
    </div>
@endsection
