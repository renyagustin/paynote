@extends('layouts.home')
@section('content')

<div class="container mt-5">
 <div class="jumbotron jumbotron-fluid">
   <div class="container">
     <h1 class="display-4">
       PayNote
     </h1>
     <p class="lead">
       Pencatatan keuangan pribadi yang mudah dan sederhana.
     </p>
   </div>

   {{-- Button --}}
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block">Login</a>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
