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
                <h5 class="bg-primary p-2 text-center text-light">Admin</h5>
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{Auth::user()->phone}}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>{{Auth::user()->role}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
