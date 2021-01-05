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
                            <li class="breadcrumb-item active">All Products</li>
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
                        <div class="row">
                            <div class="col">
                                <form>
                                    <select name="limit" id="">
                                        <option value="5" {{ Request::get('limit') == 5? 'selected' : '' }}>5</option>
                                        <option value="10" {{ Request::get('limit') == 10? 'selected' : '' }}>10</option>
                                        <option value="25" {{ Request::get('limit') == 25? 'selected' : '' }}>25</option>
                                    </select>
                                    <button type="submit">update</button>
                                </form>
                            </div>
                            <div class="col text-center">
                                <form class="d-flex justfy-between" >
                                    <input type="text" name="search" class="form-control">
                                    <button type="submit" class="btn btn-info">Searching</button>
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-warning">Reset</a>
                                </form>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('admin.products.create') }}" class="btn btn-success">Create</a>
                            </div>
                        </div>



                        <table class="table table-bordered table-data mt-4">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>category</th>
                                <th>user</th>
                                <th>description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection


@section('js')
    <script>

        $(function () {
            getAllProducts();
        });

        $(document).on('click', '.delete', function (e) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // $(`#delete-${$(this).data('id')}`).submit();
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'POST',
                        data: {
                            _method : 'DELETE',
                            _token : '{{ csrf_token() }}'
                        },
                        success: function (res) {
                            if (result.value) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                );

                                getAllProducts();
                            }
                        }
                    });

                }
            })
        });

        $(document).on('click', '.page-link', function (e) {
            e.preventDefault();
            getAllProducts($(this).text())
        });

        function getAllProducts(page = 1) {
            $.ajax({
                url: '{{ route('admin.products.get-products') }}?page=' + page,
                type: 'GET',
                success: function (res) {
                    $('.table-data tbody').html(res);
                }
            })
        }
    </script>
@endsection