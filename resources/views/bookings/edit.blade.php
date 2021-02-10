@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit booking</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Make</label>
                            <input type="text" name="make" class="form-control" value="{{ $booking->make }}">
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="model" class="form-control" value="{{ $booking->model }}"> 
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                            <input type="text" name="year" class="form-control" value="{{ $booking->year }}"> 
                        </div>
                        <div class="form-group">
                            <label>Customer</label>
                            <select name="customer_id" id="" class="form-control">
                                <option value="" selected disabled>Chose customer</option>
                                    @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}" @if($customer->id == $booking->customer_id) selected="selected" @endif>{{ $customer->surname }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

