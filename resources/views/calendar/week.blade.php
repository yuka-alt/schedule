@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">
　　               <a href="/week/">&laquo; 前週</a>
                   {{ $calendar->getTitle() }}
                   <a href="/week/">次週 &laquo;</a> 
                </div>
               <div class="card-body">
		          			{!! $calendar->render() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection