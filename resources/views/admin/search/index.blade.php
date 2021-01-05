@extends('layouts.app')

@section('title', 'Search Page')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Search Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Search Page</li>
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
                    <div class="card card-body" style="min-height: 60px">
                    <button class="btn btn-info inventory" style="margin-left: 1154px;margin-right: 52px;">Add Inventory</button> 
                    <div class="form-group group">
                        <div class="input-group" >                                                 
                            <span class="input-group-addon" style= "margin-top: 24px;border: 1px solid lightgray;border-right:none;width: 41px;"
                            ><i class="fas fa-search" style="margin-top: 11px;padding-left: 11px;"></i></span>
                            <input type="text" class="form-control mt-4 " id="search" name="search" placeholder="Enter Product Name Here">
                             </input>
                        </div>
                        </div>
                    <table class="table  table-hover">
                            
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

@section('js')
   
    <script type="text/javascript">
    $('.group').hide(); 
    $('.inventory').on('click' , function(e){
        e.preventDefault();
        $('.group').show();
       
    })
        $('#search').on('keyup',function(e){
            e.preventDefault();
            $value=$(this).val();
            if($value == "") {
                $('tbody').html("");             
            }
            $.ajax({
                type : 'get',
                url : '{{URL::to('admin/search-product')}}',
                data:{_token : '{{ csrf_token() }}',
                    'search':$value},
                success:function(data){
                    $('tbody').html(data);
            }
            });
           
          
        })
    
    </script>
@endsection        