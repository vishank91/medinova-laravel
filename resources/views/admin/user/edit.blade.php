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
                <h5 class="bg-primary p-2 text-center text-light">User <a href="{{ route('admin-user') }}"><i
                            class="bi bi-arrow-left text-light float-end"></i></a></h5>
                <form action="{{ route('admin-user-update', $data->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="User Name" class="form-control"
                                value="{{ old('name', $data->name) }}">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Address*</label>
                            <input name="email" placeholder="Email Address" class="form-control"
                                value="{{ old('email', $data->email) }}">

                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone Number*</label>
                            <input name="phone" placeholder="Phone Number" class="form-control"
                                value="{{ old('phone', $data->phone) }}">

                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Role*</label>
                            <select name="role" class="form-select">
                                <option value="Admin" {{ old('status', $data->role) == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="Super Admin"
                                    {{ old('status', $data->role) == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status*</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $data->status) == '1' ? 'selected' : '' }}>Active
                                </option>
                                <option value="0" {{ old('status', $data->status) == '0' ? 'selected' : '' }}>Inctive
                                </option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
