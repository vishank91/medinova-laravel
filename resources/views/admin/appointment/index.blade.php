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
                <h5 class="bg-primary p-2 text-center text-light">Appointments</h5>
                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered text-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Doctor</th>
                                <th>Department</th>
                                <th>Time</th>
                                <th>Status</th>
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
                                    <td>{{ $item->doctor->name }}</td>
                                    <td>{{ $item->doctor->department->name }}</td>
                                    <td>{{ $item->date }} : {{ $item->time }}</td>
                                    <td>{{ $item->status ? 'Active' : 'Inactive' }}</td>
                                    <td><a href="{{ route('admin-appointment-update', $item->id) }}"
                                            class="btn btn-success">Change Status</a></td>
                                    <td>
                                        @if (!$item->status)
                                            <a href="javascript:void(0)" class="btn btn-danger delete-btn"
                                                data-url="{{ route('admin-appointment-destroy', $item->id) }}">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        @endif
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
