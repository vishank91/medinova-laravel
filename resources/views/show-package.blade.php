@extends('layout.master-layout')
@section('title')
    <title>Medinove | {{ $data->name }}</title>
@endsection

@section('main')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    @foreach ($package as $item)
                        <a href="{{ route('show-pricing', $item->id) }}"
                            class="list-group-item list-group-item-action">{{ $item->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <h1 class="text-center">{{ $data->name }}</h1>
                <div class="row my-3">
                    <div class="col-md-6">
                        <img src="{{ $data->pic() }}" alt="" class="w-100">
                    </div>
                    <div class="col-md-6">
                        <div class="card p-5 h-100 w-100 d-flex justify-content-center align-items-center">
                            <h1><del class="text-danger">&#8377;{{$data->basePrice}}</del> &#8377;{{$data->finalPrice}} <sup class="text-success">{{$data->discount}} % off</sup></h1>
                        </div>
                    </div>
                </div>
                <p><i>{{ $data->shortDescription }}</i></p>
                <div>{!! $data->description !!}</div>
            </div>
        </div>
    </div>
@endsection
