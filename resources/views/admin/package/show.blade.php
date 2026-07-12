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
            <h5 class="bg-primary p-2 text-center text-light">Package <a href="{{ route('admin-package') }}"><i
                        class="bi bi-arrow-left text-light float-end"></i></a></h5>
            <form action="{{ route('admin-package-update', $data->id) }}" method="POST">
                <table class="table table-bordered text-dark">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{$data->shortDescription}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $data->description !!}</td>
                        </tr>
                        <tr>
                            <th>Icon</th>
                            <td><span class="fs-1">{!! $data->icon !!}</span></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status?"Active":"Inactive"}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="{{route('admin-package-edit',$data->id)}}" class="btn btn-primary w-100">Update</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection