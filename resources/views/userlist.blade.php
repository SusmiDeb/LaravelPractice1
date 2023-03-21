@extends('layout')
       


@section('content')
<h1>User List page</h1>
<?php //print_r($user)?>
<div> 
    <h5> Here User list</h5>
     <ul>
          @foreach($user as $u)
           <li> <span>{{$u->id}} <span> <span>{{$u->name}} <span> <span>{{$u->email}} <span> </li>
          @endforeach
     </ul>
</div>
 @endsection