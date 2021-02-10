@extends('layouts.app')
@section('content')

    <div class="container">
        <h1> customers page</h1>



        <table class="table">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>e-mail</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->surname }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <form action={{ route('customers.destroy', $customer->id) }} method="POST">
                        <a class="btn btn-success" href={{ route('customers.edit', $customer->id) }}>Edit</a>
                        @csrf @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                </td>
    
            </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('customers.create') }}" class="btn btn-success">Add Customer</a>
        </div>


    </div>
    
@endsection