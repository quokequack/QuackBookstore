<title> Quack Bookstore | Storage </title>
<style>

</style>

@extends("layouts.master")

@section("title")
Our Storage
@endsection
@section("content")

<div class='store-container'>
  @foreach($books as $book)
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$book->name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">${{$book->price}}</h6>
        <div class='desc'>
          <p class="card-text">{{$book->description}}</p>
        </div>
        <div class='links'>
          <a href='{{route("edit", ['id'=>$book->id])}}' class="card-link">EDIT</a>
          <form action='{{route('delete', ['id'=>$book->id])}}' method='post'>
            @csrf
            @method('DELETE')
            <button type='submit' class='btn btn-danger delete-btn'>DELETE</button>
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection