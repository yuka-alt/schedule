@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ $week->getTitle() }}</div>
               <div class="card-body">{!! $week->getDays()) !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection