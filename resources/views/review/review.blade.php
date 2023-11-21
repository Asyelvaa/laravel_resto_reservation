@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary">Review User</h2>

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Rating</th>
                <th scope="col">Review</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $review->name }}</td>
                <td>{{ $review->email }}</td>
                <td>{{ $review->review_date }}</td>
                <td>{{ $review->rating }}</td>
                <td>{{ $review->review }}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
