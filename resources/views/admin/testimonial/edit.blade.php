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
                <h5 class="bg-primary p-2 text-center text-light">Testimonial <a href="{{ route('admin-testimonial') }}"><i
                            class="bi bi-arrow-left text-light float-end"></i></a></h5>
                <form action="{{ route('admin-testimonial-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Full Name" class="form-control"
                                value="{{ old('name', $data->name) }}">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Profession*</label>
                            <input type="text" name="profession" placeholder="Profession" class="form-control"
                                value="{{ old('profession', $data->profession) }}">

                            @error('profession')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label>Message*</label>
                            <textarea name="message" placeholder="Message" class="form-control" rows="3">{{ old('message', $data->message) }}</textarea>

                            @error('message')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label>Pic</label>
                            <input type="file" name="pic" class="form-control">
                            @error('pic')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
