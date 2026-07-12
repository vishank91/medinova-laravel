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
                <h5 class="bg-primary p-2 text-center text-light">Package <a href="{{ route('admin-package') }}"><i
                            class="bi bi-arrow-left text-light float-end"></i></a></h5>
                <form action="{{ route('admin-package-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Package Name" class="form-control"
                                value="{{ old('name') }}">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Base Price*</label>
                            <input type="number" name="basePrice" placeholder="Package Base Price" class="form-control"
                                value="{{ old('basePrice') }}">

                            @error('basePrice')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Discount*</label>
                            <input type="number" name="discount" placeholder="Package Discount" class="form-control"
                                value="{{ old('discount') }}">

                            @error('discount')
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
                            <label>Description*</label>
                            <div id="div_editor1" class="richtexteditor">{!! old('htmlcode') !!}</div>
                            <input name="htmlcode" id="inp_htmlcode" type="hidden" value={{ old('htmlcode') }} />
                            @error('htmlcode')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
