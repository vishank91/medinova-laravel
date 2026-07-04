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
                            <td>Nitin Chauhan</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>nitin</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>vishankchauhan@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>9873848046</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>Super Admin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
