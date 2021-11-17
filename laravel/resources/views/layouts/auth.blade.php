@extends('layouts.layout')

@section('title', 'ユーザ認証')

@section('content')
<p>{{$message}}</p>
 <table>
   <form action="/layout/auth" method="post">
  <tr><th>mail;</th><td><input type="text" name="e-mail"></td></tr>
  </form>
 </table>
@endsection