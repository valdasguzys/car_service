@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-body">
        <form class="form-inline" action="{{ route('bookings.index') }}" method="GET">
            <select name="customer_id" id="" class="form-control">
                <option value="" selected disabled>Choose client:</option>
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" 
                    @if($customer->id == app('request')->input('customer_id')) 
                        selected="selected" 
                    @endif>{{ $customer->surname }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-success" href={{ route('bookings.index') }}>Show all</a>
        </form>
    </div>
    <div class="card-body">
        @if($errors->any())
        <h4 style="color: red">{{$errors->first()}}</h4>
        @endif
        <table class="table">
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Customer</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            
            @foreach ($bookings as $booking) 
            <tr>
                <td>{{ $booking->make }}</td>
                <td>{{ $booking->model }}</td>
                <td>{{ $booking->year }}</td>
                <td>{{ $booking->customer->surname }}</td>
                <td>{{ $booking->description }}</td>

                <td>
                    <form action={{ route('bookings.destroy', $booking->id) }} method="POST">
                        <a class="btn btn-success" href={{ route('bookings.edit', $booking->id) }}>Edit</a>
                        @csrf @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('bookings.create') }}" class="btn btn-success">New booking</a>
        </div>
    </div>
</div>
@endsection
