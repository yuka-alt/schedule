@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ $calendar->getTitle() }}</div>
               <div class="card-body">
		          			{!! $calendar->render() !!}
                    <!-- {*!! $calendar->time() !!*} -->
               </div>
           </div>
       </div>
   </div>
</div>
@endsection