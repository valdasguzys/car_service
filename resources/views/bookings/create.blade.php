@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add booking:</div>
               <div class="card-body">
                   <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Make:</label>
                            <input type="text" name="make" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="model" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                            <input type="text" name="year" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Customer</label>
                            <select name="customer_id" id="" class="form-control">
                                 <option value="" selected disabled>Choose customer</option>
                                 @foreach ($customers as $customer)
                                 <option value="{{ $customer->id }}">{{ $customer->surname }}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

