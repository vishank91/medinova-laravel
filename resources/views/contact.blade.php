@extends('layout.master-layout')
@section('title')
    <title>Medinove | Home</title>
@endsection

@section('main')
    <!-- Hero Start -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Any Questions?</h5>
                <h1 class="display-4">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <a class="mb-0" href="{{ config('app.siteMap1') }}"
                            target="_blank">{{ config('app.siteAddress') }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <a class="mb-0" href="mailto:{{ config('app.siteEmail') }}"
                            target="_blank">{{ config('app.siteEmail') }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <a class="mb-0" href="tel:{{ config('app.sitePhone') }}"
                            target="_blank">{{ config('app.sitePhone') }}</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="bi bi-whatsapp fs-3 text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <a class="mb-0" href="https://wa.me/{{ config('app.siteWhatsapp') }}"
                            target="_blank">{{ config('app.siteWhatsapp') }}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="height: 500px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100" src="{{ config('app.siteMap2') }}" frameborder="0"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0">
                        @if ($show)
                            <p class="text-success text-center">Thanks to Share Your Query With Us, Our Team Will Contact
                                You Soon</p>
                        @endif
                        <form action="{{route('contact-store')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control bg-light border-0"
                                        placeholder="Your Name" style="height: 55px;" value="{{ old('name') }}">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0"
                                        placeholder="Your Email" style="height: 55px;" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phone" class="form-control bg-light border-0"
                                        placeholder="Your Phone Number" style="height: 55px;" value="{{ old('phone') }}">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" class="form-control bg-light border-0"
                                        placeholder="Subject" style="height: 55px;" value="{{ old('subject') }}">
                                    @error('subject')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
