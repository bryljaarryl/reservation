@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Admin Dashboard</h1>
            <div class="card">
                <div class="card-header">
                    Rooms Management
                    <a href="{{ route('rooms.create') }}" class="btn btn-primary float-right">Add Room</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Room Type</th>
                                <th>Capacity</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{ $room->room_type }}</td>
                                    <td>{{ $room->capacity }}</td>
                                    <td>${{ $room->price }}</td>
                                    <td>{{ ucfirst($room->status) }}</td>
                                    <td>
                                        <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Booking Management
                    <a href="{{ route('bookings.create') }}" class="btn btn-primary float-right">Add Booking</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Guest</th>
                                <th>Room</th>
                                <th>Check-in</th>
                                <th>Check-out</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->guest->name }}</td>
                                    <td>{{ $booking->room->room_type }}</td>
                                    <td>{{ $booking->check_in }}</td>
                                    <td>{{ $booking->check_out }}</td>
                                    <td>{{ ucfirst($booking->status) }}</td>
                                    <td>
                                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection