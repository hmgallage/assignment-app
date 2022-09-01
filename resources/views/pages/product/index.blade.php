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
                    <th scope="col">Status</th>
                    <th scope="col">Change Status</th>
                    <th scope="col">Edit/Delete</th>

                  </tr>
                </thead>
                <tbody>
                   @foreach ($products as $ket => $product)
                   <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{ config('images.access_path')}}/{{ $product->images->name }}" alt="" width="150px"></td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if ($product->status ==0)
                            <span class="badge rounded-pill text-bg-danger">Unavailable</span>
                        @else    
                            <span class="badge rounded-pill text-bg-success">Available</span>
                        @endif
                        </a>
                    </td>
                    <td>                  
                        </a>
                        @if ($product->status == 0)
                        <a href="{{ route('product.status', $product->id) }}" class="btn btn-success">
                            <i class="fas fa-check-circle"></i>Available</a>
                        @else
                        <a href="{{ route('product.status', $product->id) }}" class="btn btn-warning">
                            <i class="fas fa-check-circle"></i>Unavailable</a>
                        @endif                       
                    </td> 
                    <td>
                        <a href="javascript:void(0)" class="btn btn-info" >
                        <i class="fa-regular fa-pen-to-square" onclick="productEditModal({{ $product->id }})"></i></a>  
                        <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-delete-left"></i>
                    </td>        
                  </tr>    
                   @endforeach                   
                </tbody>
              </table>
        </div>         
    </div>
   </div> 
  


  <!-- Modal -->
  <div class="modal fade" id="productEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="productEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productEditLabel">Edit This Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="productEditContent"> 
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
    </style>    
@endpush

@push('js')
 <script>
    function productEditModal(product_id){
console.log("call fun");
          var data = {
            product_id: product_id,
          };
          $.ajax({
            url: "{{ route('product.edit') }}",
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType: '',
            data: data,
            success: function (response) {
                $('#productEdit').modal('show');
                $('#productEditContent').html (response);
                
            }
          });

    }
    
 </script>    
@endpush