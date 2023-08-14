@extends('layout.main')
@section('main-container')

<div class="container my-2">
<h1 class="center">{{$title}}</h1>
    <form class="my-2" method="post" action="{{$url}}">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value={{isset($customer) ? $customer->title : ''}} >
          
        </div>
        <div class="form-group">
          <label for="desc">Description</label>
          <input type="text" class="form-control" id="desc" name="desc" value={{isset($customer) ? $customer->desc : ''}} >
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection