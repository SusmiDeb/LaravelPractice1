@extends('layout')
       


@section('content')
             
<div class="container-fluid">
          <h1>Login  Part<h1>
      
          <form action="/loginsubmit"method="POST">
            @csrf
            
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pssword">
                  </div>
                 
                <button type="submit" class="btn btn-primary">Submit</button>

        </form>

</div>      
 @endsection
