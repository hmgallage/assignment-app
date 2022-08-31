@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Welcome</h1>
        </div>    
    </div>
   </div> 
@endsection


@push('css')
    <style>
        .page-title{
            padding-top: 30vh;
            font-size: 40pt;
        }
    </style>    
@endpush