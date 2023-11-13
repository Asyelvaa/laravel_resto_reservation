@extends('layouts.app')

@section('title', 'Reservation Detail')

@section('content')
    <div class="container mt-5">
        <h2 class="text-primary">Reservation Detail</h2>

        @if($reservation)
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $reservation->name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $reservation->phone }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $reservation->reservation_date }}</p>
                    <p class="card-text"><strong>Time:</strong> {{ $reservation->reservation_time }}</p>
                    <p class="card-text"><strong>People Count:</strong> {{ $reservation->people_count }}</p>
                    @if($reservation->message)
                        <p class="card-text"><strong>Message:</strong> {{ $reservation->message }}</p>
                    @endif
                    <p class="card-text"><strong>Created At:</strong> {{ $reservation->created_at }}</p>
                    <p class="card-text"><strong>Updated At:</strong> {{ $reservation->updated_at }}</p>
                </div>
            </div>
        @else
            <p class="text-danger">Reservation not found.</p>
        @endif
    </div>
@endsection
