@extends('layout.main')
@section('main-container')

<div class="container">
    @if (count($notes) > 0)
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
           
          @foreach ($notes as $item)
         <tr>
            <th scope="row">1</th>
            <td>{{$item->title}}</td>
            <td>{{$item->desc}}</td>
            <td><div class="row"><a href="/edit/{{$item->note_id}}"class="btn btn-success my-2 my-sm-0 mx-2">Edit</button></a>
                <a href="/delete/{{$item->note_id}}" class="btn btn-danger my-2 my-sm-0 mx-2">Delete</button></a></div></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>

     @else   
     <h1>There is no Notes</h1>
        
   
    @endif
    

</div>

@endsection