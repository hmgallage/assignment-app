@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Add New Product</h1>
        </div> 
        <div class="col-lg-8-mb-6">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center mb-6">
                    <div class="col-12 col-md-8 col-lg-8">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="name" class="form-label">Product Name</label>
                              <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="images" class="form-label">Product Image</label>
                                <input type="file" class="form-control" name="images" 
                                 accept="image/jpg, image/jpeg, image/png" required>
                              </div>
                            <div class="mb-3">
                              <label for="price" class="form-label">Product Price</label>
                              <input type="number" class="form-control" name="price" required>
                             </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Status</label>
                                <select class="form-select" name="status" required>
                                     <option selected>select Availability</option>
                                     <option value="1">Available</option>
                                     <option value="0">Unavailable</option>
                                </select>
                            </div> 
                            <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>  
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

        .container{

        }
    </style>    
@endpush