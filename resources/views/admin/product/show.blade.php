@extends('layouts.app')

@section('title', 'All Products')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Products</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                            <li class="breadcrumb-item active">Show Category: {{ $product->name }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-body">
                        <h2>Title: <br> {{ $product->name }}</h2>
                        <p>Description: <br> {{ $product->description }}</p>
                        @if ($product->category)
                            Parent: <a href="{{ route('admin.categories.show', $product->category) }}">{{ $product->category->name }}</a>
                        @endif
                        <p>price: <br> {{ $product->price }}</p>
                        <p>quantity: <br> {{ $product->quantity }}</p>
                        <p>img: <br> {{ $product->img}}</p>
                        <p>user: <br> {{ $product->user->name }}</p>
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
