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
                <h5 class="bg-primary p-2 text-center text-light">Service <a href="{{ route('admin-service-create') }}"><i
                            class="bi bi-plus text-light float-end"></i></a></h5>
                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered text-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Short Description</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><span class="fs-3">{!! $item->icon !!}</span></td>
                                    <td>{{ $item->shortDescription }}</td>
                                    <td>{{ $item->status ? 'Active' : 'Inactive' }}</td>
                                    <td><a href="{{route('admin-service-show',$item->id)}}" class="btn btn-primary"><i class="bi bi-eye"></i></a></td>
                                    <td><a href="{{route('admin-service-edit',$item->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="javascript(void(0))" class="btn btn-danger" data-url = "{{route('admin-service-destroy',$item->id)}}"><i class="bi bi-x"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
