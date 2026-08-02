@extends('layout.master-layout')
@section('title')
    <title>Medinove | {{ $data->name }}</title>
@endsection

@section('main')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    @foreach ($service as $item)
                        <a href="{{route('show-service',$item->id)}}" class="list-group-item list-group-item-action">{{$item->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <h1 class="text-center">{{ $data->name }}</h1>
                <p><i>{{ $data->shortDescription }}</i></p>
                <div>{!! $data->description !!}</div>
            </div>
        </div>
    </div>
@endsection
