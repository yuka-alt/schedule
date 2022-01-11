@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
                <div class="card-header">
                    <a href="/calendar/{{ $calendar->previous}}">前月</a>
                    {{ $calendar->getTitle() }}
                    <a href="/calendar/{{ $calendar->next}}">来月</a>
                    <a href="/calendar/">今月</a>
                    <a href="/create/">予定登録</a>
                </div>
                <div class="card-body">
                    {!! $calendar->getTimezone() !!}
					{!! $calendar->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection