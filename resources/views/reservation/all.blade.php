@extends('layouts.app')  

@section('content')

<div class="container mt-5">
    <h2 class="text-primary">All Reservations</h2>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->reservation_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
