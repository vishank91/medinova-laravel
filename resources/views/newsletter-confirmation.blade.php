@extends('layout.master-layout')
@section('title')
    <title>Medinove | Newsletter Confirmation</title>
@endsection

@section('main')
    <div class="container my-5">
        <div class="card p-5 text-center">
            <h1>Thank You!!!</h1>
            <p class="mt-4">Thank you for subscribing to the {{ config('app.siteName') }} newsletter. Your subscription has been
                successfully confirmed.
                You’ll now receive the latest healthcare updates, wellness tips, medical advice, hospital news, and
                information about our services and health programs directly in your inbox.</p>
        </div>
    </div>
@endsection
