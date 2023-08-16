@extends('layout.main')
@section('main-container')

<div class="container my-2">
<h1 class="center">Login Here</h1>
    <form class="my-2" method="post" action="{{url('/')}}/login">
        @csrf
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username">
          
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection