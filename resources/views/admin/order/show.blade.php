@extends('layouts.app')

@section('title', 'All Orders')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">admin</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
                        <li class="breadcrumb-item active">Show Order: {{ $order->id }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="card card-body">
                    
                    <h2>Order : {{ $order->id }}</h2>
                    <p>Client Name: {{ $order->client->name }}</p>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Order quantity</th>
                                <th>Total</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->products as $productdetails)
                            <tr class="text-center">
                                <td>{{ $productdetails->name }}</td>
                                <td>{{ ($productdetails->pivot->price)  }} $</td>
                                <td>{{ ($productdetails->pivot->quantity) }}</td>
                                <td>{{( $productdetails->pivot->total) }}</td>
                                <td>{{$productdetails->pivot->created_at}}</td>
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                       
                                     <div class="d-flex justify-content-around">   
                    <h3 class="text-center mt-3 mb-3"> Total amount : {{($order->total_amount)}}$</h3>
                    <h3 class="text-center mt-3 mb-3"> payment method : {{($order->payment_method)}}</h3>
</div>
                    <a href="{{ route('admin.orders.edit', $order) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
         
        </div>
    </div>
    
</div>
@endsection