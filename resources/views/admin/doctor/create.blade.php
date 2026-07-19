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
                <h5 class="bg-primary p-2 text-center text-light">Doctor <a href="{{ route('admin-doctor') }}"><i
                            class="bi bi-arrow-left text-light float-end"></i></a></h5>
                <form action="{{ route('admin-doctor-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Doctor Name" class="form-control"
                                value="{{ old('name') }}">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Department*</label>
                            <select name="departmentId" class="form-select">
                                <option value="" disabled selected>Select Department</option>
                                @foreach ($department as $item)
                                    <option {{ old('departmentId', '') == $item->id ? 'selected' : '' }}
                                        value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>

                            @error('departmentId')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="col-12 mb-3">
                            <label>Short Description*</label>
                            <textarea name="shortDescription" placeholder="Short Description" class="form-control" rows="3">{{ old('shortDescription') }}</textarea>

                            @error('shortDescription')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label>Facebook Profile Page</label>
                            <input type="url" name="facebook" placeholder="Facebook Profile Page URL"
                                class="form-control" value="{{ old('facebook') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label>Twitter Profile Page</label>
                            <input type="url" name="twitter" placeholder="Twitter Profile Page URL" class="form-control"
                                value="{{ old('twitter') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label>Linkedin Profile Page</label>
                            <input type="url" name="linkedin" placeholder="Linkedin Profile Page URL"
                                class="form-control" value="{{ old('linkedin') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label>Instagram Profile Page</label>
                            <input type="url" name="instagram" placeholder="Instagram Profile Page URL"
                                class="form-control" value="{{ old('instagram') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label>Youtube Profile Page</label>
                            <input type="url" name="youtube" placeholder="Youtube Profile Page URL" class="form-control"
                                value="{{ old('youtube') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Pic*</label>
                            <input type="file" name="pic" class="form-control">
                            @error('pic')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
