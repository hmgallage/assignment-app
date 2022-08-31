@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center mt-4">
            <h1 class="page-title">Products</h1>
            <a href="{{ route('product.new') }}" class="btn btn-primary">Add Product</a>
            
        </div> 
        <div class="col-lg-12 mt-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>                   
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">status</th>
                    <th scope="col">changes</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($products as $ket => $product)
                   <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if ($product->status ==0)
                            <span class="badge rounded-pill text-bg-danger">Unavailable</span>
                        @else    
                            <span class="badge rounded-pill text-bg-success">Available</span>
                        @endif
                        <a href="{{ route('product.status',$product->id) }}" class="btn btn-warning"><i class="fa-solid fa-circle-xmark"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i>
                        </a>
                    </td>   
                  </tr>    
                   @endforeach                   
                </tbody>
              </table>
        </div>         
    </div>
   </div> 
@endsection

@push('css')
    <style>
        .page-title{
            padding-top: 5vh;
            font-size: 30pt;
        }
    </style>    
@endpush