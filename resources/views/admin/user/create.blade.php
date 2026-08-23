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
                <form action="{{ route('admin-user-store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="User Name" class="form-control"
                                value="{{ old('name') }}">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Address*</label>
                            <input name="email" placeholder="Email Address" class="form-control"
                                value="{{ old('email') }}">

                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone Number*</label>
                            <input name="phone" placeholder="Phone Number" class="form-control"
                                value="{{ old('phone') }}">

                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Password*</label>
                            <input type="password" name="password" placeholder="Password" class="form-control"
                                value="{{ old('password') }}">

                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Confirm Password*</label>
                            <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control"
                                value="{{ old('cpassword') }}">

                            @error('cpassword')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Role*</label>
                            <select name="role" class="form-select">
                                <option value="Admin" {{ old('status', 'Admin') == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="Super Admin"
                                    {{ old('status', 'Admin') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status*</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', '1') == '0' ? 'selected' : '' }}>Inctive</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary w-100">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
