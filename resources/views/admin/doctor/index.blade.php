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
                <h5 class="bg-primary p-2 text-center text-light">Doctors <a href="{{ route('admin-doctor-create') }}"><i
                            class="bi bi-plus text-light float-end"></i></a></h5>
                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered text-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Pic</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>short Description</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Linkedin</th>
                                <th>Instagram</th>
                                <th>Youtube</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href={{ $item->pic() }} target="_blank">
                                            <img src={{ $item->pic() }} height="100px" width="100px" alt="">
                                        </a>
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->department->name }}</td>
                                    <td>
                                        <div style="width:700px">
                                            {{ $item->shortDescription }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($item->facebook)
                                            <a href="{{ $item->facebook }}" target="_blank">View Profile</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->twitter)
                                            <a href="{{ $item->twitter }}" target="_blank">View Profile</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->linkedin)
                                            <a href="{{ $item->linkedin }}" target="_blank">View Profile</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->instagram)
                                            <a href="{{ $item->instagram }}" target="_blank">View Profile</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->youtube)
                                            <a href="{{ $item->youtube }}" target="_blank">View Profile</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $item->status ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('admin-doctor-edit', $item->id) }}" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-danger delete-btn"
                                            data-url="{{ route('admin-doctor-destroy', $item->id) }}">
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
