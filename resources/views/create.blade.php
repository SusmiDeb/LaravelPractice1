
@extends('layout')
       


@section('content')
<h1>Account page</h1>
<form action="/createsubmit"method="POST">
            @csrf
            <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Name:</label>
                  <input type="name" class="form-control" id="email" placeholder="Enter name" name="naame">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="emai">
                  </div>
                  <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pword">
                  </div>
                 
                <button type="submit" class="btn btn-primary">Submit</button>

        </form>
 @endsection
