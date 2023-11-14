@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary">Menu Restaurant</h2>

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->jenis_menu }}</td>
                <td>{{ $menu->description ?: 'N/A' }}</td>
                <td>Rp {{ number_format($menu->price / 100, 2) }}</td>
                <td>
                    @if($menu->pict)
                    <img src="{{ asset('storage/' . $menu->pict) }}" alt="{{ $menu->name }}" class="img-thumbnail" width="50">
                    @else
                    N/A
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
