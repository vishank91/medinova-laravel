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
                <h5 class="bg-primary p-2 text-center text-light">Newsletters</h5>
                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered text-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Date</th>
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
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->status ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin-contactus-show', $item->id) }}" class="btn btn-success">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </td>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin-contactus-update', $item->id) }}"
                                            class="btn btn-success">Change Status</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-danger delete-btn"
                                            data-url="{{ route('admin-contactus-destroy', $item->id) }}">
                                            <i class="bi bi-x"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
