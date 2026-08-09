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
                <h5 class="bg-primary p-2 text-center text-light">Contact Us Query <a href="{{ route('admin-contactus') }}"><i
                            class="bi bi-arrow-left text-light float-end"></i></a></h5>
                <form action="{{ route('admin-contactus-update', $data->id) }}" method="POST">
                    <table class="table table-bordered text-dark">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{ $data->phone }}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                             <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                             <tr>
                                <th>Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $data->status ? 'Active' : 'Inactive' }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="{{ route('admin-contactus-update', $data->id) }}"
                                        class="btn btn-primary w-100">Change Status</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
