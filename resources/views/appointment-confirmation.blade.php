@extends('layout.master-layout')
@section('title')
    <title>Medinove | Appointment Confirmation</title>
@endsection

@section('main')
    <div class="container my-5">
        <div class="card p-5 text-center">
            <h1>Thank You!!!</h1>
            <h2>Your Appointment Has Been Confirmed!</h2>
            <p class="mt-4">Thank you for choosing {{ config('app.siteName') }} for your healthcare needs. Your appointment
                has been successfully scheduled with our medical team. Please arrive a few minutes before your appointment
                time and carry any relevant medical reports or prescriptions. We look forward to providing you with
                compassionate and professional care.</p>
        </div>
    </div>
@endsection
