
@foreach($books as $book)
<div class="card">
    <h5 class="card-header">MOST SOLD RANK #{{$book->id}}</h5>
    <div class="card-body">
      <h5 class="card-title">{{$book->name}}</h5>
      <p class="card-text">{{$book->description}}</p>
      <p class='card-price'>${{$book->price}}</p>
      <a href="#" class="btn btn-primary">Buy it now!</a>
    </div>
  </div><br/>
  @endforeach